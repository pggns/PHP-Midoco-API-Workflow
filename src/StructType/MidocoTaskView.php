<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTaskView StructType
 * @subpackage Structs
 */
class MidocoTaskView extends TaskViewDTO
{
    /**
     * The MidocoTaskViewDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskViewDescription
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewDescription[]
     */
    protected array $MidocoTaskViewDescription = [];
    /**
     * The MidocoTaskViewUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskViewUser
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser[]
     */
    protected array $MidocoTaskViewUser = [];
    /**
     * The MidocoTaskViewTimeRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskViewTimeRestriction
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewTimeRestriction[]
     */
    protected array $MidocoTaskViewTimeRestriction = [];
    /**
     * The MidocoTaskViewUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskViewUnit
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUnit[]
     */
    protected array $MidocoTaskViewUnit = [];
    /**
     * Constructor method for MidocoTaskView
     * @uses MidocoTaskView::setMidocoTaskViewDescription()
     * @uses MidocoTaskView::setMidocoTaskViewUser()
     * @uses MidocoTaskView::setMidocoTaskViewTimeRestriction()
     * @uses MidocoTaskView::setMidocoTaskViewUnit()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewDescription[] $midocoTaskViewDescription
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser[] $midocoTaskViewUser
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewTimeRestriction[] $midocoTaskViewTimeRestriction
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUnit[] $midocoTaskViewUnit
     */
    public function __construct(array $midocoTaskViewDescription = [], array $midocoTaskViewUser = [], array $midocoTaskViewTimeRestriction = [], array $midocoTaskViewUnit = [])
    {
        $this
            ->setMidocoTaskViewDescription($midocoTaskViewDescription)
            ->setMidocoTaskViewUser($midocoTaskViewUser)
            ->setMidocoTaskViewTimeRestriction($midocoTaskViewTimeRestriction)
            ->setMidocoTaskViewUnit($midocoTaskViewUnit);
    }
    /**
     * Get MidocoTaskViewDescription value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewDescription[]
     */
    public function getMidocoTaskViewDescription(): array
    {
        return $this->MidocoTaskViewDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTaskViewDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskViewDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskViewDescriptionForArrayConstraintsFromSetMidocoTaskViewDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTaskViewMidocoTaskViewDescriptionItem) {
            // validation for constraint: itemType
            if (!$midocoTaskViewMidocoTaskViewDescriptionItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewDescription) {
                $invalidValues[] = is_object($midocoTaskViewMidocoTaskViewDescriptionItem) ? get_class($midocoTaskViewMidocoTaskViewDescriptionItem) : sprintf('%s(%s)', gettype($midocoTaskViewMidocoTaskViewDescriptionItem), var_export($midocoTaskViewMidocoTaskViewDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskViewDescription property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskViewDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewDescription[] $midocoTaskViewDescription
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
     */
    public function setMidocoTaskViewDescription(array $midocoTaskViewDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskViewDescriptionArrayErrorMessage = self::validateMidocoTaskViewDescriptionForArrayConstraintsFromSetMidocoTaskViewDescription($midocoTaskViewDescription))) {
            throw new InvalidArgumentException($midocoTaskViewDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskViewDescription = $midocoTaskViewDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskViewDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewDescription $item
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
     */
    public function addToMidocoTaskViewDescription(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewDescription $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewDescription) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskViewDescription property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskViewDescription[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTaskViewUser value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser[]
     */
    public function getMidocoTaskViewUser(): array
    {
        return $this->MidocoTaskViewUser;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTaskViewUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskViewUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskViewUserForArrayConstraintsFromSetMidocoTaskViewUser(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTaskViewMidocoTaskViewUserItem) {
            // validation for constraint: itemType
            if (!$midocoTaskViewMidocoTaskViewUserItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser) {
                $invalidValues[] = is_object($midocoTaskViewMidocoTaskViewUserItem) ? get_class($midocoTaskViewMidocoTaskViewUserItem) : sprintf('%s(%s)', gettype($midocoTaskViewMidocoTaskViewUserItem), var_export($midocoTaskViewMidocoTaskViewUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskViewUser property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskViewUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser[] $midocoTaskViewUser
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
     */
    public function setMidocoTaskViewUser(array $midocoTaskViewUser = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskViewUserArrayErrorMessage = self::validateMidocoTaskViewUserForArrayConstraintsFromSetMidocoTaskViewUser($midocoTaskViewUser))) {
            throw new InvalidArgumentException($midocoTaskViewUserArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskViewUser = $midocoTaskViewUser;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskViewUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser $item
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
     */
    public function addToMidocoTaskViewUser(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskViewUser property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskViewUser[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTaskViewTimeRestriction value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewTimeRestriction[]
     */
    public function getMidocoTaskViewTimeRestriction(): array
    {
        return $this->MidocoTaskViewTimeRestriction;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTaskViewTimeRestriction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskViewTimeRestriction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskViewTimeRestrictionForArrayConstraintsFromSetMidocoTaskViewTimeRestriction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTaskViewMidocoTaskViewTimeRestrictionItem) {
            // validation for constraint: itemType
            if (!$midocoTaskViewMidocoTaskViewTimeRestrictionItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewTimeRestriction) {
                $invalidValues[] = is_object($midocoTaskViewMidocoTaskViewTimeRestrictionItem) ? get_class($midocoTaskViewMidocoTaskViewTimeRestrictionItem) : sprintf('%s(%s)', gettype($midocoTaskViewMidocoTaskViewTimeRestrictionItem), var_export($midocoTaskViewMidocoTaskViewTimeRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskViewTimeRestriction property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewTimeRestriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskViewTimeRestriction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewTimeRestriction[] $midocoTaskViewTimeRestriction
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
     */
    public function setMidocoTaskViewTimeRestriction(array $midocoTaskViewTimeRestriction = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskViewTimeRestrictionArrayErrorMessage = self::validateMidocoTaskViewTimeRestrictionForArrayConstraintsFromSetMidocoTaskViewTimeRestriction($midocoTaskViewTimeRestriction))) {
            throw new InvalidArgumentException($midocoTaskViewTimeRestrictionArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskViewTimeRestriction = $midocoTaskViewTimeRestriction;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskViewTimeRestriction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewTimeRestriction $item
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
     */
    public function addToMidocoTaskViewTimeRestriction(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewTimeRestriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewTimeRestriction) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskViewTimeRestriction property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewTimeRestriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskViewTimeRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTaskViewUnit value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUnit[]
     */
    public function getMidocoTaskViewUnit(): array
    {
        return $this->MidocoTaskViewUnit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTaskViewUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskViewUnit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskViewUnitForArrayConstraintsFromSetMidocoTaskViewUnit(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTaskViewMidocoTaskViewUnitItem) {
            // validation for constraint: itemType
            if (!$midocoTaskViewMidocoTaskViewUnitItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUnit) {
                $invalidValues[] = is_object($midocoTaskViewMidocoTaskViewUnitItem) ? get_class($midocoTaskViewMidocoTaskViewUnitItem) : sprintf('%s(%s)', gettype($midocoTaskViewMidocoTaskViewUnitItem), var_export($midocoTaskViewMidocoTaskViewUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskViewUnit property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUnit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskViewUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUnit[] $midocoTaskViewUnit
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
     */
    public function setMidocoTaskViewUnit(array $midocoTaskViewUnit = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskViewUnitArrayErrorMessage = self::validateMidocoTaskViewUnitForArrayConstraintsFromSetMidocoTaskViewUnit($midocoTaskViewUnit))) {
            throw new InvalidArgumentException($midocoTaskViewUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskViewUnit = $midocoTaskViewUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskViewUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUnit $item
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
     */
    public function addToMidocoTaskViewUnit(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUnit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUnit) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskViewUnit property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUnit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskViewUnit[] = $item;
        
        return $this;
    }
}
