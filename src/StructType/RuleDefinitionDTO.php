<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleDefinitionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RuleDefinitionDTO extends AbstractStructBase
{
    /**
     * The active
     * @var bool|null
     */
    protected ?bool $active = null;
    /**
     * The activeFrom
     * @var string|null
     */
    protected ?string $activeFrom = null;
    /**
     * The activeTo
     * @var string|null
     */
    protected ?string $activeTo = null;
    /**
     * The assignedQueue
     * @var string|null
     */
    protected ?string $assignedQueue = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The daysToLive
     * @var int|null
     */
    protected ?int $daysToLive = null;
    /**
     * The definitionId
     * @var int|null
     */
    protected ?int $definitionId = null;
    /**
     * The dueDateAttribute
     * @var string|null
     */
    protected ?string $dueDateAttribute = null;
    /**
     * The dueDateDays
     * @var int|null
     */
    protected ?int $dueDateDays = null;
    /**
     * The dueDateType
     * @var int|null
     */
    protected ?int $dueDateType = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * The orgunitFor
     * @var string|null
     */
    protected ?string $orgunitFor = null;
    /**
     * The role
     * @var int|null
     */
    protected ?int $role = null;
    /**
     * The taskCreationDays
     * @var int|null
     */
    protected ?int $taskCreationDays = null;
    /**
     * The taskDefinitionType
     * @var string|null
     */
    protected ?string $taskDefinitionType = null;
    /**
     * The taskText
     * @var string|null
     */
    protected ?string $taskText = null;
    /**
     * The taskType
     * @var int|null
     */
    protected ?int $taskType = null;
    /**
     * Constructor method for RuleDefinitionDTO
     * @uses RuleDefinitionDTO::setActive()
     * @uses RuleDefinitionDTO::setActiveFrom()
     * @uses RuleDefinitionDTO::setActiveTo()
     * @uses RuleDefinitionDTO::setAssignedQueue()
     * @uses RuleDefinitionDTO::setCreationDate()
     * @uses RuleDefinitionDTO::setCreationUser()
     * @uses RuleDefinitionDTO::setDaysToLive()
     * @uses RuleDefinitionDTO::setDefinitionId()
     * @uses RuleDefinitionDTO::setDueDateAttribute()
     * @uses RuleDefinitionDTO::setDueDateDays()
     * @uses RuleDefinitionDTO::setDueDateType()
     * @uses RuleDefinitionDTO::setModifyDate()
     * @uses RuleDefinitionDTO::setModifyUser()
     * @uses RuleDefinitionDTO::setOrgunit()
     * @uses RuleDefinitionDTO::setOrgunitFor()
     * @uses RuleDefinitionDTO::setRole()
     * @uses RuleDefinitionDTO::setTaskCreationDays()
     * @uses RuleDefinitionDTO::setTaskDefinitionType()
     * @uses RuleDefinitionDTO::setTaskText()
     * @uses RuleDefinitionDTO::setTaskType()
     * @param bool $active
     * @param string $activeFrom
     * @param string $activeTo
     * @param string $assignedQueue
     * @param string $creationDate
     * @param int $creationUser
     * @param int $daysToLive
     * @param int $definitionId
     * @param string $dueDateAttribute
     * @param int $dueDateDays
     * @param int $dueDateType
     * @param string $modifyDate
     * @param int $modifyUser
     * @param string $orgunit
     * @param string $orgunitFor
     * @param int $role
     * @param int $taskCreationDays
     * @param string $taskDefinitionType
     * @param string $taskText
     * @param int $taskType
     */
    public function __construct(?bool $active = null, ?string $activeFrom = null, ?string $activeTo = null, ?string $assignedQueue = null, ?string $creationDate = null, ?int $creationUser = null, ?int $daysToLive = null, ?int $definitionId = null, ?string $dueDateAttribute = null, ?int $dueDateDays = null, ?int $dueDateType = null, ?string $modifyDate = null, ?int $modifyUser = null, ?string $orgunit = null, ?string $orgunitFor = null, ?int $role = null, ?int $taskCreationDays = null, ?string $taskDefinitionType = null, ?string $taskText = null, ?int $taskType = null)
    {
        $this
            ->setActive($active)
            ->setActiveFrom($activeFrom)
            ->setActiveTo($activeTo)
            ->setAssignedQueue($assignedQueue)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDaysToLive($daysToLive)
            ->setDefinitionId($definitionId)
            ->setDueDateAttribute($dueDateAttribute)
            ->setDueDateDays($dueDateDays)
            ->setDueDateType($dueDateType)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setOrgunit($orgunit)
            ->setOrgunitFor($orgunitFor)
            ->setRole($role)
            ->setTaskCreationDays($taskCreationDays)
            ->setTaskDefinitionType($taskDefinitionType)
            ->setTaskText($taskText)
            ->setTaskType($taskType);
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setActive(?bool $active = null): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        
        return $this;
    }
    /**
     * Get activeFrom value
     * @return string|null
     */
    public function getActiveFrom(): ?string
    {
        return $this->activeFrom;
    }
    /**
     * Set activeFrom value
     * @param string $activeFrom
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setActiveFrom(?string $activeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($activeFrom) && !is_string($activeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activeFrom, true), gettype($activeFrom)), __LINE__);
        }
        $this->activeFrom = $activeFrom;
        
        return $this;
    }
    /**
     * Get activeTo value
     * @return string|null
     */
    public function getActiveTo(): ?string
    {
        return $this->activeTo;
    }
    /**
     * Set activeTo value
     * @param string $activeTo
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setActiveTo(?string $activeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($activeTo) && !is_string($activeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activeTo, true), gettype($activeTo)), __LINE__);
        }
        $this->activeTo = $activeTo;
        
        return $this;
    }
    /**
     * Get assignedQueue value
     * @return string|null
     */
    public function getAssignedQueue(): ?string
    {
        return $this->assignedQueue;
    }
    /**
     * Set assignedQueue value
     * @param string $assignedQueue
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setAssignedQueue(?string $assignedQueue = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedQueue) && !is_string($assignedQueue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedQueue, true), gettype($assignedQueue)), __LINE__);
        }
        $this->assignedQueue = $assignedQueue;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
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
     * Get definitionId value
     * @return int|null
     */
    public function getDefinitionId(): ?int
    {
        return $this->definitionId;
    }
    /**
     * Set definitionId value
     * @param int $definitionId
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setDefinitionId(?int $definitionId = null): self
    {
        // validation for constraint: int
        if (!is_null($definitionId) && !(is_int($definitionId) || ctype_digit($definitionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($definitionId, true), gettype($definitionId)), __LINE__);
        }
        $this->definitionId = $definitionId;
        
        return $this;
    }
    /**
     * Get dueDateAttribute value
     * @return string|null
     */
    public function getDueDateAttribute(): ?string
    {
        return $this->dueDateAttribute;
    }
    /**
     * Set dueDateAttribute value
     * @param string $dueDateAttribute
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setDueDateAttribute(?string $dueDateAttribute = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateAttribute) && !is_string($dueDateAttribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateAttribute, true), gettype($dueDateAttribute)), __LINE__);
        }
        $this->dueDateAttribute = $dueDateAttribute;
        
        return $this;
    }
    /**
     * Get dueDateDays value
     * @return int|null
     */
    public function getDueDateDays(): ?int
    {
        return $this->dueDateDays;
    }
    /**
     * Set dueDateDays value
     * @param int $dueDateDays
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setDueDateDays(?int $dueDateDays = null): self
    {
        // validation for constraint: int
        if (!is_null($dueDateDays) && !(is_int($dueDateDays) || ctype_digit($dueDateDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dueDateDays, true), gettype($dueDateDays)), __LINE__);
        }
        $this->dueDateDays = $dueDateDays;
        
        return $this;
    }
    /**
     * Get dueDateType value
     * @return int|null
     */
    public function getDueDateType(): ?int
    {
        return $this->dueDateType;
    }
    /**
     * Set dueDateType value
     * @param int $dueDateType
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setDueDateType(?int $dueDateType = null): self
    {
        // validation for constraint: int
        if (!is_null($dueDateType) && !(is_int($dueDateType) || ctype_digit($dueDateType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dueDateType, true), gettype($dueDateType)), __LINE__);
        }
        $this->dueDateType = $dueDateType;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
    /**
     * Get orgunitFor value
     * @return string|null
     */
    public function getOrgunitFor(): ?string
    {
        return $this->orgunitFor;
    }
    /**
     * Set orgunitFor value
     * @param string $orgunitFor
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setOrgunitFor(?string $orgunitFor = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunitFor) && !is_string($orgunitFor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunitFor, true), gettype($orgunitFor)), __LINE__);
        }
        $this->orgunitFor = $orgunitFor;
        
        return $this;
    }
    /**
     * Get role value
     * @return int|null
     */
    public function getRole(): ?int
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param int $role
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setRole(?int $role = null): self
    {
        // validation for constraint: int
        if (!is_null($role) && !(is_int($role) || ctype_digit($role))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($role, true), gettype($role)), __LINE__);
        }
        $this->role = $role;
        
        return $this;
    }
    /**
     * Get taskCreationDays value
     * @return int|null
     */
    public function getTaskCreationDays(): ?int
    {
        return $this->taskCreationDays;
    }
    /**
     * Set taskCreationDays value
     * @param int $taskCreationDays
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setTaskCreationDays(?int $taskCreationDays = null): self
    {
        // validation for constraint: int
        if (!is_null($taskCreationDays) && !(is_int($taskCreationDays) || ctype_digit($taskCreationDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taskCreationDays, true), gettype($taskCreationDays)), __LINE__);
        }
        $this->taskCreationDays = $taskCreationDays;
        
        return $this;
    }
    /**
     * Get taskDefinitionType value
     * @return string|null
     */
    public function getTaskDefinitionType(): ?string
    {
        return $this->taskDefinitionType;
    }
    /**
     * Set taskDefinitionType value
     * @param string $taskDefinitionType
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setTaskDefinitionType(?string $taskDefinitionType = null): self
    {
        // validation for constraint: string
        if (!is_null($taskDefinitionType) && !is_string($taskDefinitionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskDefinitionType, true), gettype($taskDefinitionType)), __LINE__);
        }
        $this->taskDefinitionType = $taskDefinitionType;
        
        return $this;
    }
    /**
     * Get taskText value
     * @return string|null
     */
    public function getTaskText(): ?string
    {
        return $this->taskText;
    }
    /**
     * Set taskText value
     * @param string $taskText
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setTaskText(?string $taskText = null): self
    {
        // validation for constraint: string
        if (!is_null($taskText) && !is_string($taskText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskText, true), gettype($taskText)), __LINE__);
        }
        $this->taskText = $taskText;
        
        return $this;
    }
    /**
     * Get taskType value
     * @return int|null
     */
    public function getTaskType(): ?int
    {
        return $this->taskType;
    }
    /**
     * Set taskType value
     * @param int $taskType
     * @return \Pggns\MidocoApi\Workflow\StructType\RuleDefinitionDTO
     */
    public function setTaskType(?int $taskType = null): self
    {
        // validation for constraint: int
        if (!is_null($taskType) && !(is_int($taskType) || ctype_digit($taskType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taskType, true), gettype($taskType)), __LINE__);
        }
        $this->taskType = $taskType;
        
        return $this;
    }
}
