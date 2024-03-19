<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTaskQueue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTaskQueue extends TaskQueueDTO
{
    /**
     * The unitNames
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unitNames = null;
    /**
     * The MidocoTaskQueueDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskQueueDescription
     * @var \Pggns\MidocoApi\Workflow\StructType\TaskQueueDescriptionDTO[]
     */
    protected ?array $MidocoTaskQueueDescription = null;
    /**
     * Constructor method for MidocoTaskQueue
     * @uses MidocoTaskQueue::setUnitNames()
     * @uses MidocoTaskQueue::setMidocoTaskQueueDescription()
     * @param string[] $unitNames
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskQueueDescriptionDTO[] $midocoTaskQueueDescription
     */
    public function __construct(?array $unitNames = null, ?array $midocoTaskQueueDescription = null)
    {
        $this
            ->setUnitNames($unitNames)
            ->setMidocoTaskQueueDescription($midocoTaskQueueDescription);
    }
    /**
     * Get unitNames value
     * @return string[]
     */
    public function getUnitNames(): ?array
    {
        return $this->unitNames;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitNames method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNamesForArrayConstraintFromSetUnitNames(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTaskQueueUnitNamesItem) {
            // validation for constraint: itemType
            if (!is_string($midocoTaskQueueUnitNamesItem)) {
                $invalidValues[] = is_object($midocoTaskQueueUnitNamesItem) ? get_class($midocoTaskQueueUnitNamesItem) : sprintf('%s(%s)', gettype($midocoTaskQueueUnitNamesItem), var_export($midocoTaskQueueUnitNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitNames value
     * @throws InvalidArgumentException
     * @param string[] $unitNames
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue
     */
    public function setUnitNames(?array $unitNames = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNamesArrayErrorMessage = self::validateUnitNamesForArrayConstraintFromSetUnitNames($unitNames))) {
            throw new InvalidArgumentException($unitNamesArrayErrorMessage, __LINE__);
        }
        $this->unitNames = $unitNames;
        
        return $this;
    }
    /**
     * Add item to unitNames value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue
     */
    public function addToUnitNames(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitNames[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTaskQueueDescription value
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskQueueDescriptionDTO[]
     */
    public function getMidocoTaskQueueDescription(): ?array
    {
        return $this->MidocoTaskQueueDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTaskQueueDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskQueueDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskQueueDescriptionForArrayConstraintFromSetMidocoTaskQueueDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTaskQueueMidocoTaskQueueDescriptionItem) {
            // validation for constraint: itemType
            if (!$midocoTaskQueueMidocoTaskQueueDescriptionItem instanceof \Pggns\MidocoApi\Workflow\StructType\TaskQueueDescriptionDTO) {
                $invalidValues[] = is_object($midocoTaskQueueMidocoTaskQueueDescriptionItem) ? get_class($midocoTaskQueueMidocoTaskQueueDescriptionItem) : sprintf('%s(%s)', gettype($midocoTaskQueueMidocoTaskQueueDescriptionItem), var_export($midocoTaskQueueMidocoTaskQueueDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskQueueDescription property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\TaskQueueDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskQueueDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskQueueDescriptionDTO[] $midocoTaskQueueDescription
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue
     */
    public function setMidocoTaskQueueDescription(?array $midocoTaskQueueDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskQueueDescriptionArrayErrorMessage = self::validateMidocoTaskQueueDescriptionForArrayConstraintFromSetMidocoTaskQueueDescription($midocoTaskQueueDescription))) {
            throw new InvalidArgumentException($midocoTaskQueueDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskQueueDescription = $midocoTaskQueueDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskQueueDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskQueueDescriptionDTO $item
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue
     */
    public function addToMidocoTaskQueueDescription(\Pggns\MidocoApi\Workflow\StructType\TaskQueueDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\TaskQueueDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskQueueDescription property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\TaskQueueDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskQueueDescription[] = $item;
        
        return $this;
    }
}
