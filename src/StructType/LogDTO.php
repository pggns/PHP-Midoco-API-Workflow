<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogDTO StructType
 * @subpackage Structs
 */
class LogDTO extends AbstractStructBase
{
    /**
     * The activity
     * @var string|null
     */
    protected ?string $activity = null;
    /**
     * The logId
     * @var int|null
     */
    protected ?int $logId = null;
    /**
     * The message
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The subject
     * @var int|null
     */
    protected ?int $subject = null;
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
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for LogDTO
     * @uses LogDTO::setActivity()
     * @uses LogDTO::setLogId()
     * @uses LogDTO::setMessage()
     * @uses LogDTO::setSubject()
     * @uses LogDTO::setSuccess()
     * @uses LogDTO::setTimestamp()
     * @uses LogDTO::setUserId()
     * @param string $activity
     * @param int $logId
     * @param string $message
     * @param int $subject
     * @param bool $success
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?string $activity = null, ?int $logId = null, ?string $message = null, ?int $subject = null, ?bool $success = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setActivity($activity)
            ->setLogId($logId)
            ->setMessage($message)
            ->setSubject($subject)
            ->setSuccess($success)
            ->setTimestamp($timestamp)
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
     * @return \Pggns\MidocoApi\Workflow\StructType\LogDTO
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
     * Get logId value
     * @return int|null
     */
    public function getLogId(): ?int
    {
        return $this->logId;
    }
    /**
     * Set logId value
     * @param int $logId
     * @return \Pggns\MidocoApi\Workflow\StructType\LogDTO
     */
    public function setLogId(?int $logId = null): self
    {
        // validation for constraint: int
        if (!is_null($logId) && !(is_int($logId) || ctype_digit($logId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($logId, true), gettype($logId)), __LINE__);
        }
        $this->logId = $logId;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\LogDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\LogDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\LogDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\LogDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\LogDTO
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
