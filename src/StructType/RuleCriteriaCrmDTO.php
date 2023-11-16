<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleCriteriaCrmDTO StructType
 * @subpackage Structs
 */
class RuleCriteriaCrmDTO extends AbstractStructBase
{
    /**
     * The criteriaId
     * @var int|null
     */
    protected ?int $criteriaId = null;
    /**
     * The definitionId
     * @var int|null
     */
    protected ?int $definitionId = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for RuleCriteriaCrmDTO
     * @uses RuleCriteriaCrmDTO::setCriteriaId()
     * @uses RuleCriteriaCrmDTO::setDefinitionId()
     * @uses RuleCriteriaCrmDTO::setType()
     * @param int $criteriaId
     * @param int $definitionId
     * @param int $type
     */
    public function __construct(?int $criteriaId = null, ?int $definitionId = null, ?int $type = null)
    {
        $this
            ->setCriteriaId($criteriaId)
            ->setDefinitionId($definitionId)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO
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
    /**
     * Get definitionId value
     * @return int|null
     */
    public function getDefinitionId(): ?int
    {
        return $this->definitionId;
    }
    /**
     * Set definitionId value
     * @param int $definitionId
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO
     */
    public function setDefinitionId(?int $definitionId = null): self
    {
        // validation for constraint: int
        if (!is_null($definitionId) && !(is_int($definitionId) || ctype_digit($definitionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($definitionId, true), gettype($definitionId)), __LINE__);
        }
        $this->definitionId = $definitionId;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleCriteriaCrmDTO
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
