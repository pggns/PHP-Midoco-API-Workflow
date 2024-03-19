<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListRuleDefinitionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListRuleDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRuleDefinition
     * @var \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO[]
     */
    protected ?array $MidocoRuleDefinition = null;
    /**
     * Constructor method for ListRuleDefinitionResponse
     * @uses ListRuleDefinitionResponse::setMidocoRuleDefinition()
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO[] $midocoRuleDefinition
     */
    public function __construct(?array $midocoRuleDefinition = null)
    {
        $this
            ->setMidocoRuleDefinition($midocoRuleDefinition);
    }
    /**
     * Get MidocoRuleDefinition value
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO[]
     */
    public function getMidocoRuleDefinition(): ?array
    {
        return $this->MidocoRuleDefinition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoRuleDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRuleDefinition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRuleDefinitionForArrayConstraintFromSetMidocoRuleDefinition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listRuleDefinitionResponseMidocoRuleDefinitionItem) {
            // validation for constraint: itemType
            if (!$listRuleDefinitionResponseMidocoRuleDefinitionItem instanceof \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO) {
                $invalidValues[] = is_object($listRuleDefinitionResponseMidocoRuleDefinitionItem) ? get_class($listRuleDefinitionResponseMidocoRuleDefinitionItem) : sprintf('%s(%s)', gettype($listRuleDefinitionResponseMidocoRuleDefinitionItem), var_export($listRuleDefinitionResponseMidocoRuleDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRuleDefinition property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRuleDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO[] $midocoRuleDefinition
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleDefinitionResponse
     */
    public function setMidocoRuleDefinition(?array $midocoRuleDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRuleDefinitionArrayErrorMessage = self::validateMidocoRuleDefinitionForArrayConstraintFromSetMidocoRuleDefinition($midocoRuleDefinition))) {
            throw new InvalidArgumentException($midocoRuleDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoRuleDefinition = $midocoRuleDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoRuleDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $item
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleDefinitionResponse
     */
    public function addToMidocoRuleDefinition(\Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRuleDefinition property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRuleDefinition[] = $item;
        
        return $this;
    }
}
