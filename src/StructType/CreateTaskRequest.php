<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateTaskRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateTaskRequest extends AbstractStructBase
{
    /**
     * The task
     * @var string|null
     */
    protected ?string $task = null;
    /**
     * The delegated_queue
     * @var string|null
     */
    protected ?string $delegated_queue = null;
    /**
     * The due_date
     * @var string|null
     */
    protected ?string $due_date = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for CreateTaskRequest
     * @uses CreateTaskRequest::setTask()
     * @uses CreateTaskRequest::setDelegated_queue()
     * @uses CreateTaskRequest::setDue_date()
     * @uses CreateTaskRequest::setTaskType()
     * @uses CreateTaskRequest::setComment()
     * @uses CreateTaskRequest::setPriority()
     * @uses CreateTaskRequest::setUserId()
     * @param string $task
     * @param string $delegated_queue
     * @param string $due_date
     * @param string $taskType
     * @param string $comment
     * @param int $priority
     * @param int $userId
     */
    public function __construct(?string $task = null, ?string $delegated_queue = null, ?string $due_date = null, ?string $taskType = null, ?string $comment = null, ?int $priority = null, ?int $userId = null)
    {
        $this
            ->setTask($task)
            ->setDelegated_queue($delegated_queue)
            ->setDue_date($due_date)
            ->setTaskType($taskType)
            ->setComment($comment)
            ->setPriority($priority)
            ->setUserId($userId);
    }
    /**
     * Get task value
     * @return string|null
     */
    public function getTask(): ?string
    {
        return $this->task;
    }
    /**
     * Set task value
     * @param string $task
     * @return \Pggns\MidocoApi\Workflow\StructType\CreateTaskRequest
     */
    public function setTask(?string $task = null): self
    {
        // validation for constraint: string
        if (!is_null($task) && !is_string($task)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($task, true), gettype($task)), __LINE__);
        }
        $this->task = $task;
        
        return $this;
    }
    /**
     * Get delegated_queue value
     * @return string|null
     */
    public function getDelegated_queue(): ?string
    {
        return $this->delegated_queue;
    }
    /**
     * Set delegated_queue value
     * @param string $delegated_queue
     * @return \Pggns\MidocoApi\Workflow\StructType\CreateTaskRequest
     */
    public function setDelegated_queue(?string $delegated_queue = null): self
    {
        // validation for constraint: string
        if (!is_null($delegated_queue) && !is_string($delegated_queue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegated_queue, true), gettype($delegated_queue)), __LINE__);
        }
        $this->delegated_queue = $delegated_queue;
        
        return $this;
    }
    /**
     * Get due_date value
     * @return string|null
     */
    public function getDue_date(): ?string
    {
        return $this->due_date;
    }
    /**
     * Set due_date value
     * @param string $due_date
     * @return \Pggns\MidocoApi\Workflow\StructType\CreateTaskRequest
     */
    public function setDue_date(?string $due_date = null): self
    {
        // validation for constraint: string
        if (!is_null($due_date) && !is_string($due_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($due_date, true), gettype($due_date)), __LINE__);
        }
        $this->due_date = $due_date;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\CreateTaskRequest
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
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Workflow\StructType\CreateTaskRequest
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\CreateTaskRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\CreateTaskRequest
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
