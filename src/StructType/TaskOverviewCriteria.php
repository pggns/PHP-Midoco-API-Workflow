<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskOverviewCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskOverviewCriteria extends AbstractStructBase
{
    /**
     * The queueName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $queueName = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unitName = null;
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
     * Constructor method for TaskOverviewCriteria
     * @uses TaskOverviewCriteria::setQueueName()
     * @uses TaskOverviewCriteria::setUnitName()
     * @uses TaskOverviewCriteria::setDelegationUser()
     * @uses TaskOverviewCriteria::setTaskTypes()
     * @uses TaskOverviewCriteria::setPriorityFrom()
     * @uses TaskOverviewCriteria::setFromDate()
     * @uses TaskOverviewCriteria::setUntilDate()
     * @uses TaskOverviewCriteria::setDelegationFromDate()
     * @uses TaskOverviewCriteria::setDelegationToDate()
     * @uses TaskOverviewCriteria::setPriorityTo()
     * @uses TaskOverviewCriteria::setShowCreationUser()
     * @uses TaskOverviewCriteria::setAssignedQueue()
     * @param string[] $queueName
     * @param string[] $unitName
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
     */
    public function __construct(?array $queueName = null, ?array $unitName = null, ?array $delegationUser = null, ?array $taskTypes = null, ?int $priorityFrom = null, ?string $fromDate = null, ?string $untilDate = null, ?string $delegationFromDate = null, ?string $delegationToDate = null, ?int $priorityTo = null, ?bool $showCreationUser = null, ?string $assignedQueue = null)
    {
        $this
            ->setQueueName($queueName)
            ->setUnitName($unitName)
            ->setDelegationUser($delegationUser)
            ->setTaskTypes($taskTypes)
            ->setPriorityFrom($priorityFrom)
            ->setFromDate($fromDate)
            ->setUntilDate($untilDate)
            ->setDelegationFromDate($delegationFromDate)
            ->setDelegationToDate($delegationToDate)
            ->setPriorityTo($priorityTo)
            ->setShowCreationUser($showCreationUser)
            ->setAssignedQueue($assignedQueue);
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
        foreach ($values as $taskOverviewCriteriaQueueNameItem) {
            // validation for constraint: itemType
            if (!is_string($taskOverviewCriteriaQueueNameItem)) {
                $invalidValues[] = is_object($taskOverviewCriteriaQueueNameItem) ? get_class($taskOverviewCriteriaQueueNameItem) : sprintf('%s(%s)', gettype($taskOverviewCriteriaQueueNameItem), var_export($taskOverviewCriteriaQueueNameItem, true));
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * Get unitName value
     * @return string[]
     */
    public function getUnitName(): ?array
    {
        return $this->unitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintFromSetUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taskOverviewCriteriaUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($taskOverviewCriteriaUnitNameItem)) {
                $invalidValues[] = is_object($taskOverviewCriteriaUnitNameItem) ? get_class($taskOverviewCriteriaUnitNameItem) : sprintf('%s(%s)', gettype($taskOverviewCriteriaUnitNameItem), var_export($taskOverviewCriteriaUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
     */
    public function setUnitName(?array $unitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to unitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitName[] = $item;
        
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
        foreach ($values as $taskOverviewCriteriaDelegationUserItem) {
            // validation for constraint: itemType
            if (!(is_int($taskOverviewCriteriaDelegationUserItem) || ctype_digit($taskOverviewCriteriaDelegationUserItem))) {
                $invalidValues[] = is_object($taskOverviewCriteriaDelegationUserItem) ? get_class($taskOverviewCriteriaDelegationUserItem) : sprintf('%s(%s)', gettype($taskOverviewCriteriaDelegationUserItem), var_export($taskOverviewCriteriaDelegationUserItem, true));
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
        foreach ($values as $taskOverviewCriteriaTaskTypesItem) {
            // validation for constraint: itemType
            if (!is_string($taskOverviewCriteriaTaskTypesItem)) {
                $invalidValues[] = is_object($taskOverviewCriteriaTaskTypesItem) ? get_class($taskOverviewCriteriaTaskTypesItem) : sprintf('%s(%s)', gettype($taskOverviewCriteriaTaskTypesItem), var_export($taskOverviewCriteriaTaskTypesItem, true));
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
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
}
