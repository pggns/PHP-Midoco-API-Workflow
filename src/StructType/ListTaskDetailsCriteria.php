<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTaskDetailsCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListTaskDetailsCriteria extends AbstractStructBase
{
    /**
     * The UnitCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: UnitCriteria
     * @var \Pggns\MidocoApi\Workflow\StructType\UnitCriteria[]
     */
    protected ?array $UnitCriteria = null;
    /**
     * The queueName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $queueName = null;
    /**
     * The ownerOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $ownerOrgunit = null;
    /**
     * The delegationUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $delegationUser = null;
    /**
     * The taskTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $taskTypes = null;
    /**
     * The priorityFrom
     * @var int|null
     */
    protected ?int $priorityFrom = null;
    /**
     * The fromDate
     * @var string|null
     */
    protected ?string $fromDate = null;
    /**
     * The untilDate
     * @var string|null
     */
    protected ?string $untilDate = null;
    /**
     * The delegationFromDate
     * @var string|null
     */
    protected ?string $delegationFromDate = null;
    /**
     * The delegationToDate
     * @var string|null
     */
    protected ?string $delegationToDate = null;
    /**
     * The priorityTo
     * @var int|null
     */
    protected ?int $priorityTo = null;
    /**
     * The showCreationUser
     * @var bool|null
     */
    protected ?bool $showCreationUser = null;
    /**
     * The assignedQueue
     * @var string|null
     */
    protected ?string $assignedQueue = null;
    /**
     * The includeEmptyDueDate
     * @var bool|null
     */
    protected ?bool $includeEmptyDueDate = null;
    /**
     * Constructor method for ListTaskDetailsCriteria
     * @uses ListTaskDetailsCriteria::setUnitCriteria()
     * @uses ListTaskDetailsCriteria::setQueueName()
     * @uses ListTaskDetailsCriteria::setOwnerOrgunit()
     * @uses ListTaskDetailsCriteria::setDelegationUser()
     * @uses ListTaskDetailsCriteria::setTaskTypes()
     * @uses ListTaskDetailsCriteria::setPriorityFrom()
     * @uses ListTaskDetailsCriteria::setFromDate()
     * @uses ListTaskDetailsCriteria::setUntilDate()
     * @uses ListTaskDetailsCriteria::setDelegationFromDate()
     * @uses ListTaskDetailsCriteria::setDelegationToDate()
     * @uses ListTaskDetailsCriteria::setPriorityTo()
     * @uses ListTaskDetailsCriteria::setShowCreationUser()
     * @uses ListTaskDetailsCriteria::setAssignedQueue()
     * @uses ListTaskDetailsCriteria::setIncludeEmptyDueDate()
     * @param \Pggns\MidocoApi\Workflow\StructType\UnitCriteria[] $unitCriteria
     * @param string[] $queueName
     * @param string[] $ownerOrgunit
     * @param int[] $delegationUser
     * @param string[] $taskTypes
     * @param int $priorityFrom
     * @param string $fromDate
     * @param string $untilDate
     * @param string $delegationFromDate
     * @param string $delegationToDate
     * @param int $priorityTo
     * @param bool $showCreationUser
     * @param string $assignedQueue
     * @param bool $includeEmptyDueDate
     */
    public function __construct(?array $unitCriteria = null, ?array $queueName = null, ?array $ownerOrgunit = null, ?array $delegationUser = null, ?array $taskTypes = null, ?int $priorityFrom = null, ?string $fromDate = null, ?string $untilDate = null, ?string $delegationFromDate = null, ?string $delegationToDate = null, ?int $priorityTo = null, ?bool $showCreationUser = null, ?string $assignedQueue = null, ?bool $includeEmptyDueDate = null)
    {
        $this
            ->setUnitCriteria($unitCriteria)
            ->setQueueName($queueName)
            ->setOwnerOrgunit($ownerOrgunit)
            ->setDelegationUser($delegationUser)
            ->setTaskTypes($taskTypes)
            ->setPriorityFrom($priorityFrom)
            ->setFromDate($fromDate)
            ->setUntilDate($untilDate)
            ->setDelegationFromDate($delegationFromDate)
            ->setDelegationToDate($delegationToDate)
            ->setPriorityTo($priorityTo)
            ->setShowCreationUser($showCreationUser)
            ->setAssignedQueue($assignedQueue)
            ->setIncludeEmptyDueDate($includeEmptyDueDate);
    }
    /**
     * Get UnitCriteria value
     * @return \Pggns\MidocoApi\Workflow\StructType\UnitCriteria[]
     */
    public function getUnitCriteria(): ?array
    {
        return $this->UnitCriteria;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitCriteria method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitCriteriaForArrayConstraintFromSetUnitCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTaskDetailsCriteriaUnitCriteriaItem) {
            // validation for constraint: itemType
            if (!$listTaskDetailsCriteriaUnitCriteriaItem instanceof \Pggns\MidocoApi\Workflow\StructType\UnitCriteria) {
                $invalidValues[] = is_object($listTaskDetailsCriteriaUnitCriteriaItem) ? get_class($listTaskDetailsCriteriaUnitCriteriaItem) : sprintf('%s(%s)', gettype($listTaskDetailsCriteriaUnitCriteriaItem), var_export($listTaskDetailsCriteriaUnitCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitCriteria property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\UnitCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnitCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\UnitCriteria[] $unitCriteria
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setUnitCriteria(?array $unitCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitCriteriaArrayErrorMessage = self::validateUnitCriteriaForArrayConstraintFromSetUnitCriteria($unitCriteria))) {
            throw new InvalidArgumentException($unitCriteriaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($unitCriteria) && count($unitCriteria) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($unitCriteria)), __LINE__);
        }
        $this->UnitCriteria = $unitCriteria;
        
        return $this;
    }
    /**
     * Add item to UnitCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\UnitCriteria $item
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function addToUnitCriteria(\Pggns\MidocoApi\Workflow\StructType\UnitCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\UnitCriteria) {
            throw new InvalidArgumentException(sprintf('The UnitCriteria property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\UnitCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->UnitCriteria) && count($this->UnitCriteria) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->UnitCriteria)), __LINE__);
        }
        $this->UnitCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get queueName value
     * @return string[]
     */
    public function getQueueName(): ?array
    {
        return $this->queueName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setQueueName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQueueName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQueueNameForArrayConstraintFromSetQueueName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTaskDetailsCriteriaQueueNameItem) {
            // validation for constraint: itemType
            if (!is_string($listTaskDetailsCriteriaQueueNameItem)) {
                $invalidValues[] = is_object($listTaskDetailsCriteriaQueueNameItem) ? get_class($listTaskDetailsCriteriaQueueNameItem) : sprintf('%s(%s)', gettype($listTaskDetailsCriteriaQueueNameItem), var_export($listTaskDetailsCriteriaQueueNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The queueName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set queueName value
     * @throws InvalidArgumentException
     * @param string[] $queueName
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setQueueName(?array $queueName = null): self
    {
        // validation for constraint: array
        if ('' !== ($queueNameArrayErrorMessage = self::validateQueueNameForArrayConstraintFromSetQueueName($queueName))) {
            throw new InvalidArgumentException($queueNameArrayErrorMessage, __LINE__);
        }
        $this->queueName = $queueName;
        
        return $this;
    }
    /**
     * Add item to queueName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function addToQueueName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The queueName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->queueName[] = $item;
        
        return $this;
    }
    /**
     * Get ownerOrgunit value
     * @return string[]
     */
    public function getOwnerOrgunit(): ?array
    {
        return $this->ownerOrgunit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOwnerOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOwnerOrgunit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOwnerOrgunitForArrayConstraintFromSetOwnerOrgunit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTaskDetailsCriteriaOwnerOrgunitItem) {
            // validation for constraint: itemType
            if (!is_string($listTaskDetailsCriteriaOwnerOrgunitItem)) {
                $invalidValues[] = is_object($listTaskDetailsCriteriaOwnerOrgunitItem) ? get_class($listTaskDetailsCriteriaOwnerOrgunitItem) : sprintf('%s(%s)', gettype($listTaskDetailsCriteriaOwnerOrgunitItem), var_export($listTaskDetailsCriteriaOwnerOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ownerOrgunit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ownerOrgunit value
     * @throws InvalidArgumentException
     * @param string[] $ownerOrgunit
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setOwnerOrgunit(?array $ownerOrgunit = null): self
    {
        // validation for constraint: array
        if ('' !== ($ownerOrgunitArrayErrorMessage = self::validateOwnerOrgunitForArrayConstraintFromSetOwnerOrgunit($ownerOrgunit))) {
            throw new InvalidArgumentException($ownerOrgunitArrayErrorMessage, __LINE__);
        }
        $this->ownerOrgunit = $ownerOrgunit;
        
        return $this;
    }
    /**
     * Add item to ownerOrgunit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function addToOwnerOrgunit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ownerOrgunit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ownerOrgunit[] = $item;
        
        return $this;
    }
    /**
     * Get delegationUser value
     * @return int[]
     */
    public function getDelegationUser(): ?array
    {
        return $this->delegationUser;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDelegationUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDelegationUser method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDelegationUserForArrayConstraintFromSetDelegationUser(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTaskDetailsCriteriaDelegationUserItem) {
            // validation for constraint: itemType
            if (!(is_int($listTaskDetailsCriteriaDelegationUserItem) || ctype_digit($listTaskDetailsCriteriaDelegationUserItem))) {
                $invalidValues[] = is_object($listTaskDetailsCriteriaDelegationUserItem) ? get_class($listTaskDetailsCriteriaDelegationUserItem) : sprintf('%s(%s)', gettype($listTaskDetailsCriteriaDelegationUserItem), var_export($listTaskDetailsCriteriaDelegationUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The delegationUser property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set delegationUser value
     * @throws InvalidArgumentException
     * @param int[] $delegationUser
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setDelegationUser(?array $delegationUser = null): self
    {
        // validation for constraint: array
        if ('' !== ($delegationUserArrayErrorMessage = self::validateDelegationUserForArrayConstraintFromSetDelegationUser($delegationUser))) {
            throw new InvalidArgumentException($delegationUserArrayErrorMessage, __LINE__);
        }
        $this->delegationUser = $delegationUser;
        
        return $this;
    }
    /**
     * Add item to delegationUser value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function addToDelegationUser(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The delegationUser property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->delegationUser[] = $item;
        
        return $this;
    }
    /**
     * Get taskTypes value
     * @return string[]
     */
    public function getTaskTypes(): ?array
    {
        return $this->taskTypes;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTaskTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaskTypes method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskTypesForArrayConstraintFromSetTaskTypes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTaskDetailsCriteriaTaskTypesItem) {
            // validation for constraint: itemType
            if (!is_string($listTaskDetailsCriteriaTaskTypesItem)) {
                $invalidValues[] = is_object($listTaskDetailsCriteriaTaskTypesItem) ? get_class($listTaskDetailsCriteriaTaskTypesItem) : sprintf('%s(%s)', gettype($listTaskDetailsCriteriaTaskTypesItem), var_export($listTaskDetailsCriteriaTaskTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The taskTypes property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set taskTypes value
     * @throws InvalidArgumentException
     * @param string[] $taskTypes
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setTaskTypes(?array $taskTypes = null): self
    {
        // validation for constraint: array
        if ('' !== ($taskTypesArrayErrorMessage = self::validateTaskTypesForArrayConstraintFromSetTaskTypes($taskTypes))) {
            throw new InvalidArgumentException($taskTypesArrayErrorMessage, __LINE__);
        }
        $this->taskTypes = $taskTypes;
        
        return $this;
    }
    /**
     * Add item to taskTypes value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function addToTaskTypes(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The taskTypes property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->taskTypes[] = $item;
        
        return $this;
    }
    /**
     * Get priorityFrom value
     * @return int|null
     */
    public function getPriorityFrom(): ?int
    {
        return $this->priorityFrom;
    }
    /**
     * Set priorityFrom value
     * @param int $priorityFrom
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setPriorityFrom(?int $priorityFrom = null): self
    {
        // validation for constraint: int
        if (!is_null($priorityFrom) && !(is_int($priorityFrom) || ctype_digit($priorityFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priorityFrom, true), gettype($priorityFrom)), __LINE__);
        }
        $this->priorityFrom = $priorityFrom;
        
        return $this;
    }
    /**
     * Get fromDate value
     * @return string|null
     */
    public function getFromDate(): ?string
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param string $fromDate
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setFromDate(?string $fromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        $this->fromDate = $fromDate;
        
        return $this;
    }
    /**
     * Get untilDate value
     * @return string|null
     */
    public function getUntilDate(): ?string
    {
        return $this->untilDate;
    }
    /**
     * Set untilDate value
     * @param string $untilDate
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setUntilDate(?string $untilDate = null): self
    {
        // validation for constraint: string
        if (!is_null($untilDate) && !is_string($untilDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($untilDate, true), gettype($untilDate)), __LINE__);
        }
        $this->untilDate = $untilDate;
        
        return $this;
    }
    /**
     * Get delegationFromDate value
     * @return string|null
     */
    public function getDelegationFromDate(): ?string
    {
        return $this->delegationFromDate;
    }
    /**
     * Set delegationFromDate value
     * @param string $delegationFromDate
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setDelegationFromDate(?string $delegationFromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationFromDate) && !is_string($delegationFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationFromDate, true), gettype($delegationFromDate)), __LINE__);
        }
        $this->delegationFromDate = $delegationFromDate;
        
        return $this;
    }
    /**
     * Get delegationToDate value
     * @return string|null
     */
    public function getDelegationToDate(): ?string
    {
        return $this->delegationToDate;
    }
    /**
     * Set delegationToDate value
     * @param string $delegationToDate
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setDelegationToDate(?string $delegationToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationToDate) && !is_string($delegationToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationToDate, true), gettype($delegationToDate)), __LINE__);
        }
        $this->delegationToDate = $delegationToDate;
        
        return $this;
    }
    /**
     * Get priorityTo value
     * @return int|null
     */
    public function getPriorityTo(): ?int
    {
        return $this->priorityTo;
    }
    /**
     * Set priorityTo value
     * @param int $priorityTo
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setPriorityTo(?int $priorityTo = null): self
    {
        // validation for constraint: int
        if (!is_null($priorityTo) && !(is_int($priorityTo) || ctype_digit($priorityTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priorityTo, true), gettype($priorityTo)), __LINE__);
        }
        $this->priorityTo = $priorityTo;
        
        return $this;
    }
    /**
     * Get showCreationUser value
     * @return bool|null
     */
    public function getShowCreationUser(): ?bool
    {
        return $this->showCreationUser;
    }
    /**
     * Set showCreationUser value
     * @param bool $showCreationUser
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setShowCreationUser(?bool $showCreationUser = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showCreationUser) && !is_bool($showCreationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showCreationUser, true), gettype($showCreationUser)), __LINE__);
        }
        $this->showCreationUser = $showCreationUser;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
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
     * Get includeEmptyDueDate value
     * @return bool|null
     */
    public function getIncludeEmptyDueDate(): ?bool
    {
        return $this->includeEmptyDueDate;
    }
    /**
     * Set includeEmptyDueDate value
     * @param bool $includeEmptyDueDate
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
     */
    public function setIncludeEmptyDueDate(?bool $includeEmptyDueDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeEmptyDueDate) && !is_bool($includeEmptyDueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeEmptyDueDate, true), gettype($includeEmptyDueDate)), __LINE__);
        }
        $this->includeEmptyDueDate = $includeEmptyDueDate;
        
        return $this;
    }
}
