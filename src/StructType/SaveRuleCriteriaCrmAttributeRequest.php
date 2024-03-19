<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRuleCriteriaCrmAttributeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRuleCriteriaCrmAttributeRequest extends AbstractStructBase
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
     * The MidocoRuleCriteriaCrmAttribute
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleCriteriaCrmAttribute
     * @var \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO $MidocoRuleCriteriaCrmAttribute = null;
    /**
     * Constructor method for SaveRuleCriteriaCrmAttributeRequest
     * @uses SaveRuleCriteriaCrmAttributeRequest::setUnitName()
     * @uses SaveRuleCriteriaCrmAttributeRequest::setMidocoRuleCriteriaCrmAttribute()
     * @param string $unitName
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO $midocoRuleCriteriaCrmAttribute
     */
    public function __construct(string $unitName, ?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO $midocoRuleCriteriaCrmAttribute = null)
    {
        $this
            ->setUnitName($unitName)
            ->setMidocoRuleCriteriaCrmAttribute($midocoRuleCriteriaCrmAttribute);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmAttributeRequest
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
     * Get MidocoRuleCriteriaCrmAttribute value
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO|null
     */
    public function getMidocoRuleCriteriaCrmAttribute(): ?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO
    {
        return $this->MidocoRuleCriteriaCrmAttribute;
    }
    /**
     * Set MidocoRuleCriteriaCrmAttribute value
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO $midocoRuleCriteriaCrmAttribute
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmAttributeRequest
     */
    public function setMidocoRuleCriteriaCrmAttribute(?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmAttributeDTO $midocoRuleCriteriaCrmAttribute = null): self
    {
        $this->MidocoRuleCriteriaCrmAttribute = $midocoRuleCriteriaCrmAttribute;
        
        return $this;
    }
}
