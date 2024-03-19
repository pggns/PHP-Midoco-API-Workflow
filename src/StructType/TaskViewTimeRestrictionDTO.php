<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskViewTimeRestrictionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskViewTimeRestrictionDTO extends AbstractStructBase
{
    /**
     * The taskViewName
     * @var string|null
     */
    protected ?string $taskViewName = null;
    /**
     * The timeEnd
     * @var string|null
     */
    protected ?string $timeEnd = null;
    /**
     * The timeRestrictionId
     * @var int|null
     */
    protected ?int $timeRestrictionId = null;
    /**
     * The timeStart
     * @var string|null
     */
    protected ?string $timeStart = null;
    /**
     * The weekdays
     * @var string|null
     */
    protected ?string $weekdays = null;
    /**
     * Constructor method for TaskViewTimeRestrictionDTO
     * @uses TaskViewTimeRestrictionDTO::setTaskViewName()
     * @uses TaskViewTimeRestrictionDTO::setTimeEnd()
     * @uses TaskViewTimeRestrictionDTO::setTimeRestrictionId()
     * @uses TaskViewTimeRestrictionDTO::setTimeStart()
     * @uses TaskViewTimeRestrictionDTO::setWeekdays()
     * @param string $taskViewName
     * @param string $timeEnd
     * @param int $timeRestrictionId
     * @param string $timeStart
     * @param string $weekdays
     */
    public function __construct(?string $taskViewName = null, ?string $timeEnd = null, ?int $timeRestrictionId = null, ?string $timeStart = null, ?string $weekdays = null)
    {
        $this
            ->setTaskViewName($taskViewName)
            ->setTimeEnd($timeEnd)
            ->setTimeRestrictionId($timeRestrictionId)
            ->setTimeStart($timeStart)
            ->setWeekdays($weekdays);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewTimeRestrictionDTO
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
     * Get timeEnd value
     * @return string|null
     */
    public function getTimeEnd(): ?string
    {
        return $this->timeEnd;
    }
    /**
     * Set timeEnd value
     * @param string $timeEnd
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewTimeRestrictionDTO
     */
    public function setTimeEnd(?string $timeEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($timeEnd) && !is_string($timeEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeEnd, true), gettype($timeEnd)), __LINE__);
        }
        $this->timeEnd = $timeEnd;
        
        return $this;
    }
    /**
     * Get timeRestrictionId value
     * @return int|null
     */
    public function getTimeRestrictionId(): ?int
    {
        return $this->timeRestrictionId;
    }
    /**
     * Set timeRestrictionId value
     * @param int $timeRestrictionId
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewTimeRestrictionDTO
     */
    public function setTimeRestrictionId(?int $timeRestrictionId = null): self
    {
        // validation for constraint: int
        if (!is_null($timeRestrictionId) && !(is_int($timeRestrictionId) || ctype_digit($timeRestrictionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeRestrictionId, true), gettype($timeRestrictionId)), __LINE__);
        }
        $this->timeRestrictionId = $timeRestrictionId;
        
        return $this;
    }
    /**
     * Get timeStart value
     * @return string|null
     */
    public function getTimeStart(): ?string
    {
        return $this->timeStart;
    }
    /**
     * Set timeStart value
     * @param string $timeStart
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewTimeRestrictionDTO
     */
    public function setTimeStart(?string $timeStart = null): self
    {
        // validation for constraint: string
        if (!is_null($timeStart) && !is_string($timeStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeStart, true), gettype($timeStart)), __LINE__);
        }
        $this->timeStart = $timeStart;
        
        return $this;
    }
    /**
     * Get weekdays value
     * @return string|null
     */
    public function getWeekdays(): ?string
    {
        return $this->weekdays;
    }
    /**
     * Set weekdays value
     * @param string $weekdays
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewTimeRestrictionDTO
     */
    public function setWeekdays(?string $weekdays = null): self
    {
        // validation for constraint: string
        if (!is_null($weekdays) && !is_string($weekdays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weekdays, true), gettype($weekdays)), __LINE__);
        }
        $this->weekdays = $weekdays;
        
        return $this;
    }
}
