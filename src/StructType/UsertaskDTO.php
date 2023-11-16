<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsertaskDTO StructType
 * @subpackage Structs
 */
class UsertaskDTO extends AbstractStructBase
{
    /**
     * The done
     * @var bool|null
     */
    protected ?bool $done = null;
    /**
     * The task
     * @var string|null
     */
    protected ?string $task = null;
    /**
     * The taskId
     * @var int|null
     */
    protected ?int $taskId = null;
    /**
     * Constructor method for UsertaskDTO
     * @uses UsertaskDTO::setDone()
     * @uses UsertaskDTO::setTask()
     * @uses UsertaskDTO::setTaskId()
     * @param bool $done
     * @param string $task
     * @param int $taskId
     */
    public function __construct(?bool $done = null, ?string $task = null, ?int $taskId = null)
    {
        $this
            ->setDone($done)
            ->setTask($task)
            ->setTaskId($taskId);
    }
    /**
     * Get done value
     * @return bool|null
     */
    public function getDone(): ?bool
    {
        return $this->done;
    }
    /**
     * Set done value
     * @param bool $done
     * @return \Pggns\MidocoApi\Workflow\StructType\UsertaskDTO
     */
    public function setDone(?bool $done = null): self
    {
        // validation for constraint: boolean
        if (!is_null($done) && !is_bool($done)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($done, true), gettype($done)), __LINE__);
        }
        $this->done = $done;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Workflow\StructType\UsertaskDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\UsertaskDTO
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
}
