<?php

namespace mfteam\nbch\models;

/**
 * Сведения о судебном споре или требовании по обязательству
 */
class LegalItemsRUTDF extends BaseItem
{
    /**
     * Признак наличия судебного акта
     * Код «1» – суд принял акт, которым заканчивается рассмотрение дела по существу (в частности, судебное решение или судебный приказ);
     * код «0» – обстоятельство кода «1» отсутствует.
     * Если указан код «0», показатели 39.3–39.6 не заполняются.
     * @var int|null $hasCourtAct
     */
    public $hasCourtAct = null;
    
    /**
     * Дата принятия судебного акта
     * @var string $courtActDt
     */
    public $courtActDt = '';
    
    /**
     * Номер судебного акта
     * @var string $courtActNum
     */
    public $courtActNum = '';
    
    /**
     * Резолютивная часть судебного акта.
     * Цитируется резолютивная часть судебного акта. Из цитируемого текста исключаются номера счетов и не принадлежащие субъекту персональные данные.
     * @var string $resolution
     */
    public $resolution = '';
    
    /**
     * Признак вступления акта в законную силу
     * Код «1» – судебный акт вступил в законную силу;
     * код «0» – обстоятельство кода «1» отсутствует.
     * @var int $courtActEffectCode
     */
    public $courtActEffectCode = null;

    /**
     * Код иска или требования.
     * Заполняется по справочнику 5.6
     * @var string $lawsuitCode
     */
    public $lawsuitCode = '';

    /**
     * Сумма требований, подлежащих удовлетворению на основании решения суда.
     * @var float|null $sumTotal
     */
    public $sumTotal = null;

    /**
     * Дополнительные сведения по судебному акту, заполняется по решению Источника.
     * @var string $info
     */
    public $info = '';
}
