<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 31.05.2020
 * Time: 14:23
 */

namespace mfteam\nbch\components\tutdf\template\segments;


use mfteam\nbch\components\tutdf\template\TutdfTemplate;
use mfteam\nbch\models\Payment;

/**
 * Сегмент Фактическое исполнение обязательств (платежи) (PA)
 */
class PASegment extends BaseSegment
{
    /**
     * @var string
     */
    private $sequenceNumber;
    /**
     * @var Payment
     */
    private $payment;
    
    public function __construct(TutdfTemplate $template, string $sequenceNumber, Payment $payment, $config = [])
    {
        $this->sequenceNumber = $sequenceNumber;
        $this->payment = $payment;
        parent::__construct($template, $config);
    }
    
    /**
     * @return bool
     */
    public function validate(): bool
    {
        if ($this->payment->validate()) {
            $this->_errors = $this->payment->errors;
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @return string
     */
    public function getSegmentName(): string
    {
        return 'PA' . $this->sequenceNumber;
    }
    
    /**
     * @return array
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->payment->paymtAmt,
            $this->payment->paymtAmtDue,
            $this->payment->currencyCode,
            $this->payment->paymtDate,
            $this->payment->paymtVolume,
            $this->payment->m24Total
        ];
    }
    
    public function getDescription(): string
    {
        return '-используйте данный сегмент для передачи данных о фактически произведенных заемщиком платежах <br>
                -если в один день было произведено несколько платежей, передайте их сумму за этот день, т.е. на один день может передаваться только один сегмент PA<br>
                -сегмент может передаваться только вместе с сегментом Сделка (TR) и находиться в записи до него<br>
                -достаточно однократно передать информацию о конкретном платеже(ах), однако убедитесь, что эта информация была успешно принята Бюро в соответствии с регламентом взаимодействия<br>
                -в случае необходимости корректировки данных о платеже за какую-либо дату, просто передайте измененные данные в этом сегменте с указанием той же даты<br>
                -по заемщику – сегмент обязателен при наличии платежей<br>
                -по поручителю – сегмент не передается до даты начала выполнения им обязательств заемщика, после наступления этой даты – обязательно при наличии платежей<br>
                -по принципалу – сегмент не передается<br>
                ';
    }
    
    public function getTitle(): string
    {
        return 'Сегмент Фактическое исполнение обязательств (платежи) (PA)';
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => 'Должен содержать буквы и цифры PA01 для первой записи о платеже, PA02 для второй и т.д. Допустимо до 99 сегментов PA на каждую запись.',
            'Сумма произведенного платежа' => 'Сумма фактического исполнения обязательств (сумма произведенного платежа) за исключением суммы, внесенной с нарушением сроков более, чем на 30 календарных дней.
                Значение определяется для каждого платежа в соответствии с требованиями п. 3.8 Приложения 1 к Указанию Банка России от 31 августа 2018 года № 4892-У.
                ',
            'Сумма произведенного платежа, за исключением просроченных платежей сроком свыше 30 дней' => 'Сумма фактического исполнения обязательств (сумма произведенного платежа) за исключением суммы, внесенной с нарушением сроков более, чем на 30 календарных дней.',
            'Валюта платежа' => 'Валюта, в которой произведен платеж',
            'Дата платежа' => 'Дата, когда был осуществлен платеж',
            'Объем платежа' => 'Объем, в котором произведен платеж в соответствии с договором займа (кредита):
                Полностью = F
                Не полностью = P
                ',
            'Суммарный размер фактических платежей за 24 календарных месяца за исключением просроченных платежей сроком свыше 30 дней' => 'Сумма фактических платежей за 24 календарных месяца, предшествующих месяцу платежа, за исключением платежей, внесенных с нарушением сроков более чем на 30 календарных дней.
                В случае, если период платежей составляет менее 24 календарных месяцев, указывается сумма фактических платежей за имеющийся период, предшествующий месяцу платежа, за исключением платежей, внесенных с нарушением сроков более чем на 30 календарных дней.
                Значение указывается в валюте платежа и используется для расчета дохода заемщика.
                Значение определяется в соответствии с требованиями п. 3.8 Приложения 1 к Указанию Банка России от 31 августа 2018 г. № 4892-У с учетом Указания Банка России от 30 июля 2019 г. № 5219-У о внесении изменений в Указание Банка России от 31 августа 2018 г. № 4892-У.
                '
        ];
    }
}