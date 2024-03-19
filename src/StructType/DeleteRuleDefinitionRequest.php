<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteRuleDefinitionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteRuleDefinitionRequest extends AbstractStructBase
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
     * The definitionId
     * @var int|null
     */
    protected ?int $definitionId = null;
    /**
     * Constructor method for DeleteRuleDefinitionRequest
     * @uses DeleteRuleDefinitionRequest::setUnitName()
     * @uses DeleteRuleDefinitionRequest::setDefinitionId()
     * @param string $unitName
     * @param int $definitionId
     */
    public function __construct(string $unitName, ?int $definitionId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setDefinitionId($definitionId);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteRuleDefinitionRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteRuleDefinitionRequest
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
}
