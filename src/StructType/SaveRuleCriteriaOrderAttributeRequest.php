<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRuleCriteriaOrderAttributeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRuleCriteriaOrderAttributeRequest extends AbstractStructBase
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
     * The MidocoRuleCriteriaOrderAttribute
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleCriteriaOrderAttribute
     * @var \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderAttributeDTO|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderAttributeDTO $MidocoRuleCriteriaOrderAttribute = null;
    /**
     * Constructor method for SaveRuleCriteriaOrderAttributeRequest
     * @uses SaveRuleCriteriaOrderAttributeRequest::setUnitName()
     * @uses SaveRuleCriteriaOrderAttributeRequest::setMidocoRuleCriteriaOrderAttribute()
     * @param string $unitName
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderAttributeDTO $midocoRuleCriteriaOrderAttribute
     */
    public function __construct(string $unitName, ?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderAttributeDTO $midocoRuleCriteriaOrderAttribute = null)
    {
        $this
            ->setUnitName($unitName)
            ->setMidocoRuleCriteriaOrderAttribute($midocoRuleCriteriaOrderAttribute);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderAttributeRequest
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
     * Get MidocoRuleCriteriaOrderAttribute value
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderAttributeDTO|null
     */
    public function getMidocoRuleCriteriaOrderAttribute(): ?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderAttributeDTO
    {
        return $this->MidocoRuleCriteriaOrderAttribute;
    }
    /**
     * Set MidocoRuleCriteriaOrderAttribute value
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderAttributeDTO $midocoRuleCriteriaOrderAttribute
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderAttributeRequest
     */
    public function setMidocoRuleCriteriaOrderAttribute(?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaOrderAttributeDTO $midocoRuleCriteriaOrderAttribute = null): self
    {
        $this->MidocoRuleCriteriaOrderAttribute = $midocoRuleCriteriaOrderAttribute;
        
        return $this;
    }
}
