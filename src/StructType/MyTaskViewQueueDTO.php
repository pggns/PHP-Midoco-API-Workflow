<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyTaskViewQueueDTO StructType
 * @subpackage Structs
 */
class MyTaskViewQueueDTO extends AbstractStructBase
{
    /**
     * The taskQueueName
     * @var string|null
     */
    protected ?string $taskQueueName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for MyTaskViewQueueDTO
     * @uses MyTaskViewQueueDTO::setTaskQueueName()
     * @uses MyTaskViewQueueDTO::setUserId()
     * @param string $taskQueueName
     * @param int $userId
     */
    public function __construct(?string $taskQueueName = null, ?int $userId = null)
    {
        $this
            ->setTaskQueueName($taskQueueName)
            ->setUserId($userId);
    }
    /**
     * Get taskQueueName value
     * @return string|null
     */
    public function getTaskQueueName(): ?string
    {
        return $this->taskQueueName;
    }
    /**
     * Set taskQueueName value
     * @param string $taskQueueName
     * @return \Pggns\MidocoApi\Workflow\StructType\MyTaskViewQueueDTO
     */
    public function setTaskQueueName(?string $taskQueueName = null): self
    {
        // validation for constraint: string
        if (!is_null($taskQueueName) && !is_string($taskQueueName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskQueueName, true), gettype($taskQueueName)), __LINE__);
        }
        $this->taskQueueName = $taskQueueName;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\MyTaskViewQueueDTO
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
