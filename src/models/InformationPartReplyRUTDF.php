<?php

namespace mfteam\nbch\models;

/**
 * Сведения об обращении
 */
class InformationPartReplyRUTDF extends BaseInformationPartReplyRUTDF
{
    
    /**
     * Код вида участия в сделке
     * Заполняется по справочнику 2.1.
     * @see AccountRelationship::list()
     * @var string $requestedFlagIndicatorCode
     */
    public $requestedFlagIndicatorCode = '';
    
    /**
     * Сумма запрошенного займа (кредита), лизинга или обеспечения
     * @var string $requestedAmt
     */
    public $requestedAmt = '';
    
    /**
     * Запрошенная валюта обязательства
     * @var string $requestedCurrencyCode
     */
    public $requestedCurrencyCode = 'RUB';
    
    /**
     * УИд обращения.
     * УИд, который присваивается обращению по правилам, установленным приложением 2 к Положению Банка России «О порядке формирования кредитной истории» для присвоения УИд сделке.
     * Если по этому обращению совершена сделка, то значение поля должно соответствовать показателю 17.1 «УИд сделки».
     * Если УИд не присваивался, то укажите его произвольный уникальный идентификатор в показателе 55.14 «Номер обращения».
     * УИд обязателен для всех обращений, показатель «Дата обращения» по которым больше или равен 01.11.2022.
     * @var string $applicationNumber
     */
    public $applicationNumber = '';
    
    /**
     * Номер обращения
     * Номер обращения, присвоенный источником.
     * @var string $oldAppNum
     */
    public $oldAppNum = '';
    
    /**
     * Дата обращения
     * @var string $applicationDate
     */
    public $applicationDate = '';
    
    /**
     * Код источника
     * 1    Заимодавец (кредитор) – кредитная организация
     * 2    Заимодавец – микрофинансовая организация
     * 3    Заимодавец – кредитный потребительский кооператив
     * 4    Заимодавец – сельскохозяйственный кредитный потребительский кооператив
     * 5    Заимодавец-ломбард
     * 6    Заимодавец – иная организация
     * 7    Организация-лизингодатель
     * 8    Оператор инвестиционной платформы
     * 9    Организация-гарант
     * 10    Организация – взыскатель платы за жилое помещение, коммунальные услуги или услуги связи
     * 11    Федеральный орган исполнительной власти, уполномоченный на осуществление функций по обеспечению установленного порядка деятельности судов и исполнению судебных актов и актов других органов
     * 12    Арбитражный управляющий
     * 13    Ликвидационная комиссия или ликвидатор
     * 14    Специализированное финансовое общество
     * 15    Ипотечный агент
     * 16    Кредитный управляющий синдиката кредиторов
     * 17    Лицо, осуществляющее деятельность по возврату просроченной задолженности (коллекторская организация)
     * 99    Иное лицо
     * @var string $creditorTypeCode
     */
    public $creditorTypeCode = '';
    
    /**
     * Код способа обращения
     * Заполняется кодом 6, 7 или 8 по справочнику 6.4.1.
     * @var string $applicationShipmentCode
     */
    public $applicationShipmentCode = '';
    
    /**
     * Дата окончания действия инвестиционного предложения, одобрения обращения (оферты кредитора)
     * Заполняется для инвестиционного предложения в соответствии с частью 2 статьи 13 Федерального закона
     * от 2 августа 2019 года № 259-ФЗ «О привлечении инвестиций с использованием инвестиционных платформ
     * и о внесении изменений в отдельные законодательные акты Российской Федерации» (Собрание законодательства Российской Федерации, 2019, № 31, ст. 4418)
     * или оферты кредитора со сроком для ее акцепта и принятом решении об одобрении.
     * @var string $approvalExpireDate
     */
    public $approvalExpireDate = '';
    
    /**
     * Дата окончания срока рассмотрения обращения
     * Плановая дата окончания срока рассмотрения источником обращения.
     * В случае если по истечении 5 календарных дней со дня окончания указанного по этому показателю срока
     * в бюро не поступили сведения об изменении стадии рассмотрения обращения, НБКИ исключает из КИ информацию об обращении.
     * @var string $considerationShipmentDate
     */
    public $considerationShipmentDate = '';
    
    /**
     * Код цели запрошенного займа (кредита)
     * Заполняется по справочнику 2.4
     * @var string $requestloanCode
     */
    public $requestloanCode = '';
    
    /**
     * Код стадии рассмотрения обращения
     * Заполняется по справочнику 6.4.2
     * @var string $considerationShipmentCode
     */
    public $considerationShipmentCode = '';
    
    /**
     * Дата перехода обращения в текущую стадию рассмотрения
     * Дата, в которую рассмотрение обращения перешло к стадии, указанной по показателю 55.11 «Код стадии рассмотрения обращения».
     * @var string $transitDate
     */
    public $transitDate = '';
    
    /**
     * Код вида обращения
     * Заполняется по справочнику 6.4
     * @var string $applicationCode
     */
    public $applicationCode = '';
    
    /**
     * Код вида участия в сделке
     * Заполняется по справочнику 2.1.
     * @var int $flagIndicatorCode
     */
    public $flagIndicatorCode = null;
    
    /**
     * Код вида займа (кредита)
     * Заполняется по справочнику 2.3.
     * @var int $approvedLoanTypeCode
     */
    public $approvedLoanTypeCode = null;
    
    /**
     * УИд сделки
     * @var string $agreementNumber
     */
    public $agreementNumber = '';
    
    /**
     * Номер договора прекративших действие до 29.10.2020
     * @var string $oldAgreementNum
     */
    public $oldAgreementNum = '';
    
    /**
     * Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     * @var string $fundDt
     */
    public $fundDt = '';
    
    /**
     * Признак просрочки должника более 90 дней
     * Код «1» – должник нарушил срок платежа по займу или лизингу более чем на 90 календарных дней;
     * код «0» – обстоятельство кода «1» отсутствует.
     * Продолжительность просрочки определяется методом ФИФО.
     * @var int $defaultFlag
     */
    public $defaultFlag = null;
    
    /**
     * Признак прекращения обязательства.
     * Код «1» – взаимные обязательства субъекта и источника прекращены (независимо от основания);
     * код «0» – обстоятельство кода «1» отсутствует.
     * @var int $loanIndicator
     */
    public $loanIndicator = null;
    
    /**
     * Дата отказа
     * @var string $rejectedDate
     */
    public $rejectedDate = '';
    
    /**
     * Коды причины отказа.
     * Заполняется по справочнику 6.5.
     * @var int[] $rejectedReasonCode
     */
    public $rejectedReasonCode = [];
    
}