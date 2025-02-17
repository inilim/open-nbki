<?php

namespace mfteam\nbch\models;

/**
 * Документ, удостоверяющий личность
 */
class IdReply extends BaseIdReply
{
    
    public const PASSPORT_RU_TYPE = '21';
    
    /**
     * Номер документа
     * @var string $idNum
     */
    public $idNum = '';
    
    /**
     * Код документа. @see IdReply::idTypeList()
     * @var string $idType
     */
    public $idType = '';
    
    /**
     * Наименование иного документа
     * @var string $idTypeText
     */
    public $idTypeText = '';
    
    /**
     * Серия документа
     * @var string $seriesNumber
     */
    public $seriesNumber = '';
    
    /**
     * Дата выдачи документа. "dd.MM.yyyy"
     * @var string $issueDate
     */
    public $issueDate = '';
    
    /**
     * Кем выдан документ.
     * @var string $issueAuthority
     */
    public $issueAuthority = '';
    
    /**
     * Код страны гражданства по ОКСМ.
     * Цифровой код страны согласно Общероссийскому классификатору стран мира.
     * При отсутствии страны в ОКСМ указывается «999».
     * При отсутствии у субъекта гражданства указывается «999».
     * @var string $oksm
     */
    public $oksm = '';
    
    /**
     * Наименование иной страны.
     * Заполняется, если по показателю «Код страны по ОКСМ» указано «999».
     * При отсутствии у субъекта гражданства указывается «гражданство отсутствует».
     * @var string $otherCountry
     */
    public $otherCountry;
    
    /**
     * Наименование иного документа. Заполняется, если по показателю «Код документа» указано «999».
     * @var string $otherId
     */
    public $otherId;
    
    /**
     * Код подразделения.
     * Заполняется только для паспорта гражданина Российской Федерации.
     * @var string $divCode
     */
    public $divCode = '';
    
    /**
     * Дата окончания срока действия документа dd.MM.yyyy
     * Заполняется при наличии такого срока в документе.
     * @var string $validTo
     */
    public $validTo = null;
    
    /**
     * Признак наличия документа. Код «1» – у субъекта имеется документ, удостоверявший личность ранее;
     * код «0» – обстоятельство кода «1» отсутствует.
     * @var int $isPrevId
     */
    public $isPrevId = 0;

    /**
     * Признак иностранного гражданина
     * Заполняется по справочнику 1.8
     * @see ForeignerCode
     * @var string|null
     */
    public $foreignerCode = null;
    
    /**
     * @return string
     */
    public function getOksm(): string
    {
        return $this->oksm;
    }
    
    /**
     * @param string $oksm
     */
    public function setOksm(string $oksm): void
    {
        $this->oksm = $oksm;
    }
    
    /**
     * Виды документов, удостоверяющих личность
     * @return string[]
     */
    public static function idTypeList(): array
    {
        return [
            '21' => 'Паспорт гражданина Российской Федерации',
            '22.1' => 'Паспорт гражданина Российской Федерации, удостоверяющий его личность за пределами территории Российской Федерации',
            '22.2' => 'Дипломатический паспорт, удостоверяющий личность гражданина Российской Федерации за пределами территории Российской Федерации',
            '22.3' => 'Служебный паспорт, удостоверяющий личность гражданина Российской Федерации за пределами территории Российской Федерации',
            '23' => 'Удостоверение личности моряка',
            '24' => 'Удостоверение личности военнослужащего',
            '25' => 'Военный билет военнослужащего',
            '26' => 'Временное удостоверение личности гражданина Российской Федерации, выдаваемое на период оформления паспорта гражданина Российской Федерации',
            '27' => 'Свидетельство о рождении гражданина Российской Федерации',
            '28' => 'Иной документ, удостоверяющий личность гражданина Российской Федерации в соответствии с законодательством Российской Федерации',
            '31' => 'Паспорт иностранного гражданина либо иной документ, установленный федеральным законом или признаваемый в соответствии с международным договором Российской Федерации в качестве документа, удостоверяющего личность иностранного гражданина',
            '32' => 'Документ, выданный иностранным государством и признаваемый в соответствии с международным договором Российской Федерации в качестве документа, удостоверяющего личность лица без гражданства',
            '35' => 'Иной документ, признаваемый документом, удостоверяющим личность лица без гражданства в соответствии с законодательством Российской Федерации и международным договором Российской Федерации',
            '37' => 'Удостоверение беженца',
            '38' => 'Удостоверение вынужденного переселенца',
            '39' => 'Свидетельство о предоставлении временного убежища на территории Российской Федерации',
            '999' => 'Иной документ',
        ];
    }
}
