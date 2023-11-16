<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskDefinitionDTO StructType
 * @subpackage Structs
 */
class TaskDefinitionDTO extends AbstractStructBase
{
    /**
     * The autoDelegee
     * @var int|null
     */
    protected ?int $autoDelegee = null;
    /**
     * The autoTaskQueue
     * @var string|null
     */
    protected ?string $autoTaskQueue = null;
    /**
     * The daysToWarning1
     * @var int|null
     */
    protected ?int $daysToWarning1 = null;
    /**
     * The daysToWarning2
     * @var int|null
     */
    protected ?int $daysToWarning2 = null;
    /**
     * The isSystem
     * @var bool|null
     */
    protected ?bool $isSystem = null;
    /**
     * The preventDateChange
     * @var bool|null
     */
    protected ?bool $preventDateChange = null;
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The warningReferenceDate
     * @var string|null
     */
    protected ?string $warningReferenceDate = null;
    /**
     * Constructor method for TaskDefinitionDTO
     * @uses TaskDefinitionDTO::setAutoDelegee()
     * @uses TaskDefinitionDTO::setAutoTaskQueue()
     * @uses TaskDefinitionDTO::setDaysToWarning1()
     * @uses TaskDefinitionDTO::setDaysToWarning2()
     * @uses TaskDefinitionDTO::setIsSystem()
     * @uses TaskDefinitionDTO::setPreventDateChange()
     * @uses TaskDefinitionDTO::setPriority()
     * @uses TaskDefinitionDTO::setTaskType()
     * @uses TaskDefinitionDTO::setWarningReferenceDate()
     * @param int $autoDelegee
     * @param string $autoTaskQueue
     * @param int $daysToWarning1
     * @param int $daysToWarning2
     * @param bool $isSystem
     * @param bool $preventDateChange
     * @param int $priority
     * @param string $taskType
     * @param string $warningReferenceDate
     */
    public function __construct(?int $autoDelegee = null, ?string $autoTaskQueue = null, ?int $daysToWarning1 = null, ?int $daysToWarning2 = null, ?bool $isSystem = null, ?bool $preventDateChange = null, ?int $priority = null, ?string $taskType = null, ?string $warningReferenceDate = null)
    {
        $this
            ->setAutoDelegee($autoDelegee)
            ->setAutoTaskQueue($autoTaskQueue)
            ->setDaysToWarning1($daysToWarning1)
            ->setDaysToWarning2($daysToWarning2)
            ->setIsSystem($isSystem)
            ->setPreventDateChange($preventDateChange)
            ->setPriority($priority)
            ->setTaskType($taskType)
            ->setWarningReferenceDate($warningReferenceDate);
    }
    /**
     * Get autoDelegee value
     * @return int|null
     */
    public function getAutoDelegee(): ?int
    {
        return $this->autoDelegee;
    }
    /**
     * Set autoDelegee value
     * @param int $autoDelegee
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDTO
     */
    public function setAutoDelegee(?int $autoDelegee = null): self
    {
        // validation for constraint: int
        if (!is_null($autoDelegee) && !(is_int($autoDelegee) || ctype_digit($autoDelegee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($autoDelegee, true), gettype($autoDelegee)), __LINE__);
        }
        $this->autoDelegee = $autoDelegee;
        
        return $this;
    }
    /**
     * Get autoTaskQueue value
     * @return string|null
     */
    public function getAutoTaskQueue(): ?string
    {
        return $this->autoTaskQueue;
    }
    /**
     * Set autoTaskQueue value
     * @param string $autoTaskQueue
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDTO
     */
    public function setAutoTaskQueue(?string $autoTaskQueue = null): self
    {
        // validation for constraint: string
        if (!is_null($autoTaskQueue) && !is_string($autoTaskQueue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoTaskQueue, true), gettype($autoTaskQueue)), __LINE__);
        }
        $this->autoTaskQueue = $autoTaskQueue;
        
        return $this;
    }
    /**
     * Get daysToWarning1 value
     * @return int|null
     */
    public function getDaysToWarning1(): ?int
    {
        return $this->daysToWarning1;
    }
    /**
     * Set daysToWarning1 value
     * @param int $daysToWarning1
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDTO
     */
    public function setDaysToWarning1(?int $daysToWarning1 = null): self
    {
        // validation for constraint: int
        if (!is_null($daysToWarning1) && !(is_int($daysToWarning1) || ctype_digit($daysToWarning1))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysToWarning1, true), gettype($daysToWarning1)), __LINE__);
        }
        $this->daysToWarning1 = $daysToWarning1;
        
        return $this;
    }
    /**
     * Get daysToWarning2 value
     * @return int|null
     */
    public function getDaysToWarning2(): ?int
    {
        return $this->daysToWarning2;
    }
    /**
     * Set daysToWarning2 value
     * @param int $daysToWarning2
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDTO
     */
    public function setDaysToWarning2(?int $daysToWarning2 = null): self
    {
        // validation for constraint: int
        if (!is_null($daysToWarning2) && !(is_int($daysToWarning2) || ctype_digit($daysToWarning2))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysToWarning2, true), gettype($daysToWarning2)), __LINE__);
        }
        $this->daysToWarning2 = $daysToWarning2;
        
        return $this;
    }
    /**
     * Get isSystem value
     * @return bool|null
     */
    public function getIsSystem(): ?bool
    {
        return $this->isSystem;
    }
    /**
     * Set isSystem value
     * @param bool $isSystem
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDTO
     */
    public function setIsSystem(?bool $isSystem = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSystem) && !is_bool($isSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSystem, true), gettype($isSystem)), __LINE__);
        }
        $this->isSystem = $isSystem;
        
        return $this;
    }
    /**
     * Get preventDateChange value
     * @return bool|null
     */
    public function getPreventDateChange(): ?bool
    {
        return $this->preventDateChange;
    }
    /**
     * Set preventDateChange value
     * @param bool $preventDateChange
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDTO
     */
    public function setPreventDateChange(?bool $preventDateChange = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventDateChange) && !is_bool($preventDateChange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventDateChange, true), gettype($preventDateChange)), __LINE__);
        }
        $this->preventDateChange = $preventDateChange;
        
        return $this;
    }
    /**
     * Get priority value
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param int $priority
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDTO
     */
    public function setPriority(?int $priority = null): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDTO
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
    /**
     * Get warningReferenceDate value
     * @return string|null
     */
    public function getWarningReferenceDate(): ?string
    {
        return $this->warningReferenceDate;
    }
    /**
     * Set warningReferenceDate value
     * @param string $warningReferenceDate
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDefinitionDTO
     */
    public function setWarningReferenceDate(?string $warningReferenceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($warningReferenceDate) && !is_string($warningReferenceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warningReferenceDate, true), gettype($warningReferenceDate)), __LINE__);
        }
        $this->warningReferenceDate = $warningReferenceDate;
        
        return $this;
    }
}
