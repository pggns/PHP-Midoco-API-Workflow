<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskViewUserDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskViewUserDTO extends AbstractStructBase
{
    /**
     * The taskViewName
     * @var string|null
     */
    protected ?string $taskViewName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for TaskViewUserDTO
     * @uses TaskViewUserDTO::setTaskViewName()
     * @uses TaskViewUserDTO::setUserId()
     * @param string $taskViewName
     * @param int $userId
     */
    public function __construct(?string $taskViewName = null, ?int $userId = null)
    {
        $this
            ->setTaskViewName($taskViewName)
            ->setUserId($userId);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewUserDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewUserDTO
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
