<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskTypeStatisticDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskTypeStatisticDTO extends AbstractStructBase
{
    /**
     * The activity
     * @var string|null
     */
    protected ?string $activity = null;
    /**
     * The duration
     * @var int|null
     */
    protected ?int $duration = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The orderCreationTimestamp
     * @var string|null
     */
    protected ?string $orderCreationTimestamp = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The orgUnitName
     * @var string|null
     */
    protected ?string $orgUnitName = null;
    /**
     * The process
     * @var string|null
     */
    protected ?string $process = null;
    /**
     * The queueName
     * @var string|null
     */
    protected ?string $queueName = null;
    /**
     * The roleName
     * @var string|null
     */
    protected ?string $roleName = null;
    /**
     * The statisticId
     * @var int|null
     */
    protected ?int $statisticId = null;
    /**
     * The taskCreationTimestamp
     * @var string|null
     */
    protected ?string $taskCreationTimestamp = null;
    /**
     * The taskEditingEnd
     * @var string|null
     */
    protected ?string $taskEditingEnd = null;
    /**
     * The taskEditingStart
     * @var string|null
     */
    protected ?string $taskEditingStart = null;
    /**
     * The taskFinished
     * @var bool|null
     */
    protected ?bool $taskFinished = null;
    /**
     * The taskFinishedTimestamp
     * @var string|null
     */
    protected ?string $taskFinishedTimestamp = null;
    /**
     * The taskKey
     * @var string|null
     */
    protected ?string $taskKey = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for TaskTypeStatisticDTO
     * @uses TaskTypeStatisticDTO::setActivity()
     * @uses TaskTypeStatisticDTO::setDuration()
     * @uses TaskTypeStatisticDTO::setMediatorId()
     * @uses TaskTypeStatisticDTO::setOrderCreationTimestamp()
     * @uses TaskTypeStatisticDTO::setOrderNo()
     * @uses TaskTypeStatisticDTO::setOrgUnitName()
     * @uses TaskTypeStatisticDTO::setProcess()
     * @uses TaskTypeStatisticDTO::setQueueName()
     * @uses TaskTypeStatisticDTO::setRoleName()
     * @uses TaskTypeStatisticDTO::setStatisticId()
     * @uses TaskTypeStatisticDTO::setTaskCreationTimestamp()
     * @uses TaskTypeStatisticDTO::setTaskEditingEnd()
     * @uses TaskTypeStatisticDTO::setTaskEditingStart()
     * @uses TaskTypeStatisticDTO::setTaskFinished()
     * @uses TaskTypeStatisticDTO::setTaskFinishedTimestamp()
     * @uses TaskTypeStatisticDTO::setTaskKey()
     * @uses TaskTypeStatisticDTO::setTaskType()
     * @uses TaskTypeStatisticDTO::setUserId()
     * @param string $activity
     * @param int $duration
     * @param string $mediatorId
     * @param string $orderCreationTimestamp
     * @param int $orderNo
     * @param string $orgUnitName
     * @param string $process
     * @param string $queueName
     * @param string $roleName
     * @param int $statisticId
     * @param string $taskCreationTimestamp
     * @param string $taskEditingEnd
     * @param string $taskEditingStart
     * @param bool $taskFinished
     * @param string $taskFinishedTimestamp
     * @param string $taskKey
     * @param string $taskType
     * @param int $userId
     */
    public function __construct(?string $activity = null, ?int $duration = null, ?string $mediatorId = null, ?string $orderCreationTimestamp = null, ?int $orderNo = null, ?string $orgUnitName = null, ?string $process = null, ?string $queueName = null, ?string $roleName = null, ?int $statisticId = null, ?string $taskCreationTimestamp = null, ?string $taskEditingEnd = null, ?string $taskEditingStart = null, ?bool $taskFinished = null, ?string $taskFinishedTimestamp = null, ?string $taskKey = null, ?string $taskType = null, ?int $userId = null)
    {
        $this
            ->setActivity($activity)
            ->setDuration($duration)
            ->setMediatorId($mediatorId)
            ->setOrderCreationTimestamp($orderCreationTimestamp)
            ->setOrderNo($orderNo)
            ->setOrgUnitName($orgUnitName)
            ->setProcess($process)
            ->setQueueName($queueName)
            ->setRoleName($roleName)
            ->setStatisticId($statisticId)
            ->setTaskCreationTimestamp($taskCreationTimestamp)
            ->setTaskEditingEnd($taskEditingEnd)
            ->setTaskEditingStart($taskEditingStart)
            ->setTaskFinished($taskFinished)
            ->setTaskFinishedTimestamp($taskFinishedTimestamp)
            ->setTaskKey($taskKey)
            ->setTaskType($taskType)
            ->setUserId($userId);
    }
    /**
     * Get activity value
     * @return string|null
     */
    public function getActivity(): ?string
    {
        return $this->activity;
    }
    /**
     * Set activity value
     * @param string $activity
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setActivity(?string $activity = null): self
    {
        // validation for constraint: string
        if (!is_null($activity) && !is_string($activity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activity, true), gettype($activity)), __LINE__);
        }
        $this->activity = $activity;
        
        return $this;
    }
    /**
     * Get duration value
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param int $duration
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setDuration(?int $duration = null): self
    {
        // validation for constraint: int
        if (!is_null($duration) && !(is_int($duration) || ctype_digit($duration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get orderCreationTimestamp value
     * @return string|null
     */
    public function getOrderCreationTimestamp(): ?string
    {
        return $this->orderCreationTimestamp;
    }
    /**
     * Set orderCreationTimestamp value
     * @param string $orderCreationTimestamp
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setOrderCreationTimestamp(?string $orderCreationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($orderCreationTimestamp) && !is_string($orderCreationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderCreationTimestamp, true), gettype($orderCreationTimestamp)), __LINE__);
        }
        $this->orderCreationTimestamp = $orderCreationTimestamp;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get orgUnitName value
     * @return string|null
     */
    public function getOrgUnitName(): ?string
    {
        return $this->orgUnitName;
    }
    /**
     * Set orgUnitName value
     * @param string $orgUnitName
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setOrgUnitName(?string $orgUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnitName) && !is_string($orgUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnitName, true), gettype($orgUnitName)), __LINE__);
        }
        $this->orgUnitName = $orgUnitName;
        
        return $this;
    }
    /**
     * Get process value
     * @return string|null
     */
    public function getProcess(): ?string
    {
        return $this->process;
    }
    /**
     * Set process value
     * @param string $process
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setProcess(?string $process = null): self
    {
        // validation for constraint: string
        if (!is_null($process) && !is_string($process)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($process, true), gettype($process)), __LINE__);
        }
        $this->process = $process;
        
        return $this;
    }
    /**
     * Get queueName value
     * @return string|null
     */
    public function getQueueName(): ?string
    {
        return $this->queueName;
    }
    /**
     * Set queueName value
     * @param string $queueName
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setQueueName(?string $queueName = null): self
    {
        // validation for constraint: string
        if (!is_null($queueName) && !is_string($queueName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queueName, true), gettype($queueName)), __LINE__);
        }
        $this->queueName = $queueName;
        
        return $this;
    }
    /**
     * Get roleName value
     * @return string|null
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }
    /**
     * Set roleName value
     * @param string $roleName
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setRoleName(?string $roleName = null): self
    {
        // validation for constraint: string
        if (!is_null($roleName) && !is_string($roleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roleName, true), gettype($roleName)), __LINE__);
        }
        $this->roleName = $roleName;
        
        return $this;
    }
    /**
     * Get statisticId value
     * @return int|null
     */
    public function getStatisticId(): ?int
    {
        return $this->statisticId;
    }
    /**
     * Set statisticId value
     * @param int $statisticId
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setStatisticId(?int $statisticId = null): self
    {
        // validation for constraint: int
        if (!is_null($statisticId) && !(is_int($statisticId) || ctype_digit($statisticId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statisticId, true), gettype($statisticId)), __LINE__);
        }
        $this->statisticId = $statisticId;
        
        return $this;
    }
    /**
     * Get taskCreationTimestamp value
     * @return string|null
     */
    public function getTaskCreationTimestamp(): ?string
    {
        return $this->taskCreationTimestamp;
    }
    /**
     * Set taskCreationTimestamp value
     * @param string $taskCreationTimestamp
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setTaskCreationTimestamp(?string $taskCreationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($taskCreationTimestamp) && !is_string($taskCreationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskCreationTimestamp, true), gettype($taskCreationTimestamp)), __LINE__);
        }
        $this->taskCreationTimestamp = $taskCreationTimestamp;
        
        return $this;
    }
    /**
     * Get taskEditingEnd value
     * @return string|null
     */
    public function getTaskEditingEnd(): ?string
    {
        return $this->taskEditingEnd;
    }
    /**
     * Set taskEditingEnd value
     * @param string $taskEditingEnd
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setTaskEditingEnd(?string $taskEditingEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($taskEditingEnd) && !is_string($taskEditingEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskEditingEnd, true), gettype($taskEditingEnd)), __LINE__);
        }
        $this->taskEditingEnd = $taskEditingEnd;
        
        return $this;
    }
    /**
     * Get taskEditingStart value
     * @return string|null
     */
    public function getTaskEditingStart(): ?string
    {
        return $this->taskEditingStart;
    }
    /**
     * Set taskEditingStart value
     * @param string $taskEditingStart
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setTaskEditingStart(?string $taskEditingStart = null): self
    {
        // validation for constraint: string
        if (!is_null($taskEditingStart) && !is_string($taskEditingStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskEditingStart, true), gettype($taskEditingStart)), __LINE__);
        }
        $this->taskEditingStart = $taskEditingStart;
        
        return $this;
    }
    /**
     * Get taskFinished value
     * @return bool|null
     */
    public function getTaskFinished(): ?bool
    {
        return $this->taskFinished;
    }
    /**
     * Set taskFinished value
     * @param bool $taskFinished
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setTaskFinished(?bool $taskFinished = null): self
    {
        // validation for constraint: boolean
        if (!is_null($taskFinished) && !is_bool($taskFinished)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($taskFinished, true), gettype($taskFinished)), __LINE__);
        }
        $this->taskFinished = $taskFinished;
        
        return $this;
    }
    /**
     * Get taskFinishedTimestamp value
     * @return string|null
     */
    public function getTaskFinishedTimestamp(): ?string
    {
        return $this->taskFinishedTimestamp;
    }
    /**
     * Set taskFinishedTimestamp value
     * @param string $taskFinishedTimestamp
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setTaskFinishedTimestamp(?string $taskFinishedTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($taskFinishedTimestamp) && !is_string($taskFinishedTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskFinishedTimestamp, true), gettype($taskFinishedTimestamp)), __LINE__);
        }
        $this->taskFinishedTimestamp = $taskFinishedTimestamp;
        
        return $this;
    }
    /**
     * Get taskKey value
     * @return string|null
     */
    public function getTaskKey(): ?string
    {
        return $this->taskKey;
    }
    /**
     * Set taskKey value
     * @param string $taskKey
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
     */
    public function setTaskKey(?string $taskKey = null): self
    {
        // validation for constraint: string
        if (!is_null($taskKey) && !is_string($taskKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskKey, true), gettype($taskKey)), __LINE__);
        }
        $this->taskKey = $taskKey;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskTypeStatisticDTO
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
}
