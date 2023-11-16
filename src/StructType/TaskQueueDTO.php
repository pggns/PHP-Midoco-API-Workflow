<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskQueueDTO StructType
 * @subpackage Structs
 */
class TaskQueueDTO extends AbstractStructBase
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
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The isGlobal
     * @var bool|null
     */
    protected ?bool $isGlobal = null;
    /**
     * The taskQueueName
     * @var string|null
     */
    protected ?string $taskQueueName = null;
    /**
     * Constructor method for TaskQueueDTO
     * @uses TaskQueueDTO::setCreationTime()
     * @uses TaskQueueDTO::setCreationUnit()
     * @uses TaskQueueDTO::setCreationUser()
     * @uses TaskQueueDTO::setIsActive()
     * @uses TaskQueueDTO::setIsGlobal()
     * @uses TaskQueueDTO::setTaskQueueName()
     * @param string $creationTime
     * @param string $creationUnit
     * @param int $creationUser
     * @param bool $isActive
     * @param bool $isGlobal
     * @param string $taskQueueName
     */
    public function __construct(?string $creationTime = null, ?string $creationUnit = null, ?int $creationUser = null, ?bool $isActive = null, ?bool $isGlobal = null, ?string $taskQueueName = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setCreationUnit($creationUnit)
            ->setCreationUser($creationUser)
            ->setIsActive($isActive)
            ->setIsGlobal($isGlobal)
            ->setTaskQueueName($taskQueueName);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskQueueDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskQueueDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskQueueDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskQueueDTO
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
     * Get isGlobal value
     * @return bool|null
     */
    public function getIsGlobal(): ?bool
    {
        return $this->isGlobal;
    }
    /**
     * Set isGlobal value
     * @param bool $isGlobal
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskQueueDTO
     */
    public function setIsGlobal(?bool $isGlobal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGlobal) && !is_bool($isGlobal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGlobal, true), gettype($isGlobal)), __LINE__);
        }
        $this->isGlobal = $isGlobal;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskQueueDTO
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
}
