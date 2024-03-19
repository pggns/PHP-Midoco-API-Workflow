<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRuleCriteriaCrmRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRuleCriteriaCrmRequest extends AbstractStructBase
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
     * The MidocoRuleCriteriaCrm
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleCriteriaCrm
     * @var \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO $MidocoRuleCriteriaCrm = null;
    /**
     * Constructor method for SaveRuleCriteriaCrmRequest
     * @uses SaveRuleCriteriaCrmRequest::setUnitName()
     * @uses SaveRuleCriteriaCrmRequest::setMidocoRuleCriteriaCrm()
     * @param string $unitName
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO $midocoRuleCriteriaCrm
     */
    public function __construct(string $unitName, ?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO $midocoRuleCriteriaCrm = null)
    {
        $this
            ->setUnitName($unitName)
            ->setMidocoRuleCriteriaCrm($midocoRuleCriteriaCrm);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmRequest
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
     * Get MidocoRuleCriteriaCrm value
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO|null
     */
    public function getMidocoRuleCriteriaCrm(): ?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO
    {
        return $this->MidocoRuleCriteriaCrm;
    }
    /**
     * Set MidocoRuleCriteriaCrm value
     * @param \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO $midocoRuleCriteriaCrm
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmRequest
     */
    public function setMidocoRuleCriteriaCrm(?\Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO $midocoRuleCriteriaCrm = null): self
    {
        $this->MidocoRuleCriteriaCrm = $midocoRuleCriteriaCrm;
        
        return $this;
    }
}
