<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTaskPriorityResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoTaskPriorityResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskPriority
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskPriority
     * @var \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO[]
     */
    protected ?array $MidocoTaskPriority = null;
    /**
     * Constructor method for GetMidocoTaskPriorityResponse
     * @uses GetMidocoTaskPriorityResponse::setMidocoTaskPriority()
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO[] $midocoTaskPriority
     */
    public function __construct(?array $midocoTaskPriority = null)
    {
        $this
            ->setMidocoTaskPriority($midocoTaskPriority);
    }
    /**
     * Get MidocoTaskPriority value
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO[]
     */
    public function getMidocoTaskPriority(): ?array
    {
        return $this->MidocoTaskPriority;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTaskPriority method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskPriority method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskPriorityForArrayConstraintFromSetMidocoTaskPriority(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoTaskPriorityResponseMidocoTaskPriorityItem) {
            // validation for constraint: itemType
            if (!$getMidocoTaskPriorityResponseMidocoTaskPriorityItem instanceof \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO) {
                $invalidValues[] = is_object($getMidocoTaskPriorityResponseMidocoTaskPriorityItem) ? get_class($getMidocoTaskPriorityResponseMidocoTaskPriorityItem) : sprintf('%s(%s)', gettype($getMidocoTaskPriorityResponseMidocoTaskPriorityItem), var_export($getMidocoTaskPriorityResponseMidocoTaskPriorityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskPriority property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskPriority value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO[] $midocoTaskPriority
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskPriorityResponse
     */
    public function setMidocoTaskPriority(?array $midocoTaskPriority = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskPriorityArrayErrorMessage = self::validateMidocoTaskPriorityForArrayConstraintFromSetMidocoTaskPriority($midocoTaskPriority))) {
            throw new InvalidArgumentException($midocoTaskPriorityArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskPriority = $midocoTaskPriority;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskPriority value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskPriorityResponse
     */
    public function addToMidocoTaskPriority(\Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskPriority property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskPriority[] = $item;
        
        return $this;
    }
}
