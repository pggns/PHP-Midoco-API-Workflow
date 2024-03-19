<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTaskRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTaskRequest extends AbstractStructBase
{
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The uservalue
     * @var string|null
     */
    protected ?string $uservalue = null;
    /**
     * The activity
     * @var string|null
     */
    protected ?string $activity = null;
    /**
     * The origin
     * @var int|null
     */
    protected ?int $origin = null;
    /**
     * Constructor method for DeleteTaskRequest
     * @uses DeleteTaskRequest::setTaskType()
     * @uses DeleteTaskRequest::setUservalue()
     * @uses DeleteTaskRequest::setActivity()
     * @uses DeleteTaskRequest::setOrigin()
     * @param string $taskType
     * @param string $uservalue
     * @param string $activity
     * @param int $origin
     */
    public function __construct(?string $taskType = null, ?string $uservalue = null, ?string $activity = null, ?int $origin = null)
    {
        $this
            ->setTaskType($taskType)
            ->setUservalue($uservalue)
            ->setActivity($activity)
            ->setOrigin($origin);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteTaskRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteTaskRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteTaskRequest
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
     * Get origin value
     * @return int|null
     */
    public function getOrigin(): ?int
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param int $origin
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteTaskRequest
     */
    public function setOrigin(?int $origin = null): self
    {
        // validation for constraint: int
        if (!is_null($origin) && !(is_int($origin) || ctype_digit($origin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        
        return $this;
    }
}
