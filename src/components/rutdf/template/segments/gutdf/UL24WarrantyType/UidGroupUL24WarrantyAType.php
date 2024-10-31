<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL24WarrantyType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;
use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing UidGroupUL24WarrantyAType
 */
class UidGroupUL24WarrantyAType extends GutdfSegment
{
    /**
     * 24.2. УИд договора поручительства
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 24.3. Размер поручительства
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 24.4. Валюта поручительства
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 24.5. Дата заключения договора поручительства
     *
     * @var string $openDate
     */
    private $openDate = null;

    /**
     * 24.6. Дата прекращения поручительства согласно договору
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * 24.7. Дата фактического прекращения поручительства
     *
     * @var \DateTime $factEndDate
     */
    private $factEndDate = null;

    /**
     * 24.8. Код причины прекращения поручительства
     *
     * @var int $endCode
     */
    private $endCode = null;

    /**
     * Gets as uid
     *
     * 24.2. УИд договора поручительства
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * 24.2. УИд договора поручительства
     *
     * @param string $uid
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as sum
     *
     * 24.3. Размер поручительства
     *
     * @return string
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Sets a new sum
     *
     * 24.3. Размер поручительства
     *
     * @param string $sum
     * @return self
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
        return $this;
    }

    /**
     * Gets as currency
     *
     * 24.4. Валюта поручительства
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * 24.4. Валюта поручительства
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as openDate
     *
     * 24.5. Дата заключения договора поручительства
     *
     * @return string
     */
    public function getOpenDate()
    {
        return $this->openDate;
    }

    /**
     * Sets a new openDate
     *
     * 24.5. Дата заключения договора поручительства
     *
     * @param string $openDate
     * @return self
     */
    public function setOpenDate($openDate)
    {
        $this->openDate = $openDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * 24.6. Дата прекращения поручительства согласно договору
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * 24.6. Дата прекращения поручительства согласно договору
     *
     * @param string $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as factEndDate
     *
     * 24.7. Дата фактического прекращения поручительства
     *
     * @return \DateTime
     */
    public function getFactEndDate()
    {
        return $this->factEndDate;
    }

    /**
     * Sets a new factEndDate
     *
     * 24.7. Дата фактического прекращения поручительства
     *
     * @param \DateTime $factEndDate
     * @return self
     */
    public function setFactEndDate(?\DateTime $factEndDate = null)
    {
        $this->factEndDate = $factEndDate;
        return $this;
    }

    /**
     * Gets as endCode
     *
     * 24.8. Код причины прекращения поручительства
     *
     * @return int
     */
    public function getEndCode()
    {
        return $this->endCode;
    }

    /**
     * Sets a new endCode
     *
     * 24.8. Код причины прекращения поручительства
     *
     * @param int $endCode
     * @return self
     */
    public function setEndCode($endCode)
    {
        $this->endCode = $endCode;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'Uid_group_UL_24_Warranty';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'УИд договора поручительства' => 'Заполняется, если по обязательству поручителя формируется КИ. Значение показателя должно соответствовать значению показателя 17.1 «УИд сделки» блока 17 в КИ поручителя – физического лица или показателя 10.1 «УИд сделки» блока 10 в КИ поручителя – юридического лица.',
            'Размер поручительства' => '',
            'Валюта поручительства' => '',
            'Дата заключения договора поручительства' => '',
            'Дата прекращения поручительства согласно договору' => '',
            'Дата фактического прекращения поручительства' => '',
            'Код причины прекращения поручительства' => 'Заполняется по справочнику 4.2.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Договор поручительства';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $warranty = $this->template->sendData->getAccountReplyRUTDF()->getGuarantor()[$this->idx];

        $this->uid = UuidHelper::getUuidWithControl($warranty->guaranteeUuid);
        $this->sum = $this->formatCurrency($warranty->guaranteeVolume);
        $this->currency = $warranty->currencyCode;
        $this->openDate = $this->formatDate($warranty->guaranteeAgreementDt);
        $this->endDate = $this->formatDate($warranty->guaranteeExpirationDate);
        $this->factEndDate = $this->formatDate($warranty->guaranteeFactExpirationDate);
        $this->endCode = $warranty->guaranteeFactExpirationDate;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uid',
            'sum',
            'currency',
            'openDate',
            'endDate',
            'factEndDate',
            'endCode',
        ];
    }
}

