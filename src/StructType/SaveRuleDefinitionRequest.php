<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRuleDefinitionRequest StructType
 * @subpackage Structs
 */
class SaveRuleDefinitionRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $unitName;
    /**
     * The MidocoRuleDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleDefinition
     * @var \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $MidocoRuleDefinition = null;
    /**
     * Constructor method for SaveRuleDefinitionRequest
     * @uses SaveRuleDefinitionRequest::setUnitName()
     * @uses SaveRuleDefinitionRequest::setMidocoRuleDefinition()
     * @param string $unitName
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $midocoRuleDefinition
     */
    public function __construct(string $unitName, ?\Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $midocoRuleDefinition = null)
    {
        $this
            ->setUnitName($unitName)
            ->setMidocoRuleDefinition($midocoRuleDefinition);
    }
    /**
     * Get unitName value
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleDefinitionRequest
     */
    public function setUnitName(string $unitName): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get MidocoRuleDefinition value
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO|null
     */
    public function getMidocoRuleDefinition(): ?\Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
    {
        return $this->MidocoRuleDefinition;
    }
    /**
     * Set MidocoRuleDefinition value
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $midocoRuleDefinition
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleDefinitionRequest
     */
    public function setMidocoRuleDefinition(?\Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $midocoRuleDefinition = null): self
    {
        $this->MidocoRuleDefinition = $midocoRuleDefinition;
        
        return $this;
    }
}
