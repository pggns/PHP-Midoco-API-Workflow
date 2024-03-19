<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArchiveDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ArchiveDTO extends AbstractStructBase
{
    /**
     * The activity
     * @var string|null
     */
    protected ?string $activity = null;
    /**
     * The daysToLive
     * @var int|null
     */
    protected ?int $daysToLive = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The message
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The process
     * @var string|null
     */
    protected ?string $process = null;
    /**
     * The success
     * @var bool|null
     */
    protected ?bool $success = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The uservalue
     * @var string|null
     */
    protected ?string $uservalue = null;
    /**
     * Constructor method for ArchiveDTO
     * @uses ArchiveDTO::setActivity()
     * @uses ArchiveDTO::setDaysToLive()
     * @uses ArchiveDTO::setId()
     * @uses ArchiveDTO::setMessage()
     * @uses ArchiveDTO::setProcess()
     * @uses ArchiveDTO::setSuccess()
     * @uses ArchiveDTO::setTimestamp()
     * @uses ArchiveDTO::setType()
     * @uses ArchiveDTO::setUnitName()
     * @uses ArchiveDTO::setUserId()
     * @uses ArchiveDTO::setUservalue()
     * @param string $activity
     * @param int $daysToLive
     * @param int $id
     * @param string $message
     * @param string $process
     * @param bool $success
     * @param string $timestamp
     * @param string $type
     * @param string $unitName
     * @param int $userId
     * @param string $uservalue
     */
    public function __construct(?string $activity = null, ?int $daysToLive = null, ?int $id = null, ?string $message = null, ?string $process = null, ?bool $success = null, ?string $timestamp = null, ?string $type = null, ?string $unitName = null, ?int $userId = null, ?string $uservalue = null)
    {
        $this
            ->setActivity($activity)
            ->setDaysToLive($daysToLive)
            ->setId($id)
            ->setMessage($message)
            ->setProcess($process)
            ->setSuccess($success)
            ->setTimestamp($timestamp)
            ->setType($type)
            ->setUnitName($unitName)
            ->setUserId($userId)
            ->setUservalue($uservalue);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
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
     * Get daysToLive value
     * @return int|null
     */
    public function getDaysToLive(): ?int
    {
        return $this->daysToLive;
    }
    /**
     * Set daysToLive value
     * @param int $daysToLive
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
     */
    public function setDaysToLive(?int $daysToLive = null): self
    {
        // validation for constraint: int
        if (!is_null($daysToLive) && !(is_int($daysToLive) || ctype_digit($daysToLive))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysToLive, true), gettype($daysToLive)), __LINE__);
        }
        $this->daysToLive = $daysToLive;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
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
     * Get success value
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param bool $success
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
     */
    public function setSuccess(?bool $success = null): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
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
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
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
     * Get uservalue value
     * @return string|null
     */
    public function getUservalue(): ?string
    {
        return $this->uservalue;
    }
    /**
     * Set uservalue value
     * @param string $uservalue
     * @return \Pggns\MidocoApi\Workflow\StructType\ArchiveDTO
     */
    public function setUservalue(?string $uservalue = null): self
    {
        // validation for constraint: string
        if (!is_null($uservalue) && !is_string($uservalue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uservalue, true), gettype($uservalue)), __LINE__);
        }
        $this->uservalue = $uservalue;
        
        return $this;
    }
}
