<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnlistmentDTO StructType
 * @subpackage Structs
 */
class EnlistmentDTO extends AbstractStructBase
{
    /**
     * The actionTimestamp
     * @var string|null
     */
    protected ?string $actionTimestamp = null;
    /**
     * The activity
     * @var string|null
     */
    protected ?string $activity = null;
    /**
     * The assignedOrgunit
     * @var string|null
     */
    protected ?string $assignedOrgunit = null;
    /**
     * The assignedQueue
     * @var string|null
     */
    protected ?string $assignedQueue = null;
    /**
     * The assignedUser
     * @var int|null
     */
    protected ?int $assignedUser = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The delegateRole
     * @var int|null
     */
    protected ?int $delegateRole = null;
    /**
     * The delegationComment
     * @var string|null
     */
    protected ?string $delegationComment = null;
    /**
     * The delegationDate
     * @var string|null
     */
    protected ?string $delegationDate = null;
    /**
     * The handleManually
     * @var bool|null
     */
    protected ?bool $handleManually = null;
    /**
     * The manuallyCreatedTask
     * @var bool|null
     */
    protected ?bool $manuallyCreatedTask = null;
    /**
     * The messageBundle
     * @var string|null
     */
    protected ?string $messageBundle = null;
    /**
     * The messageId
     * @var string|null
     */
    protected ?string $messageId = null;
    /**
     * The messageParams
     * @var string|null
     */
    protected ?string $messageParams = null;
    /**
     * The notifyOnComplete
     * @var bool|null
     */
    protected ?bool $notifyOnComplete = null;
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The process
     * @var string|null
     */
    protected ?string $process = null;
    /**
     * The role
     * @var string|null
     */
    protected ?string $role = null;
    /**
     * The startTime
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The subject
     * @var int|null
     */
    protected ?int $subject = null;
    /**
     * The taskId
     * @var int|null
     */
    protected ?int $taskId = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The timeLimit
     * @var string|null
     */
    protected ?string $timeLimit = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The workTimestamp
     * @var string|null
     */
    protected ?string $workTimestamp = null;
    /**
     * The workingUser
     * @var int|null
     */
    protected ?int $workingUser = null;
    /**
     * Constructor method for EnlistmentDTO
     * @uses EnlistmentDTO::setActionTimestamp()
     * @uses EnlistmentDTO::setActivity()
     * @uses EnlistmentDTO::setAssignedOrgunit()
     * @uses EnlistmentDTO::setAssignedQueue()
     * @uses EnlistmentDTO::setAssignedUser()
     * @uses EnlistmentDTO::setCreationTimestamp()
     * @uses EnlistmentDTO::setCreationUser()
     * @uses EnlistmentDTO::setDelegateRole()
     * @uses EnlistmentDTO::setDelegationComment()
     * @uses EnlistmentDTO::setDelegationDate()
     * @uses EnlistmentDTO::setHandleManually()
     * @uses EnlistmentDTO::setManuallyCreatedTask()
     * @uses EnlistmentDTO::setMessageBundle()
     * @uses EnlistmentDTO::setMessageId()
     * @uses EnlistmentDTO::setMessageParams()
     * @uses EnlistmentDTO::setNotifyOnComplete()
     * @uses EnlistmentDTO::setPriority()
     * @uses EnlistmentDTO::setProcess()
     * @uses EnlistmentDTO::setRole()
     * @uses EnlistmentDTO::setStartTime()
     * @uses EnlistmentDTO::setSubject()
     * @uses EnlistmentDTO::setTaskId()
     * @uses EnlistmentDTO::setTaskType()
     * @uses EnlistmentDTO::setTimeLimit()
     * @uses EnlistmentDTO::setTimestamp()
     * @uses EnlistmentDTO::setUserId()
     * @uses EnlistmentDTO::setWorkTimestamp()
     * @uses EnlistmentDTO::setWorkingUser()
     * @param string $actionTimestamp
     * @param string $activity
     * @param string $assignedOrgunit
     * @param string $assignedQueue
     * @param int $assignedUser
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param int $delegateRole
     * @param string $delegationComment
     * @param string $delegationDate
     * @param bool $handleManually
     * @param bool $manuallyCreatedTask
     * @param string $messageBundle
     * @param string $messageId
     * @param string $messageParams
     * @param bool $notifyOnComplete
     * @param int $priority
     * @param string $process
     * @param string $role
     * @param string $startTime
     * @param int $subject
     * @param int $taskId
     * @param string $taskType
     * @param string $timeLimit
     * @param string $timestamp
     * @param int $userId
     * @param string $workTimestamp
     * @param int $workingUser
     */
    public function __construct(?string $actionTimestamp = null, ?string $activity = null, ?string $assignedOrgunit = null, ?string $assignedQueue = null, ?int $assignedUser = null, ?string $creationTimestamp = null, ?int $creationUser = null, ?int $delegateRole = null, ?string $delegationComment = null, ?string $delegationDate = null, ?bool $handleManually = null, ?bool $manuallyCreatedTask = null, ?string $messageBundle = null, ?string $messageId = null, ?string $messageParams = null, ?bool $notifyOnComplete = null, ?int $priority = null, ?string $process = null, ?string $role = null, ?string $startTime = null, ?int $subject = null, ?int $taskId = null, ?string $taskType = null, ?string $timeLimit = null, ?string $timestamp = null, ?int $userId = null, ?string $workTimestamp = null, ?int $workingUser = null)
    {
        $this
            ->setActionTimestamp($actionTimestamp)
            ->setActivity($activity)
            ->setAssignedOrgunit($assignedOrgunit)
            ->setAssignedQueue($assignedQueue)
            ->setAssignedUser($assignedUser)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setDelegateRole($delegateRole)
            ->setDelegationComment($delegationComment)
            ->setDelegationDate($delegationDate)
            ->setHandleManually($handleManually)
            ->setManuallyCreatedTask($manuallyCreatedTask)
            ->setMessageBundle($messageBundle)
            ->setMessageId($messageId)
            ->setMessageParams($messageParams)
            ->setNotifyOnComplete($notifyOnComplete)
            ->setPriority($priority)
            ->setProcess($process)
            ->setRole($role)
            ->setStartTime($startTime)
            ->setSubject($subject)
            ->setTaskId($taskId)
            ->setTaskType($taskType)
            ->setTimeLimit($timeLimit)
            ->setTimestamp($timestamp)
            ->setUserId($userId)
            ->setWorkTimestamp($workTimestamp)
            ->setWorkingUser($workingUser);
    }
    /**
     * Get actionTimestamp value
     * @return string|null
     */
    public function getActionTimestamp(): ?string
    {
        return $this->actionTimestamp;
    }
    /**
     * Set actionTimestamp value
     * @param string $actionTimestamp
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setActionTimestamp(?string $actionTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($actionTimestamp) && !is_string($actionTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionTimestamp, true), gettype($actionTimestamp)), __LINE__);
        }
        $this->actionTimestamp = $actionTimestamp;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
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
     * Get assignedOrgunit value
     * @return string|null
     */
    public function getAssignedOrgunit(): ?string
    {
        return $this->assignedOrgunit;
    }
    /**
     * Set assignedOrgunit value
     * @param string $assignedOrgunit
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setAssignedOrgunit(?string $assignedOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedOrgunit) && !is_string($assignedOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedOrgunit, true), gettype($assignedOrgunit)), __LINE__);
        }
        $this->assignedOrgunit = $assignedOrgunit;
        
        return $this;
    }
    /**
     * Get assignedQueue value
     * @return string|null
     */
    public function getAssignedQueue(): ?string
    {
        return $this->assignedQueue;
    }
    /**
     * Set assignedQueue value
     * @param string $assignedQueue
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setAssignedQueue(?string $assignedQueue = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedQueue) && !is_string($assignedQueue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedQueue, true), gettype($assignedQueue)), __LINE__);
        }
        $this->assignedQueue = $assignedQueue;
        
        return $this;
    }
    /**
     * Get assignedUser value
     * @return int|null
     */
    public function getAssignedUser(): ?int
    {
        return $this->assignedUser;
    }
    /**
     * Set assignedUser value
     * @param int $assignedUser
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setAssignedUser(?int $assignedUser = null): self
    {
        // validation for constraint: int
        if (!is_null($assignedUser) && !(is_int($assignedUser) || ctype_digit($assignedUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($assignedUser, true), gettype($assignedUser)), __LINE__);
        }
        $this->assignedUser = $assignedUser;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
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
     * Get delegateRole value
     * @return int|null
     */
    public function getDelegateRole(): ?int
    {
        return $this->delegateRole;
    }
    /**
     * Set delegateRole value
     * @param int $delegateRole
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setDelegateRole(?int $delegateRole = null): self
    {
        // validation for constraint: int
        if (!is_null($delegateRole) && !(is_int($delegateRole) || ctype_digit($delegateRole))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delegateRole, true), gettype($delegateRole)), __LINE__);
        }
        $this->delegateRole = $delegateRole;
        
        return $this;
    }
    /**
     * Get delegationComment value
     * @return string|null
     */
    public function getDelegationComment(): ?string
    {
        return $this->delegationComment;
    }
    /**
     * Set delegationComment value
     * @param string $delegationComment
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setDelegationComment(?string $delegationComment = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationComment) && !is_string($delegationComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationComment, true), gettype($delegationComment)), __LINE__);
        }
        $this->delegationComment = $delegationComment;
        
        return $this;
    }
    /**
     * Get delegationDate value
     * @return string|null
     */
    public function getDelegationDate(): ?string
    {
        return $this->delegationDate;
    }
    /**
     * Set delegationDate value
     * @param string $delegationDate
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setDelegationDate(?string $delegationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationDate) && !is_string($delegationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationDate, true), gettype($delegationDate)), __LINE__);
        }
        $this->delegationDate = $delegationDate;
        
        return $this;
    }
    /**
     * Get handleManually value
     * @return bool|null
     */
    public function getHandleManually(): ?bool
    {
        return $this->handleManually;
    }
    /**
     * Set handleManually value
     * @param bool $handleManually
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setHandleManually(?bool $handleManually = null): self
    {
        // validation for constraint: boolean
        if (!is_null($handleManually) && !is_bool($handleManually)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($handleManually, true), gettype($handleManually)), __LINE__);
        }
        $this->handleManually = $handleManually;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
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
    /**
     * Get messageBundle value
     * @return string|null
     */
    public function getMessageBundle(): ?string
    {
        return $this->messageBundle;
    }
    /**
     * Set messageBundle value
     * @param string $messageBundle
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setMessageBundle(?string $messageBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($messageBundle) && !is_string($messageBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageBundle, true), gettype($messageBundle)), __LINE__);
        }
        $this->messageBundle = $messageBundle;
        
        return $this;
    }
    /**
     * Get messageId value
     * @return string|null
     */
    public function getMessageId(): ?string
    {
        return $this->messageId;
    }
    /**
     * Set messageId value
     * @param string $messageId
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setMessageId(?string $messageId = null): self
    {
        // validation for constraint: string
        if (!is_null($messageId) && !is_string($messageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageId, true), gettype($messageId)), __LINE__);
        }
        $this->messageId = $messageId;
        
        return $this;
    }
    /**
     * Get messageParams value
     * @return string|null
     */
    public function getMessageParams(): ?string
    {
        return $this->messageParams;
    }
    /**
     * Set messageParams value
     * @param string $messageParams
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setMessageParams(?string $messageParams = null): self
    {
        // validation for constraint: string
        if (!is_null($messageParams) && !is_string($messageParams)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageParams, true), gettype($messageParams)), __LINE__);
        }
        $this->messageParams = $messageParams;
        
        return $this;
    }
    /**
     * Get notifyOnComplete value
     * @return bool|null
     */
    public function getNotifyOnComplete(): ?bool
    {
        return $this->notifyOnComplete;
    }
    /**
     * Set notifyOnComplete value
     * @param bool $notifyOnComplete
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setNotifyOnComplete(?bool $notifyOnComplete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notifyOnComplete) && !is_bool($notifyOnComplete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notifyOnComplete, true), gettype($notifyOnComplete)), __LINE__);
        }
        $this->notifyOnComplete = $notifyOnComplete;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
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
     * Get role value
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param string $role
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setRole(?string $role = null): self
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($role, true), gettype($role)), __LINE__);
        }
        $this->role = $role;
        
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        
        return $this;
    }
    /**
     * Get subject value
     * @return int|null
     */
    public function getSubject(): ?int
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param int $subject
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setSubject(?int $subject = null): self
    {
        // validation for constraint: int
        if (!is_null($subject) && !(is_int($subject) || ctype_digit($subject))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        
        return $this;
    }
    /**
     * Get taskId value
     * @return int|null
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }
    /**
     * Set taskId value
     * @param int $taskId
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setTaskId(?int $taskId = null): self
    {
        // validation for constraint: int
        if (!is_null($taskId) && !(is_int($taskId) || ctype_digit($taskId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taskId, true), gettype($taskId)), __LINE__);
        }
        $this->taskId = $taskId;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
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
     * Get timeLimit value
     * @return string|null
     */
    public function getTimeLimit(): ?string
    {
        return $this->timeLimit;
    }
    /**
     * Set timeLimit value
     * @param string $timeLimit
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setTimeLimit(?string $timeLimit = null): self
    {
        // validation for constraint: string
        if (!is_null($timeLimit) && !is_string($timeLimit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeLimit, true), gettype($timeLimit)), __LINE__);
        }
        $this->timeLimit = $timeLimit;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
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
     * Get workTimestamp value
     * @return string|null
     */
    public function getWorkTimestamp(): ?string
    {
        return $this->workTimestamp;
    }
    /**
     * Set workTimestamp value
     * @param string $workTimestamp
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setWorkTimestamp(?string $workTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($workTimestamp) && !is_string($workTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workTimestamp, true), gettype($workTimestamp)), __LINE__);
        }
        $this->workTimestamp = $workTimestamp;
        
        return $this;
    }
    /**
     * Get workingUser value
     * @return int|null
     */
    public function getWorkingUser(): ?int
    {
        return $this->workingUser;
    }
    /**
     * Set workingUser value
     * @param int $workingUser
     * @return \Pggns\MidocoApi\Workflow\StructType\EnlistmentDTO
     */
    public function setWorkingUser(?int $workingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($workingUser) && !(is_int($workingUser) || ctype_digit($workingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workingUser, true), gettype($workingUser)), __LINE__);
        }
        $this->workingUser = $workingUser;
        
        return $this;
    }
}
