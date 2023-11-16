<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveWorkingUserRequest StructType
 * @subpackage Structs
 */
class SaveWorkingUserRequest extends AbstractStructBase
{
    /**
     * The workingUser
     * @var int|null
     */
    protected ?int $workingUser = null;
    /**
     * The workingTimeStamp
     * @var string|null
     */
    protected ?string $workingTimeStamp = null;
    /**
     * The subjectId
     * @var int|null
     */
    protected ?int $subjectId = null;
    /**
     * The activity
     * @var string|null
     */
    protected ?string $activity = null;
    /**
     * The process
     * @var string|null
     */
    protected ?string $process = null;
    /**
     * Constructor method for SaveWorkingUserRequest
     * @uses SaveWorkingUserRequest::setWorkingUser()
     * @uses SaveWorkingUserRequest::setWorkingTimeStamp()
     * @uses SaveWorkingUserRequest::setSubjectId()
     * @uses SaveWorkingUserRequest::setActivity()
     * @uses SaveWorkingUserRequest::setProcess()
     * @param int $workingUser
     * @param string $workingTimeStamp
     * @param int $subjectId
     * @param string $activity
     * @param string $process
     */
    public function __construct(?int $workingUser = null, ?string $workingTimeStamp = null, ?int $subjectId = null, ?string $activity = null, ?string $process = null)
    {
        $this
            ->setWorkingUser($workingUser)
            ->setWorkingTimeStamp($workingTimeStamp)
            ->setSubjectId($subjectId)
            ->setActivity($activity)
            ->setProcess($process);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveWorkingUserRequest
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
    /**
     * Get workingTimeStamp value
     * @return string|null
     */
    public function getWorkingTimeStamp(): ?string
    {
        return $this->workingTimeStamp;
    }
    /**
     * Set workingTimeStamp value
     * @param string $workingTimeStamp
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveWorkingUserRequest
     */
    public function setWorkingTimeStamp(?string $workingTimeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($workingTimeStamp) && !is_string($workingTimeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingTimeStamp, true), gettype($workingTimeStamp)), __LINE__);
        }
        $this->workingTimeStamp = $workingTimeStamp;
        
        return $this;
    }
    /**
     * Get subjectId value
     * @return int|null
     */
    public function getSubjectId(): ?int
    {
        return $this->subjectId;
    }
    /**
     * Set subjectId value
     * @param int $subjectId
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveWorkingUserRequest
     */
    public function setSubjectId(?int $subjectId = null): self
    {
        // validation for constraint: int
        if (!is_null($subjectId) && !(is_int($subjectId) || ctype_digit($subjectId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subjectId, true), gettype($subjectId)), __LINE__);
        }
        $this->subjectId = $subjectId;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveWorkingUserRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveWorkingUserRequest
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
}
