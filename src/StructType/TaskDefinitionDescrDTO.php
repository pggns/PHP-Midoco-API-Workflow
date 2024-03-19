<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskDefinitionDescrDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskDefinitionDescrDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The hints
     * @var string|null
     */
    protected ?string $hints = null;
    /**
     * The locale
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * Constructor method for TaskDefinitionDescrDTO
     * @uses TaskDefinitionDescrDTO::setDescription()
     * @uses TaskDefinitionDescrDTO::setHints()
     * @uses TaskDefinitionDescrDTO::setLocale()
     * @uses TaskDefinitionDescrDTO::setTaskType()
     * @param string $description
     * @param string $hints
     * @param string $locale
     * @param string $taskType
     */
    public function __construct(?string $description = null, ?string $hints = null, ?string $locale = null, ?string $taskType = null)
    {
        $this
            ->setDescription($description)
            ->setHints($hints)
            ->setLocale($locale)
            ->setTaskType($taskType);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDescrDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get hints value
     * @return string|null
     */
    public function getHints(): ?string
    {
        return $this->hints;
    }
    /**
     * Set hints value
     * @param string $hints
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDescrDTO
     */
    public function setHints(?string $hints = null): self
    {
        // validation for constraint: string
        if (!is_null($hints) && !is_string($hints)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hints, true), gettype($hints)), __LINE__);
        }
        $this->hints = $hints;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDescrDTO
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
    /**
     * Get taskType value
     * @return string|null
     */
    public function getTaskType(): ?string
    {
        return $this->taskType;
    }
    /**
     * Set taskType value
     * @param string $taskType
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDescrDTO
     */
    public function setTaskType(?string $taskType = null): self
    {
        // validation for constraint: string
        if (!is_null($taskType) && !is_string($taskType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskType, true), gettype($taskType)), __LINE__);
        }
        $this->taskType = $taskType;
        
        return $this;
    }
}
