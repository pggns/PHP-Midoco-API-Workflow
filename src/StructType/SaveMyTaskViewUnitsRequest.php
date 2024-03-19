<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMyTaskViewUnitsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMyTaskViewUnitsRequest extends AbstractStructBase
{
    /**
     * The MidocoMyTaskViewUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoMyTaskViewUnit
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUnit[]
     */
    protected array $MidocoMyTaskViewUnit;
    /**
     * Constructor method for SaveMyTaskViewUnitsRequest
     * @uses SaveMyTaskViewUnitsRequest::setMidocoMyTaskViewUnit()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUnit[] $midocoMyTaskViewUnit
     */
    public function __construct(array $midocoMyTaskViewUnit)
    {
        $this
            ->setMidocoMyTaskViewUnit($midocoMyTaskViewUnit);
    }
    /**
     * Get MidocoMyTaskViewUnit value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUnit[]
     */
    public function getMidocoMyTaskViewUnit(): array
    {
        return $this->MidocoMyTaskViewUnit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMyTaskViewUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMyTaskViewUnit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMyTaskViewUnitForArrayConstraintFromSetMidocoMyTaskViewUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMyTaskViewUnitsRequestMidocoMyTaskViewUnitItem) {
            // validation for constraint: itemType
            if (!$saveMyTaskViewUnitsRequestMidocoMyTaskViewUnitItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUnit) {
                $invalidValues[] = is_object($saveMyTaskViewUnitsRequestMidocoMyTaskViewUnitItem) ? get_class($saveMyTaskViewUnitsRequestMidocoMyTaskViewUnitItem) : sprintf('%s(%s)', gettype($saveMyTaskViewUnitsRequestMidocoMyTaskViewUnitItem), var_export($saveMyTaskViewUnitsRequestMidocoMyTaskViewUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMyTaskViewUnit property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUnit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMyTaskViewUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUnit[] $midocoMyTaskViewUnit
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewUnitsRequest
     */
    public function setMidocoMyTaskViewUnit(array $midocoMyTaskViewUnit): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMyTaskViewUnitArrayErrorMessage = self::validateMidocoMyTaskViewUnitForArrayConstraintFromSetMidocoMyTaskViewUnit($midocoMyTaskViewUnit))) {
            throw new InvalidArgumentException($midocoMyTaskViewUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoMyTaskViewUnit = $midocoMyTaskViewUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoMyTaskViewUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUnit $item
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewUnitsRequest
     */
    public function addToMidocoMyTaskViewUnit(\Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUnit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUnit) {
            throw new InvalidArgumentException(sprintf('The MidocoMyTaskViewUnit property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUnit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMyTaskViewUnit[] = $item;
        
        return $this;
    }
}
