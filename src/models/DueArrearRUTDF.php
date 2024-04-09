<?php

namespace mfteam\nbch\models;

/**
 * Сведения о срочной задолженности
 */
class DueArrearRUTDF extends BaseItem
{
    /**
     * Дата возникновения срочной задолженности.
     * Указывается дата возникновения срочной задолженности.
     * По обязательству источника выдавать сумму займа (кредита) траншами или в пределах расходного лимита указывается дата возникновения срочной
     * задолженности при передаче первого транша и каждый раз при выдаче транша после полного погашения задолженности по предыдущему (предыдущим) траншам.
     * @var string $startDt
     */
    public $startDt = '';
    
    /**
     * Признак расчета по последнему платежу.
     * Код события, на момент наступления которого рассчитана сумма срочной задолженности:
     * код «1» – субъект внес платеж, либо наступил срок для внесения платежа по срочному долгу;
     * код «0» – прошло 30 календарных дней с даты последнего расчета суммы срочной задолженности по показателю 26.7 «Дата расчета».
     * Если ни одно из указанных событий не наступило, этот показатель не заполняется.
     * @var int $lastPaymentDueCode
     */
    public $lastPaymentDueCode = null;
    
    /**
     * Сумма срочной задолженности.
     * Сумма определяется на момент наступления каждого события, которое указано по показателю 26.2 «Признак расчета по последнему платежу».
     * Если указано значение «0,00», иные показатели блока 26 не заполняются.
     * Если показатель 26.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2.
     * Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».
     * @var float $amtOutstanding
     */
    public $amtOutstanding;
    
    /**
     * Сумма срочной задолженности по основному долгу
     * Сумма определяется на момент наступления каждого события, которое указано по показателю 26.2 «Признак расчета по последнему платежу».
     * Если показатель 26.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2.
     * Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».
     * @var float $principalOutstanding
     */
    public $principalOutstanding;
    
    /**
     * Сумма срочной задолженности по процентам
     * Сумма определяется на момент наступления каждого события, которое указано по показателю 26.2 «Признак расчета по последнему платежу».
     * Если показатель 26.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2.
     * Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».
     * @var float $intOutstanding
     */
    public $intOutstanding;
    
    /**
     * Сумма срочной задолженности по иным требованиям
     * Сумма определяется на момент наступления каждого события, которое указано по показателю 26.2 «Признак расчета по последнему платежу».
     * Если показатель 26.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2.
     * Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».
     * @var float $otherAmtOutstanding
     */
    public $otherAmtOutstanding;
    
    /**
     * Дата расчета
     * Дата, по состоянию на которую рассчитаны значения показателей
     * @var string $calcDate
     */
    public $calcDate = '';
    
}