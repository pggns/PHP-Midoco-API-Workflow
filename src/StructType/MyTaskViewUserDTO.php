<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyTaskViewUserDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MyTaskViewUserDTO extends AbstractStructBase
{
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
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
     * Constructor method for MyTaskViewUserDTO
     * @uses MyTaskViewUserDTO::setPositionNo()
     * @uses MyTaskViewUserDTO::setTaskViewName()
     * @uses MyTaskViewUserDTO::setUserId()
     * @param int $positionNo
     * @param string $taskViewName
     * @param int $userId
     */
    public function __construct(?int $positionNo = null, ?string $taskViewName = null, ?int $userId = null)
    {
        $this
            ->setPositionNo($positionNo)
            ->setTaskViewName($taskViewName)
            ->setUserId($userId);
    }
    /**
     * Get positionNo value
     * @return int|null
     */
    public function getPositionNo(): ?int
    {
        return $this->positionNo;
    }
    /**
     * Set positionNo value
     * @param int $positionNo
     * @return \Pggns\MidocoApi\Workflow\StructType\MyTaskViewUserDTO
     */
    public function setPositionNo(?int $positionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNo) && !(is_int($positionNo) || ctype_digit($positionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNo, true), gettype($positionNo)), __LINE__);
        }
        $this->positionNo = $positionNo;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\MyTaskViewUserDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\MyTaskViewUserDTO
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
