<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRuleDefinitionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRuleDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleDefinition
     * @var \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $MidocoRuleDefinition = null;
    /**
     * Constructor method for SaveRuleDefinitionResponse
     * @uses SaveRuleDefinitionResponse::setMidocoRuleDefinition()
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $midocoRuleDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $midocoRuleDefinition = null)
    {
        $this
            ->setMidocoRuleDefinition($midocoRuleDefinition);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleDefinitionResponse
     */
    public function setMidocoRuleDefinition(?\Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO $midocoRuleDefinition = null): self
    {
        $this->MidocoRuleDefinition = $midocoRuleDefinition;
        
        return $this;
    }
}
