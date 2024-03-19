<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskOverview StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskOverview extends AbstractStructBase
{
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The size
     * @var int|null
     */
    protected ?int $size = null;
    /**
     * The delegateQueue
     * @var string|null
     */
    protected ?string $delegateQueue = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The delegationUser
     * @var int|null
     */
    protected ?int $delegationUser = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The manuallyCreatedTask
     * @var bool|null
     */
    protected ?bool $manuallyCreatedTask = null;
    /**
     * Constructor method for TaskOverview
     * @uses TaskOverview::setTaskType()
     * @uses TaskOverview::setSize()
     * @uses TaskOverview::setDelegateQueue()
     * @uses TaskOverview::setUnitName()
     * @uses TaskOverview::setPriority()
     * @uses TaskOverview::setDescription()
     * @uses TaskOverview::setDelegationUser()
     * @uses TaskOverview::setCreationUser()
     * @uses TaskOverview::setUserId()
     * @uses TaskOverview::setManuallyCreatedTask()
     * @param string $taskType
     * @param int $size
     * @param string $delegateQueue
     * @param string $unitName
     * @param int $priority
     * @param string $description
     * @param int $delegationUser
     * @param int $creationUser
     * @param int $userId
     * @param bool $manuallyCreatedTask
     */
    public function __construct(?string $taskType = null, ?int $size = null, ?string $delegateQueue = null, ?string $unitName = null, ?int $priority = null, ?string $description = null, ?int $delegationUser = null, ?int $creationUser = null, ?int $userId = null, ?bool $manuallyCreatedTask = null)
    {
        $this
            ->setTaskType($taskType)
            ->setSize($size)
            ->setDelegateQueue($delegateQueue)
            ->setUnitName($unitName)
            ->setPriority($priority)
            ->setDescription($description)
            ->setDelegationUser($delegationUser)
            ->setCreationUser($creationUser)
            ->setUserId($userId)
            ->setManuallyCreatedTask($manuallyCreatedTask);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview
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
     * Get size value
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param int $size
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview
     */
    public function setSize(?int $size = null): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->size = $size;
        
        return $this;
    }
    /**
     * Get delegateQueue value
     * @return string|null
     */
    public function getDelegateQueue(): ?string
    {
        return $this->delegateQueue;
    }
    /**
     * Set delegateQueue value
     * @param string $delegateQueue
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview
     */
    public function setDelegateQueue(?string $delegateQueue = null): self
    {
        // validation for constraint: string
        if (!is_null($delegateQueue) && !is_string($delegateQueue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegateQueue, true), gettype($delegateQueue)), __LINE__);
        }
        $this->delegateQueue = $delegateQueue;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview
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
     * Get delegationUser value
     * @return int|null
     */
    public function getDelegationUser(): ?int
    {
        return $this->delegationUser;
    }
    /**
     * Set delegationUser value
     * @param int $delegationUser
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview
     */
    public function setDelegationUser(?int $delegationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($delegationUser) && !(is_int($delegationUser) || ctype_digit($delegationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delegationUser, true), gettype($delegationUser)), __LINE__);
        }
        $this->delegationUser = $delegationUser;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview
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
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get manuallyCreatedTask value
     * @return bool|null
     */
    public function getManuallyCreatedTask(): ?bool
    {
        return $this->manuallyCreatedTask;
    }
    /**
     * Set manuallyCreatedTask value
     * @param bool $manuallyCreatedTask
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview
     */
    public function setManuallyCreatedTask(?bool $manuallyCreatedTask = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manuallyCreatedTask) && !is_bool($manuallyCreatedTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manuallyCreatedTask, true), gettype($manuallyCreatedTask)), __LINE__);
        }
        $this->manuallyCreatedTask = $manuallyCreatedTask;
        
        return $this;
    }
}
