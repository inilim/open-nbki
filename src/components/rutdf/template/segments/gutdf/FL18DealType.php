<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing FL18DealType
 *
 * Блок 18. Общие сведения о сделке
 * XSD Type: FL_18_Deal_Type
 */
class FL18DealType extends GutdfSegment
{
    /**
     * 18.1. Код вида участия в сделке
     *
     * @var int $role
     */
    private $role = null;

    /**
     * 18.3. Код типа сделки
     *
     * @var int $code
     */
    private $code = null;

    /**
     * 18.4. Код вида займа (кредита)
     *
     * @var int $kindCode
     */
    private $kindCode = null;

    /**
     * 18.5. Код цели займа (кредита)
     *
     * @var string[] $purposeCode
     */
    private $purposeCode = [
        
    ];

    /**
     * 18.6. Признак потребительского кредита (займа) = 0
     *
     * @var string $consumerExist0
     */
    private $consumerExist0 = null;

    /**
     * 18.6. Признак потребительского кредита (займа) = 1
     *
     * @var string $consumerExist1
     */
    private $consumerExist1 = null;

    /**
     * 18.7. Признак использования платежной карты = 0
     *
     * @var string $cardExist0
     */
    private $cardExist0 = null;

    /**
     * 18.7. Признак использования платежной карты = 1
     *
     * @var string $cardExist1
     */
    private $cardExist1 = null;

    /**
     * 18.8. Признак возникновения обязательства в результате новации = 0
     *
     * @var string $novationExist0
     */
    private $novationExist0 = null;

    /**
     * 18.8. Признак возникновения обязательства в результате новации = 1
     *
     * @var string $novationExist1
     */
    private $novationExist1 = null;

    /**
     * 18.9. Признак денежного обязательства источника = 0
     *
     * @var string $monetarySourceExist0
     */
    private $monetarySourceExist0 = null;

    /**
     * 18.9. Признак денежного обязательства источника = 1
     *
     * @var string $monetarySourceExist1
     */
    private $monetarySourceExist1 = null;

    /**
     * 18.10. Признак денежного обязательства субъекта = 0
     *
     * @var string $monetarySubjectExist0
     */
    private $monetarySubjectExist0 = null;

    /**
     * 18.10. Признак денежного обязательства субъекта = 1
     *
     * @var string $monetarySubjectExist1
     */
    private $monetarySubjectExist1 = null;

    /**
     * 18.11. Дата прекращения обязательства субъекта по условиям сделки
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * 18.12. Код вида кредитора – заимодавца
     *
     * @var int $creditorCode
     */
    private $creditorCode = null;

    /**
     * 18.13. Признак возникновения обязательства в результате получения части прав кредитора от другого лица = 0
     *
     * @var string $partialExist0
     */
    private $partialExist0 = null;

    /**
     * 18.13. Признак возникновения обязательства в результате получения части прав кредитора от другого лица = 1
     *
     * @var string $partialExist1
     */
    private $partialExist1 = null;

    /**
     * 18.18. УИд сделки, по которой права кредитора частично переданы другому лицу
     *
     * @var string $transferUid
     */
    private $transferUid = null;

    /**
     * 18.14. Признак кредитной линии = 0
     *
     * @var string $creditLineExist0
     */
    private $creditLineExist0 = null;

    /**
     * 18.14. Признак кредитной линии = 1
     *
     * @var string $creditLineExist1
     */
    private $creditLineExist1 = null;

    /**
     * 18.15. Код типа кредитной линии
     *
     * @var int $creditLineCode
     */
    private $creditLineCode = null;

    /**
     * 18.16. Признак плавающей (переменной) процентной ставки = 0
     *
     * @var string $floatRateExist0
     */
    private $floatRateExist0 = null;

    /**
     * 18.16. Признак плавающей (переменной) процентной ставки = 1
     *
     * @var string $floatRateExist1
     */
    private $floatRateExist1 = null;

    /**
     * 18.17. Признак частичной передачи прав кредитора другому лицу = 0
     *
     * @var string $partialTransferExist0
     */
    private $partialTransferExist0 = null;

    /**
     * 18.17. Признак частичной передачи прав кредитора другому лицу = 1
     *
     * @var string $partialTransferExist1
     */
    private $partialTransferExist1 = null;

    /**
     * 18.19. Дата возникновения обязательства субъекта
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * 18.20. Признак погашения по графику платежей = 0
     *
     * @var string $repaymentFact0
     */
    private $repaymentFact0 = null;

    /**
     * 18.20. Признак погашения по графику платежей = 1
     *
     * @var string $repaymentFact1
     */
    private $repaymentFact1 = null;

    /**
     * 18.21. Признак перевода (перехода) обязательства субъекта = 0
     *
     * @var string $transferFact0
     */
    private $transferFact0 = null;

    /**
     * 18.21. Признак перевода (перехода) обязательства субъекта = 1
     *
     * @var string $transferFact1
     */
    private $transferFact1 = null;

    /**
     * 18.22. Признак партнерского финансирования = 0
     *
     * @var string $partnerFinancingFact0
     */
    private $partnerFinancingFact0 = null;

    /**
     * 18.22. Признак партнерского финансирования = 1
     *
     * @var string $partnerFinancingFact1
     */
    private $partnerFinancingFact1 = null;

    /**
     * Gets as role
     *
     * 18.1. Код вида участия в сделке
     *
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * 18.1. Код вида участия в сделке
     *
     * @param int $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as code
     *
     * 18.3. Код типа сделки
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 18.3. Код типа сделки
     *
     * @param int $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as kindCode
     *
     * 18.4. Код вида займа (кредита)
     *
     * @return int
     */
    public function getKindCode()
    {
        return $this->kindCode;
    }

    /**
     * Sets a new kindCode
     *
     * 18.4. Код вида займа (кредита)
     *
     * @param int $kindCode
     * @return self
     */
    public function setKindCode($kindCode)
    {
        $this->kindCode = $kindCode;
        return $this;
    }

    /**
     * Adds as purposeCode
     *
     * 18.5. Код цели займа (кредита)
     *
     * @return self
     * @param string $purposeCode
     */
    public function addToPurposeCode($purposeCode)
    {
        $this->purposeCode[] = $purposeCode;
        return $this;
    }

    /**
     * isset purposeCode
     *
     * 18.5. Код цели займа (кредита)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurposeCode($index)
    {
        return isset($this->purposeCode[$index]);
    }

    /**
     * unset purposeCode
     *
     * 18.5. Код цели займа (кредита)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurposeCode($index)
    {
        unset($this->purposeCode[$index]);
    }

    /**
     * Gets as purposeCode
     *
     * 18.5. Код цели займа (кредита)
     *
     * @return string[]
     */
    public function getPurposeCode()
    {
        return $this->purposeCode;
    }

    /**
     * Sets a new purposeCode
     *
     * 18.5. Код цели займа (кредита)
     *
     * @param string $purposeCode
     * @return self
     */
    public function setPurposeCode(array $purposeCode = null)
    {
        $this->purposeCode = $purposeCode;
        return $this;
    }

    /**
     * Gets as consumerExist0
     *
     * 18.6. Признак потребительского кредита (займа) = 0
     *
     * @return string
     */
    public function getConsumerExist0()
    {
        return $this->consumerExist0;
    }

    /**
     * Sets a new consumerExist0
     *
     * 18.6. Признак потребительского кредита (займа) = 0
     *
     * @param string $consumerExist0
     * @return self
     */
    public function setConsumerExist0($consumerExist0)
    {
        $this->consumerExist0 = $consumerExist0;
        return $this;
    }

    /**
     * Gets as consumerExist1
     *
     * 18.6. Признак потребительского кредита (займа) = 1
     *
     * @return string
     */
    public function getConsumerExist1()
    {
        return $this->consumerExist1;
    }

    /**
     * Sets a new consumerExist1
     *
     * 18.6. Признак потребительского кредита (займа) = 1
     *
     * @param string $consumerExist1
     * @return self
     */
    public function setConsumerExist1($consumerExist1)
    {
        $this->consumerExist1 = $consumerExist1;
        return $this;
    }

    /**
     * Gets as cardExist0
     *
     * 18.7. Признак использования платежной карты = 0
     *
     * @return string
     */
    public function getCardExist0()
    {
        return $this->cardExist0;
    }

    /**
     * Sets a new cardExist0
     *
     * 18.7. Признак использования платежной карты = 0
     *
     * @param string $cardExist0
     * @return self
     */
    public function setCardExist0($cardExist0)
    {
        $this->cardExist0 = $cardExist0;
        return $this;
    }

    /**
     * Gets as cardExist1
     *
     * 18.7. Признак использования платежной карты = 1
     *
     * @return string
     */
    public function getCardExist1()
    {
        return $this->cardExist1;
    }

    /**
     * Sets a new cardExist1
     *
     * 18.7. Признак использования платежной карты = 1
     *
     * @param string $cardExist1
     * @return self
     */
    public function setCardExist1($cardExist1)
    {
        $this->cardExist1 = $cardExist1;
        return $this;
    }

    /**
     * Gets as novationExist0
     *
     * 18.8. Признак возникновения обязательства в результате новации = 0
     *
     * @return string
     */
    public function getNovationExist0()
    {
        return $this->novationExist0;
    }

    /**
     * Sets a new novationExist0
     *
     * 18.8. Признак возникновения обязательства в результате новации = 0
     *
     * @param string $novationExist0
     * @return self
     */
    public function setNovationExist0($novationExist0)
    {
        $this->novationExist0 = $novationExist0;
        return $this;
    }

    /**
     * Gets as novationExist1
     *
     * 18.8. Признак возникновения обязательства в результате новации = 1
     *
     * @return string
     */
    public function getNovationExist1()
    {
        return $this->novationExist1;
    }

    /**
     * Sets a new novationExist1
     *
     * 18.8. Признак возникновения обязательства в результате новации = 1
     *
     * @param string $novationExist1
     * @return self
     */
    public function setNovationExist1($novationExist1)
    {
        $this->novationExist1 = $novationExist1;
        return $this;
    }

    /**
     * Gets as monetarySourceExist0
     *
     * 18.9. Признак денежного обязательства источника = 0
     *
     * @return string
     */
    public function getMonetarySourceExist0()
    {
        return $this->monetarySourceExist0;
    }

    /**
     * Sets a new monetarySourceExist0
     *
     * 18.9. Признак денежного обязательства источника = 0
     *
     * @param string $monetarySourceExist0
     * @return self
     */
    public function setMonetarySourceExist0($monetarySourceExist0)
    {
        $this->monetarySourceExist0 = $monetarySourceExist0;
        return $this;
    }

    /**
     * Gets as monetarySourceExist1
     *
     * 18.9. Признак денежного обязательства источника = 1
     *
     * @return string
     */
    public function getMonetarySourceExist1()
    {
        return $this->monetarySourceExist1;
    }

    /**
     * Sets a new monetarySourceExist1
     *
     * 18.9. Признак денежного обязательства источника = 1
     *
     * @param string $monetarySourceExist1
     * @return self
     */
    public function setMonetarySourceExist1($monetarySourceExist1)
    {
        $this->monetarySourceExist1 = $monetarySourceExist1;
        return $this;
    }

    /**
     * Gets as monetarySubjectExist0
     *
     * 18.10. Признак денежного обязательства субъекта = 0
     *
     * @return string
     */
    public function getMonetarySubjectExist0()
    {
        return $this->monetarySubjectExist0;
    }

    /**
     * Sets a new monetarySubjectExist0
     *
     * 18.10. Признак денежного обязательства субъекта = 0
     *
     * @param string $monetarySubjectExist0
     * @return self
     */
    public function setMonetarySubjectExist0($monetarySubjectExist0)
    {
        $this->monetarySubjectExist0 = $monetarySubjectExist0;
        return $this;
    }

    /**
     * Gets as monetarySubjectExist1
     *
     * 18.10. Признак денежного обязательства субъекта = 1
     *
     * @return string
     */
    public function getMonetarySubjectExist1()
    {
        return $this->monetarySubjectExist1;
    }

    /**
     * Sets a new monetarySubjectExist1
     *
     * 18.10. Признак денежного обязательства субъекта = 1
     *
     * @param string $monetarySubjectExist1
     * @return self
     */
    public function setMonetarySubjectExist1($monetarySubjectExist1)
    {
        $this->monetarySubjectExist1 = $monetarySubjectExist1;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * 18.11. Дата прекращения обязательства субъекта по условиям сделки
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
     * 18.11. Дата прекращения обязательства субъекта по условиям сделки
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
     * Gets as creditorCode
     *
     * 18.12. Код вида кредитора – заимодавца
     *
     * @return int
     */
    public function getCreditorCode()
    {
        return $this->creditorCode;
    }

    /**
     * Sets a new creditorCode
     *
     * 18.12. Код вида кредитора – заимодавца
     *
     * @param int $creditorCode
     * @return self
     */
    public function setCreditorCode($creditorCode)
    {
        $this->creditorCode = $creditorCode;
        return $this;
    }

    /**
     * Gets as partialExist0
     *
     * 18.13. Признак возникновения обязательства в результате получения части прав кредитора от другого лица = 0
     *
     * @return string
     */
    public function getPartialExist0()
    {
        return $this->partialExist0;
    }

    /**
     * Sets a new partialExist0
     *
     * 18.13. Признак возникновения обязательства в результате получения части прав кредитора от другого лица = 0
     *
     * @param string $partialExist0
     * @return self
     */
    public function setPartialExist0($partialExist0)
    {
        $this->partialExist0 = $partialExist0;
        return $this;
    }

    /**
     * Gets as partialExist1
     *
     * 18.13. Признак возникновения обязательства в результате получения части прав кредитора от другого лица = 1
     *
     * @return string
     */
    public function getPartialExist1()
    {
        return $this->partialExist1;
    }

    /**
     * Sets a new partialExist1
     *
     * 18.13. Признак возникновения обязательства в результате получения части прав кредитора от другого лица = 1
     *
     * @param string $partialExist1
     * @return self
     */
    public function setPartialExist1($partialExist1)
    {
        $this->partialExist1 = $partialExist1;
        return $this;
    }

    /**
     * Gets as transferUid
     *
     * 18.18. УИд сделки, по которой права кредитора частично переданы другому лицу
     *
     * @return string
     */
    public function getTransferUid()
    {
        return $this->transferUid;
    }

    /**
     * Sets a new transferUid
     *
     * 18.18. УИд сделки, по которой права кредитора частично переданы другому лицу
     *
     * @param string $transferUid
     * @return self
     */
    public function setTransferUid($transferUid)
    {
        $this->transferUid = $transferUid;
        return $this;
    }

    /**
     * Gets as creditLineExist0
     *
     * 18.14. Признак кредитной линии = 0
     *
     * @return string
     */
    public function getCreditLineExist0()
    {
        return $this->creditLineExist0;
    }

    /**
     * Sets a new creditLineExist0
     *
     * 18.14. Признак кредитной линии = 0
     *
     * @param string $creditLineExist0
     * @return self
     */
    public function setCreditLineExist0($creditLineExist0)
    {
        $this->creditLineExist0 = $creditLineExist0;
        return $this;
    }

    /**
     * Gets as creditLineExist1
     *
     * 18.14. Признак кредитной линии = 1
     *
     * @return string
     */
    public function getCreditLineExist1()
    {
        return $this->creditLineExist1;
    }

    /**
     * Sets a new creditLineExist1
     *
     * 18.14. Признак кредитной линии = 1
     *
     * @param string $creditLineExist1
     * @return self
     */
    public function setCreditLineExist1($creditLineExist1)
    {
        $this->creditLineExist1 = $creditLineExist1;
        return $this;
    }

    /**
     * Gets as creditLineCode
     *
     * 18.15. Код типа кредитной линии
     *
     * @return int
     */
    public function getCreditLineCode()
    {
        return $this->creditLineCode;
    }

    /**
     * Sets a new creditLineCode
     *
     * 18.15. Код типа кредитной линии
     *
     * @param int $creditLineCode
     * @return self
     */
    public function setCreditLineCode($creditLineCode)
    {
        $this->creditLineCode = $creditLineCode;
        return $this;
    }

    /**
     * Gets as floatRateExist0
     *
     * 18.16. Признак плавающей (переменной) процентной ставки = 0
     *
     * @return string
     */
    public function getFloatRateExist0()
    {
        return $this->floatRateExist0;
    }

    /**
     * Sets a new floatRateExist0
     *
     * 18.16. Признак плавающей (переменной) процентной ставки = 0
     *
     * @param string $floatRateExist0
     * @return self
     */
    public function setFloatRateExist0($floatRateExist0)
    {
        $this->floatRateExist0 = $floatRateExist0;
        return $this;
    }

    /**
     * Gets as floatRateExist1
     *
     * 18.16. Признак плавающей (переменной) процентной ставки = 1
     *
     * @return string
     */
    public function getFloatRateExist1()
    {
        return $this->floatRateExist1;
    }

    /**
     * Sets a new floatRateExist1
     *
     * 18.16. Признак плавающей (переменной) процентной ставки = 1
     *
     * @param string $floatRateExist1
     * @return self
     */
    public function setFloatRateExist1($floatRateExist1)
    {
        $this->floatRateExist1 = $floatRateExist1;
        return $this;
    }

    /**
     * Gets as partialTransferExist0
     *
     * 18.17. Признак частичной передачи прав кредитора другому лицу = 0
     *
     * @return string
     */
    public function getPartialTransferExist0()
    {
        return $this->partialTransferExist0;
    }

    /**
     * Sets a new partialTransferExist0
     *
     * 18.17. Признак частичной передачи прав кредитора другому лицу = 0
     *
     * @param string $partialTransferExist0
     * @return self
     */
    public function setPartialTransferExist0($partialTransferExist0)
    {
        $this->partialTransferExist0 = $partialTransferExist0;
        return $this;
    }

    /**
     * Gets as partialTransferExist1
     *
     * 18.17. Признак частичной передачи прав кредитора другому лицу = 1
     *
     * @return string
     */
    public function getPartialTransferExist1()
    {
        return $this->partialTransferExist1;
    }

    /**
     * Sets a new partialTransferExist1
     *
     * 18.17. Признак частичной передачи прав кредитора другому лицу = 1
     *
     * @param string $partialTransferExist1
     * @return self
     */
    public function setPartialTransferExist1($partialTransferExist1)
    {
        $this->partialTransferExist1 = $partialTransferExist1;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * 18.19. Дата возникновения обязательства субъекта
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * 18.19. Дата возникновения обязательства субъекта
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as repaymentFact0
     *
     * 18.20. Признак погашения по графику платежей = 0
     *
     * @return string
     */
    public function getRepaymentFact0()
    {
        return $this->repaymentFact0;
    }

    /**
     * Sets a new repaymentFact0
     *
     * 18.20. Признак погашения по графику платежей = 0
     *
     * @param string $repaymentFact0
     * @return self
     */
    public function setRepaymentFact0($repaymentFact0)
    {
        $this->repaymentFact0 = $repaymentFact0;
        return $this;
    }

    /**
     * Gets as repaymentFact1
     *
     * 18.20. Признак погашения по графику платежей = 1
     *
     * @return string
     */
    public function getRepaymentFact1()
    {
        return $this->repaymentFact1;
    }

    /**
     * Sets a new repaymentFact1
     *
     * 18.20. Признак погашения по графику платежей = 1
     *
     * @param string $repaymentFact1
     * @return self
     */
    public function setRepaymentFact1($repaymentFact1)
    {
        $this->repaymentFact1 = $repaymentFact1;
        return $this;
    }

    /**
     * Gets as transferFact0
     *
     * 18.21. Признак перевода (перехода) обязательства субъекта = 0
     *
     * @return string
     */
    public function getTransferFact0()
    {
        return $this->transferFact0;
    }

    /**
     * Sets a new transferFact0
     *
     * 18.21. Признак перевода (перехода) обязательства субъекта = 0
     *
     * @param string $transferFact0
     * @return self
     */
    public function setTransferFact0($transferFact0)
    {
        $this->transferFact0 = $transferFact0;
        return $this;
    }

    /**
     * Gets as transferFact1
     *
     * 18.21. Признак перевода (перехода) обязательства субъекта = 1
     *
     * @return string
     */
    public function getTransferFact1()
    {
        return $this->transferFact1;
    }

    /**
     * Sets a new transferFact1
     *
     * 18.21. Признак перевода (перехода) обязательства субъекта = 1
     *
     * @param string $transferFact1
     * @return self
     */
    public function setTransferFact1($transferFact1)
    {
        $this->transferFact1 = $transferFact1;
        return $this;
    }

    /**
     * Gets as partnerFinancingFact0
     *
     * 18.22. Признак партнерского финансирования = 0
     *
     * @return string
     */
    public function getPartnerFinancingFact0()
    {
        return $this->partnerFinancingFact0;
    }

    /**
     * Sets a new partnerFinancingFact0
     *
     * 18.22. Признак партнерского финансирования = 0
     *
     * @param string $partnerFinancingFact0
     * @return self
     */
    public function setPartnerFinancingFact0($partnerFinancingFact0)
    {
        $this->partnerFinancingFact0 = $partnerFinancingFact0;
        return $this;
    }

    /**
     * Gets as partnerFinancingFact1
     *
     * 18.22. Признак партнерского финансирования = 1
     *
     * @return string
     */
    public function getPartnerFinancingFact1()
    {
        return $this->partnerFinancingFact1;
    }

    /**
     * Sets a new partnerFinancingFact1
     *
     * 18.22. Признак партнерского финансирования = 1
     *
     * @param string $partnerFinancingFact1
     * @return self
     */
    public function setPartnerFinancingFact1($partnerFinancingFact1)
    {
        $this->partnerFinancingFact1 = $partnerFinancingFact1;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_18_Deal';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Код вида участия в сделке' => 'Заполняется по справочнику 2.1.',
            'Код типа сделки' => 'Заполняется по справочнику 2.2.',
            'Код вида займа (кредита)' => 'Заполняется по справочнику 2.3.',
            'Код цели займа (кредита)' => 'Заполняется по справочнику 2.4. При наличии нескольких целей займа (кредита) значения указываются через запятую.',
            'Признак потребительского кредита (займа) 0' => 'Код «1» – договор займа (кредита), в том числе обязательства заемщика по которому обеспечены ипотекой, заключен с физическим лицом в целях, не связанных с осуществлением предпринимательской деятельности; код «0» – обстоятельство кода «1» отсутствует.',
            'Признак потребительского кредита (займа) 1' => 'Код «1» – договор займа (кредита), в том числе обязательства заемщика по которому обеспечены ипотекой, заключен с физическим лицом в целях, не связанных с осуществлением предпринимательской деятельности; код «0» – обстоятельство кода «1» отсутствует.',
            'Признак использования платежной карты 0' => 'Код «1» – сумма займа (кредита) выдается с использованием платежной карты ; код «0» – обстоятельство кода «1» отсутствует.',
            'Признак использования платежной карты 1' => 'Код «1» – сумма займа (кредита) выдается с использованием платежной карты ; код «0» – обстоятельство кода «1» отсутствует.',
            'Признак возникновения обязательства в результате новации 0' => 'Код «1» – обязательство возникло на основании соглашения о новации; код «0» – обстоятельство кода «1» отсутствует.',
            'Признак возникновения обязательства в результате новации 1' => 'Код «1» – обязательство возникло на основании соглашения о новации; код «0» – обстоятельство кода «1» отсутствует.',
            'Признак денежного обязательства источника 0' => 'Код «1» – объектом предоставления по сделке со стороны источника являются деньги; код «0» – объектом предоставления по сделке со стороны источника является иное имущество (в том числе драгоценные металлы, сельскохозяйственная продукция, а также товарный кредит).',
            'Признак денежного обязательства источника 1' => 'Код «1» – объектом предоставления по сделке со стороны источника являются деньги; код «0» – объектом предоставления по сделке со стороны источника является иное имущество (в том числе драгоценные металлы, сельскохозяйственная продукция, а также товарный кредит).',
            'Признак денежного обязательства субъекта 0' => 'Код «1» – объектом предоставления по сделке со стороны субъекта являются деньги; код «0» – объектом предоставления по сделке со стороны субъекта является иное имущество (в том числе драгоценные металлы, сельскохозяйственная продукция, а также товарный кредит).',
            'Признак денежного обязательства субъекта 1' => 'Код «1» – объектом предоставления по сделке со стороны субъекта являются деньги; код «0» – объектом предоставления по сделке со стороны субъекта является иное имущество (в том числе драгоценные металлы, сельскохозяйственная продукция, а также товарный кредит).',
            'Дата прекращения обязательства субъекта по условиям сделки' => 'Дата, в которую субъект по условиям сделки должен полностью исполнить обязательство. Для договора займа (кредита) указывается плановая дата полного возврата суммы займа (кредита) и процентов на нее. Для поручительства или независимой гарантии приводится плановая дата прекращения обязательства.',
            'Признак возникновения обязательства в результате получения части прав кредитора от другого лица 0' => 'Указывается источником, которому частично перешли права кредитора по обязательству: код «1» – в случае возникновения обязательства перед источником в результате получения им части прав кредитора от другого лица;  код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак возникновения обязательства в результате получения части прав кредитора от другого лица 1' => 'Указывается источником, которому частично перешли права кредитора по обязательству: код «1» – в случае возникновения обязательства перед источником в результате получения им части прав кредитора от другого лица;  код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак кредитной линии 0' => 'код «1» – в случае если заем (кредит) предусматривает наличие кредитной линии;  код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак кредитной линии 1' => 'код «1» – в случае если заем (кредит) предусматривает наличие кредитной линии;  код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Код типа кредитной линии' => 'Заполняется по справочнику 2.3.1, если по показателю 18.14 «Признак кредитной линии» указан код «1».',
            'Признак плавающей (переменной) процентной ставки 0' => 'код «1» – в случае если по сделке применяется плавающая (переменная) процентная ставка;  код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак плавающей (переменной) процентной ставки 1' => 'код «1» – в случае если по сделке применяется плавающая (переменная) процентная ставка;  код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак частичной передачи прав кредитора другому лицу 0' => 'Указывается источником, осуществившим частичную передачу прав кредитора по обязательству другому источнику: код «1» – в случае частичной передачи источником права кредитора по обязательству другому лицу; код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак частичной передачи прав кредитора другому лицу 1' => 'Указывается источником, осуществившим частичную передачу прав кредитора по обязательству другому источнику: код «1» – в случае частичной передачи источником права кредитора по обязательству другому лицу; код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'УИд сделки, по которой права кредитора частично переданы другому лицу' => 'Заполняется источником, к которому частично перешли права требования по обязательству субъекта',
            'Дата возникновения обязательства субъекта' => 'Указывается дата возникновения у субъекта обязательства в силу закона или по соглашению сторон.',
            'Признак погашения по графику платежей 0' => 'Код «1» – в случае если для исполнения обязательства по сделке предусмотрен график платежей; код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак погашения по графику платежей 1' => 'Код «1» – в случае если для исполнения обязательства по сделке предусмотрен график платежей; код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак перевода (перехода) обязательства субъекта 0' => 'Код «1» – в случае если обязательство получено субъектом в результате перевода (перехода) долга, в том числе в результате перехода долга в порядке наследования; код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак перевода (перехода) обязательства субъекта 1' => 'Код «1» – в случае если обязательство получено субъектом в результате перевода (перехода) долга, в том числе в результате перехода долга в порядке наследования; код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак партнерского финансирования 0' => 'Код «1» – в случае если сделка совершена в рамках осуществления деятельности по партнерскому финансированию в соответствии со статьей 2 Федерального закона от 4 августа 2023 года № 417-ФЗ «О проведении эксперимента по установлению специального регулирования в целях создания необходимых условий для осуществления деятельности по партнерскому финансированию в отдельных субъектах Российской Федерации и о внесении изменений в отдельные законодательные акты Российской Федерации»; код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак партнерского финансирования 1' => 'Код «1» – в случае если сделка совершена в рамках осуществления деятельности по партнерскому финансированию в соответствии со статьей 2 Федерального закона от 4 августа 2023 года № 417-ФЗ «О проведении эксперимента по установлению специального регулирования в целях создания необходимых условий для осуществления деятельности по партнерскому финансированию в отдельных субъектах Российской Федерации и о внесении изменений в отдельные законодательные акты Российской Федерации»; код «0» – в случае если обстоятельство кода «1» отсутствует.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 18. Общие сведения о сделке';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $trade = $this->template->sendData->getAccountReplyRUTDF()->getTrade();
        if ($trade === null) {
            return;
        }
        $this->role = $trade->ownerIndic;
        $this->code = $trade->tradeTypeCode;
        $this->kindCode = $trade->loanKindCode;
        $this->purposeCode = $trade->acctType;
        $this->consumerExist0 = $trade->isConsumerLoan ? null : '';
        $this->consumerExist1 = !$trade->isConsumerLoan ? null : '';
        $this->cardExist0 = $trade->hasCard ? null : '';
        $this->cardExist1 = !$trade->hasCard ? null : '';
        $this->novationExist0 = $trade->isNovation ? null : '';
        $this->novationExist1 = !$trade->isNovation ? null : '';
        $this->monetarySourceExist0 = $trade->isMoneySource ? null : '';
        $this->monetarySourceExist1 = !$trade->isMoneySource ? null : '';
        $this->monetarySubjectExist0 = $trade->isMoneyBorrower ? null : '';
        $this->monetarySubjectExist1 = !$trade->isMoneyBorrower ? null : '';
        $this->endDate = $this->formatDate($trade->closeDt);
        $this->creditorCode = $trade->lendertypeCode;
        $this->partialExist0 = $trade->obtainpartCred ? null : '';
        $this->partialExist1 = !$trade->obtainpartCred ? null : '';
        $this->creditLineExist0 = $trade->creditLine ? null : '';
        $this->creditLineExist1 = !$trade->creditLine ? null : '';
        $this->creditLineCode = $trade->creditLineCode??self::EMPTY_VALUE;
        $this->floatRateExist0 = $trade->interestrateFloat ? null : '';
        $this->floatRateExist1 = !$trade->interestrateFloat ? null : '';
        $this->partialTransferExist0 = $trade->transpartCred ? null : '';
        $this->partialTransferExist1 = !$trade->transpartCred ? null : '';
        $this->transferUid = UuidHelper::getUuidWithControl($trade->transpartCredUuid);
        $this->startDate = $this->formatDate($trade->commitDate);
        $this->repaymentFact0 = $trade->repaymentFact?null:'';
        $this->repaymentFact1 = !$trade->repaymentFact?null:'';
        $this->transferFact0 = $trade->transferFact?null:'';
        $this->transferFact1 = !$trade->transferFact?null:'';
        $this->partnerFinancingFact0 = $trade->partnerFinancingFact?null:'';
        $this->partnerFinancingFact1 = $trade->partnerFinancingFact?null:'';
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'role',
            'code',
            'kindCode',
            'purposeCode',
            'consumerExist_0' => 'consumerExist0',
            'consumerExist_1' => 'consumerExist1',
            'cardExist_0' => 'cardExist0',
            'cardExist_1' => 'cardExist1',
            'novationExist_0' => 'novationExist0',
            'novationExist_1' => 'novationExist1',
            'monetarySourceExist_0' => 'monetarySourceExist0',
            'monetarySourceExist_1' => 'monetarySourceExist1',
            'monetarySubjectExist_0' => 'monetarySubjectExist0',
            'monetarySubjectExist_1' => 'monetarySubjectExist1',
            'endDate',
            'creditorCode',
            'partialExist_0' => 'partialExist0',
            'partialExist_1' => 'partialExist1',
            'creditLineExist_0'=> 'creditLineExist0',
            'creditLineExist_1'=> 'creditLineExist1',
            'creditLineCode',
            'floatRateExist_0' => 'floatRateExist0',
            'floatRateExist_1' => 'floatRateExist1',
            'partialTransferExist_0' => 'partialTransferExist0',
            'partialTransferExist_1' => 'partialTransferExist1',
            'transferUid',
            'startDate',
            'repaymentFact_0' => 'repaymentFact0',
            'repaymentFact_1' => 'repaymentFact1',
            'transferFact_0' => 'transferFact0',
            'transferFact_1' => 'transferFact1',
            'partnerFinancingFact_0' => 'partnerFinancingFact0',
            'partnerFinancingFact_1' => 'partnerFinancingFact1',
        ];
    }
}

