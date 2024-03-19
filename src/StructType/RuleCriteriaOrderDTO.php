<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleCriteriaOrderDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RuleCriteriaOrderDTO extends AbstractStructBase
{
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The criteriaId
     * @var int|null
     */
    protected ?int $criteriaId = null;
    /**
     * The customerType
     * @var string|null
     */
    protected ?string $customerType = null;
    /**
     * The daysAfter
     * @var int|null
     */
    protected ?int $daysAfter = null;
    /**
     * The daysBefore
     * @var int|null
     */
    protected ?int $daysBefore = null;
    /**
     * The definitionId
     * @var int|null
     */
    protected ?int $definitionId = null;
    /**
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The inkassoMode
     * @var string|null
     */
    protected ?string $inkassoMode = null;
    /**
     * The itemPriceMax
     * @var float|null
     */
    protected ?float $itemPriceMax = null;
    /**
     * The itemPriceMin
     * @var float|null
     */
    protected ?float $itemPriceMin = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The totalPriceFrom
     * @var float|null
     */
    protected ?float $totalPriceFrom = null;
    /**
     * The totalPriceTo
     * @var float|null
     */
    protected ?float $totalPriceTo = null;
    /**
     * Constructor method for RuleCriteriaOrderDTO
     * @uses RuleCriteriaOrderDTO::setCarrier()
     * @uses RuleCriteriaOrderDTO::setCriteriaId()
     * @uses RuleCriteriaOrderDTO::setCustomerType()
     * @uses RuleCriteriaOrderDTO::setDaysAfter()
     * @uses RuleCriteriaOrderDTO::setDaysBefore()
     * @uses RuleCriteriaOrderDTO::setDefinitionId()
     * @uses RuleCriteriaOrderDTO::setExtSystem()
     * @uses RuleCriteriaOrderDTO::setInkassoMode()
     * @uses RuleCriteriaOrderDTO::setItemPriceMax()
     * @uses RuleCriteriaOrderDTO::setItemPriceMin()
     * @uses RuleCriteriaOrderDTO::setItemType()
     * @uses RuleCriteriaOrderDTO::setMediatorId()
     * @uses RuleCriteriaOrderDTO::setPaymentType()
     * @uses RuleCriteriaOrderDTO::setStatus()
     * @uses RuleCriteriaOrderDTO::setSupplierId()
     * @uses RuleCriteriaOrderDTO::setTotalPriceFrom()
     * @uses RuleCriteriaOrderDTO::setTotalPriceTo()
     * @param string $carrier
     * @param int $criteriaId
     * @param string $customerType
     * @param int $daysAfter
     * @param int $daysBefore
     * @param int $definitionId
     * @param string $extSystem
     * @param string $inkassoMode
     * @param float $itemPriceMax
     * @param float $itemPriceMin
     * @param string $itemType
     * @param string $mediatorId
     * @param string $paymentType
     * @param string $status
     * @param string $supplierId
     * @param float $totalPriceFrom
     * @param float $totalPriceTo
     */
    public function __construct(?string $carrier = null, ?int $criteriaId = null, ?string $customerType = null, ?int $daysAfter = null, ?int $daysBefore = null, ?int $definitionId = null, ?string $extSystem = null, ?string $inkassoMode = null, ?float $itemPriceMax = null, ?float $itemPriceMin = null, ?string $itemType = null, ?string $mediatorId = null, ?string $paymentType = null, ?string $status = null, ?string $supplierId = null, ?float $totalPriceFrom = null, ?float $totalPriceTo = null)
    {
        $this
            ->setCarrier($carrier)
            ->setCriteriaId($criteriaId)
            ->setCustomerType($customerType)
            ->setDaysAfter($daysAfter)
            ->setDaysBefore($daysBefore)
            ->setDefinitionId($definitionId)
            ->setExtSystem($extSystem)
            ->setInkassoMode($inkassoMode)
            ->setItemPriceMax($itemPriceMax)
            ->setItemPriceMin($itemPriceMin)
            ->setItemType($itemType)
            ->setMediatorId($mediatorId)
            ->setPaymentType($paymentType)
            ->setStatus($status)
            ->setSupplierId($supplierId)
            ->setTotalPriceFrom($totalPriceFrom)
            ->setTotalPriceTo($totalPriceTo);
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
        return $this;
    }
    /**
     * Get criteriaId value
     * @return int|null
     */
    public function getCriteriaId(): ?int
    {
        return $this->criteriaId;
    }
    /**
     * Set criteriaId value
     * @param int $criteriaId
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setCriteriaId(?int $criteriaId = null): self
    {
        // validation for constraint: int
        if (!is_null($criteriaId) && !(is_int($criteriaId) || ctype_digit($criteriaId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($criteriaId, true), gettype($criteriaId)), __LINE__);
        }
        $this->criteriaId = $criteriaId;
        
        return $this;
    }
    /**
     * Get customerType value
     * @return string|null
     */
    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }
    /**
     * Set customerType value
     * @param string $customerType
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setCustomerType(?string $customerType = null): self
    {
        // validation for constraint: string
        if (!is_null($customerType) && !is_string($customerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerType, true), gettype($customerType)), __LINE__);
        }
        $this->customerType = $customerType;
        
        return $this;
    }
    /**
     * Get daysAfter value
     * @return int|null
     */
    public function getDaysAfter(): ?int
    {
        return $this->daysAfter;
    }
    /**
     * Set daysAfter value
     * @param int $daysAfter
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setDaysAfter(?int $daysAfter = null): self
    {
        // validation for constraint: int
        if (!is_null($daysAfter) && !(is_int($daysAfter) || ctype_digit($daysAfter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysAfter, true), gettype($daysAfter)), __LINE__);
        }
        $this->daysAfter = $daysAfter;
        
        return $this;
    }
    /**
     * Get daysBefore value
     * @return int|null
     */
    public function getDaysBefore(): ?int
    {
        return $this->daysBefore;
    }
    /**
     * Set daysBefore value
     * @param int $daysBefore
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setDaysBefore(?int $daysBefore = null): self
    {
        // validation for constraint: int
        if (!is_null($daysBefore) && !(is_int($daysBefore) || ctype_digit($daysBefore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysBefore, true), gettype($daysBefore)), __LINE__);
        }
        $this->daysBefore = $daysBefore;
        
        return $this;
    }
    /**
     * Get definitionId value
     * @return int|null
     */
    public function getDefinitionId(): ?int
    {
        return $this->definitionId;
    }
    /**
     * Set definitionId value
     * @param int $definitionId
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setDefinitionId(?int $definitionId = null): self
    {
        // validation for constraint: int
        if (!is_null($definitionId) && !(is_int($definitionId) || ctype_digit($definitionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($definitionId, true), gettype($definitionId)), __LINE__);
        }
        $this->definitionId = $definitionId;
        
        return $this;
    }
    /**
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
        return $this;
    }
    /**
     * Get inkassoMode value
     * @return string|null
     */
    public function getInkassoMode(): ?string
    {
        return $this->inkassoMode;
    }
    /**
     * Set inkassoMode value
     * @param string $inkassoMode
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setInkassoMode(?string $inkassoMode = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoMode) && !is_string($inkassoMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoMode, true), gettype($inkassoMode)), __LINE__);
        }
        $this->inkassoMode = $inkassoMode;
        
        return $this;
    }
    /**
     * Get itemPriceMax value
     * @return float|null
     */
    public function getItemPriceMax(): ?float
    {
        return $this->itemPriceMax;
    }
    /**
     * Set itemPriceMax value
     * @param float $itemPriceMax
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setItemPriceMax(?float $itemPriceMax = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPriceMax) && !(is_float($itemPriceMax) || is_numeric($itemPriceMax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPriceMax, true), gettype($itemPriceMax)), __LINE__);
        }
        $this->itemPriceMax = $itemPriceMax;
        
        return $this;
    }
    /**
     * Get itemPriceMin value
     * @return float|null
     */
    public function getItemPriceMin(): ?float
    {
        return $this->itemPriceMin;
    }
    /**
     * Set itemPriceMin value
     * @param float $itemPriceMin
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setItemPriceMin(?float $itemPriceMin = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPriceMin) && !(is_float($itemPriceMin) || is_numeric($itemPriceMin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPriceMin, true), gettype($itemPriceMin)), __LINE__);
        }
        $this->itemPriceMin = $itemPriceMin;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get totalPriceFrom value
     * @return float|null
     */
    public function getTotalPriceFrom(): ?float
    {
        return $this->totalPriceFrom;
    }
    /**
     * Set totalPriceFrom value
     * @param float $totalPriceFrom
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setTotalPriceFrom(?float $totalPriceFrom = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPriceFrom) && !(is_float($totalPriceFrom) || is_numeric($totalPriceFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPriceFrom, true), gettype($totalPriceFrom)), __LINE__);
        }
        $this->totalPriceFrom = $totalPriceFrom;
        
        return $this;
    }
    /**
     * Get totalPriceTo value
     * @return float|null
     */
    public function getTotalPriceTo(): ?float
    {
        return $this->totalPriceTo;
    }
    /**
     * Set totalPriceTo value
     * @param float $totalPriceTo
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderDTO
     */
    public function setTotalPriceTo(?float $totalPriceTo = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPriceTo) && !(is_float($totalPriceTo) || is_numeric($totalPriceTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPriceTo, true), gettype($totalPriceTo)), __LINE__);
        }
        $this->totalPriceTo = $totalPriceTo;
        
        return $this;
    }
}
