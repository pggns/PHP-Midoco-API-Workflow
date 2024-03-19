<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListRuleCriteriaOrderAttributeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListRuleCriteriaOrderAttributeRequest extends AbstractStructBase
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
     * The criteriaId
     * @var int|null
     */
    protected ?int $criteriaId = null;
    /**
     * Constructor method for ListRuleCriteriaOrderAttributeRequest
     * @uses ListRuleCriteriaOrderAttributeRequest::setUnitName()
     * @uses ListRuleCriteriaOrderAttributeRequest::setCriteriaId()
     * @param string $unitName
     * @param int $criteriaId
     */
    public function __construct(string $unitName, ?int $criteriaId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setCriteriaId($criteriaId);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderAttributeRequest
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
     * Get criteriaId value
     * @return int|null
     */
    public function getCriteriaId(): ?int
    {
        return $this->criteriaId;
    }
    /**
     * Set criteriaId value
     * @param int $criteriaId
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderAttributeRequest
     */
    public function setCriteriaId(?int $criteriaId = null): self
    {
        // validation for constraint: int
        if (!is_null($criteriaId) && !(is_int($criteriaId) || ctype_digit($criteriaId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($criteriaId, true), gettype($criteriaId)), __LINE__);
        }
        $this->criteriaId = $criteriaId;
        
        return $this;
    }
}
