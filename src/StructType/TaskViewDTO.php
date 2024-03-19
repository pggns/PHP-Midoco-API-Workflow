<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskViewDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskViewDTO extends AbstractStructBase
{
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUnit
     * @var string|null
     */
    protected ?string $creationUnit = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The filterDefinition
     * @var string|null
     */
    protected ?string $filterDefinition = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The taskViewName
     * @var string|null
     */
    protected ?string $taskViewName = null;
    /**
     * The taskViewType
     * @var string|null
     */
    protected ?string $taskViewType = null;
    /**
     * Constructor method for TaskViewDTO
     * @uses TaskViewDTO::setCreationTime()
     * @uses TaskViewDTO::setCreationUnit()
     * @uses TaskViewDTO::setCreationUser()
     * @uses TaskViewDTO::setFilterDefinition()
     * @uses TaskViewDTO::setIsActive()
     * @uses TaskViewDTO::setTaskViewName()
     * @uses TaskViewDTO::setTaskViewType()
     * @param string $creationTime
     * @param string $creationUnit
     * @param int $creationUser
     * @param string $filterDefinition
     * @param bool $isActive
     * @param string $taskViewName
     * @param string $taskViewType
     */
    public function __construct(?string $creationTime = null, ?string $creationUnit = null, ?int $creationUser = null, ?string $filterDefinition = null, ?bool $isActive = null, ?string $taskViewName = null, ?string $taskViewType = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setCreationUnit($creationUnit)
            ->setCreationUser($creationUser)
            ->setFilterDefinition($filterDefinition)
            ->setIsActive($isActive)
            ->setTaskViewName($taskViewName)
            ->setTaskViewType($taskViewType);
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get creationUnit value
     * @return string|null
     */
    public function getCreationUnit(): ?string
    {
        return $this->creationUnit;
    }
    /**
     * Set creationUnit value
     * @param string $creationUnit
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewDTO
     */
    public function setCreationUnit(?string $creationUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUnit) && !is_string($creationUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUnit, true), gettype($creationUnit)), __LINE__);
        }
        $this->creationUnit = $creationUnit;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get filterDefinition value
     * @return string|null
     */
    public function getFilterDefinition(): ?string
    {
        return $this->filterDefinition;
    }
    /**
     * Set filterDefinition value
     * @param string $filterDefinition
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewDTO
     */
    public function setFilterDefinition(?string $filterDefinition = null): self
    {
        // validation for constraint: string
        if (!is_null($filterDefinition) && !is_string($filterDefinition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterDefinition, true), gettype($filterDefinition)), __LINE__);
        }
        $this->filterDefinition = $filterDefinition;
        
        return $this;
    }
    /**
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewDTO
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        
        return $this;
    }
    /**
     * Get taskViewName value
     * @return string|null
     */
    public function getTaskViewName(): ?string
    {
        return $this->taskViewName;
    }
    /**
     * Set taskViewName value
     * @param string $taskViewName
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewDTO
     */
    public function setTaskViewName(?string $taskViewName = null): self
    {
        // validation for constraint: string
        if (!is_null($taskViewName) && !is_string($taskViewName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskViewName, true), gettype($taskViewName)), __LINE__);
        }
        $this->taskViewName = $taskViewName;
        
        return $this;
    }
    /**
     * Get taskViewType value
     * @return string|null
     */
    public function getTaskViewType(): ?string
    {
        return $this->taskViewType;
    }
    /**
     * Set taskViewType value
     * @param string $taskViewType
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewDTO
     */
    public function setTaskViewType(?string $taskViewType = null): self
    {
        // validation for constraint: string
        if (!is_null($taskViewType) && !is_string($taskViewType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskViewType, true), gettype($taskViewType)), __LINE__);
        }
        $this->taskViewType = $taskViewType;
        
        return $this;
    }
}
