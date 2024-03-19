<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListRuleCriteriaCrmAttributeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListRuleCriteriaCrmAttributeResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleCriteriaCrmAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRuleCriteriaCrmAttribute
     * @var \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO[]
     */
    protected ?array $MidocoRuleCriteriaCrmAttribute = null;
    /**
     * Constructor method for ListRuleCriteriaCrmAttributeResponse
     * @uses ListRuleCriteriaCrmAttributeResponse::setMidocoRuleCriteriaCrmAttribute()
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO[] $midocoRuleCriteriaCrmAttribute
     */
    public function __construct(?array $midocoRuleCriteriaCrmAttribute = null)
    {
        $this
            ->setMidocoRuleCriteriaCrmAttribute($midocoRuleCriteriaCrmAttribute);
    }
    /**
     * Get MidocoRuleCriteriaCrmAttribute value
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO[]
     */
    public function getMidocoRuleCriteriaCrmAttribute(): ?array
    {
        return $this->MidocoRuleCriteriaCrmAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoRuleCriteriaCrmAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRuleCriteriaCrmAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRuleCriteriaCrmAttributeForArrayConstraintFromSetMidocoRuleCriteriaCrmAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listRuleCriteriaCrmAttributeResponseMidocoRuleCriteriaCrmAttributeItem) {
            // validation for constraint: itemType
            if (!$listRuleCriteriaCrmAttributeResponseMidocoRuleCriteriaCrmAttributeItem instanceof \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO) {
                $invalidValues[] = is_object($listRuleCriteriaCrmAttributeResponseMidocoRuleCriteriaCrmAttributeItem) ? get_class($listRuleCriteriaCrmAttributeResponseMidocoRuleCriteriaCrmAttributeItem) : sprintf('%s(%s)', gettype($listRuleCriteriaCrmAttributeResponseMidocoRuleCriteriaCrmAttributeItem), var_export($listRuleCriteriaCrmAttributeResponseMidocoRuleCriteriaCrmAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRuleCriteriaCrmAttribute property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRuleCriteriaCrmAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO[] $midocoRuleCriteriaCrmAttribute
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmAttributeResponse
     */
    public function setMidocoRuleCriteriaCrmAttribute(?array $midocoRuleCriteriaCrmAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRuleCriteriaCrmAttributeArrayErrorMessage = self::validateMidocoRuleCriteriaCrmAttributeForArrayConstraintFromSetMidocoRuleCriteriaCrmAttribute($midocoRuleCriteriaCrmAttribute))) {
            throw new InvalidArgumentException($midocoRuleCriteriaCrmAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoRuleCriteriaCrmAttribute = $midocoRuleCriteriaCrmAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoRuleCriteriaCrmAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO $item
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmAttributeResponse
     */
    public function addToMidocoRuleCriteriaCrmAttribute(\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRuleCriteriaCrmAttribute property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRuleCriteriaCrmAttribute[] = $item;
        
        return $this;
    }
}
