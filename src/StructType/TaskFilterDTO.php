<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskFilterDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskFilterDTO extends AbstractStructBase
{
    /**
     * The fromDueDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $fromDueDate;
    /**
     * The taskViewName
     * @var string|null
     */
    protected ?string $taskViewName = null;
    /**
     * The userIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $userIds = null;
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The queues
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $queues = null;
    /**
     * The taskTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $taskTypes = null;
    /**
     * The toDueDate
     * @var string|null
     */
    protected ?string $toDueDate = null;
    /**
     * The fromDelegationDate
     * @var string|null
     */
    protected ?string $fromDelegationDate = null;
    /**
     * The toDelegationDate
     * @var string|null
     */
    protected ?string $toDelegationDate = null;
    /**
     * The fromPriority
     * @var string|null
     */
    protected ?string $fromPriority = null;
    /**
     * The toPriority
     * @var string|null
     */
    protected ?string $toPriority = null;
    /**
     * The MidocoTaskViewColumns
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskViewColumns
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns[]
     */
    protected ?array $MidocoTaskViewColumns = null;
    /**
     * Constructor method for TaskFilterDTO
     * @uses TaskFilterDTO::setFromDueDate()
     * @uses TaskFilterDTO::setTaskViewName()
     * @uses TaskFilterDTO::setUserIds()
     * @uses TaskFilterDTO::setOrgUnits()
     * @uses TaskFilterDTO::setQueues()
     * @uses TaskFilterDTO::setTaskTypes()
     * @uses TaskFilterDTO::setToDueDate()
     * @uses TaskFilterDTO::setFromDelegationDate()
     * @uses TaskFilterDTO::setToDelegationDate()
     * @uses TaskFilterDTO::setFromPriority()
     * @uses TaskFilterDTO::setToPriority()
     * @uses TaskFilterDTO::setMidocoTaskViewColumns()
     * @param string $fromDueDate
     * @param string $taskViewName
     * @param int[] $userIds
     * @param string[] $orgUnits
     * @param string[] $queues
     * @param string[] $taskTypes
     * @param string $toDueDate
     * @param string $fromDelegationDate
     * @param string $toDelegationDate
     * @param string $fromPriority
     * @param string $toPriority
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns[] $midocoTaskViewColumns
     */
    public function __construct(string $fromDueDate, ?string $taskViewName = null, ?array $userIds = null, ?array $orgUnits = null, ?array $queues = null, ?array $taskTypes = null, ?string $toDueDate = null, ?string $fromDelegationDate = null, ?string $toDelegationDate = null, ?string $fromPriority = null, ?string $toPriority = null, ?array $midocoTaskViewColumns = null)
    {
        $this
            ->setFromDueDate($fromDueDate)
            ->setTaskViewName($taskViewName)
            ->setUserIds($userIds)
            ->setOrgUnits($orgUnits)
            ->setQueues($queues)
            ->setTaskTypes($taskTypes)
            ->setToDueDate($toDueDate)
            ->setFromDelegationDate($fromDelegationDate)
            ->setToDelegationDate($toDelegationDate)
            ->setFromPriority($fromPriority)
            ->setToPriority($toPriority)
            ->setMidocoTaskViewColumns($midocoTaskViewColumns);
    }
    /**
     * Get fromDueDate value
     * @return string
     */
    public function getFromDueDate(): string
    {
        return $this->fromDueDate;
    }
    /**
     * Set fromDueDate value
     * @param string $fromDueDate
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function setFromDueDate(string $fromDueDate): self
    {
        // validation for constraint: string
        if (!is_null($fromDueDate) && !is_string($fromDueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDueDate, true), gettype($fromDueDate)), __LINE__);
        }
        $this->fromDueDate = $fromDueDate;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
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
     * Get userIds value
     * @return int[]
     */
    public function getUserIds(): ?array
    {
        return $this->userIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUserIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserIdsForArrayConstraintFromSetUserIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taskFilterDTOUserIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($taskFilterDTOUserIdsItem) || ctype_digit($taskFilterDTOUserIdsItem))) {
                $invalidValues[] = is_object($taskFilterDTOUserIdsItem) ? get_class($taskFilterDTOUserIdsItem) : sprintf('%s(%s)', gettype($taskFilterDTOUserIdsItem), var_export($taskFilterDTOUserIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The userIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set userIds value
     * @throws InvalidArgumentException
     * @param int[] $userIds
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function setUserIds(?array $userIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($userIdsArrayErrorMessage = self::validateUserIdsForArrayConstraintFromSetUserIds($userIds))) {
            throw new InvalidArgumentException($userIdsArrayErrorMessage, __LINE__);
        }
        $this->userIds = $userIds;
        
        return $this;
    }
    /**
     * Add item to userIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function addToUserIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The userIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->userIds[] = $item;
        
        return $this;
    }
    /**
     * Get orgUnits value
     * @return string[]
     */
    public function getOrgUnits(): ?array
    {
        return $this->orgUnits;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taskFilterDTOOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($taskFilterDTOOrgUnitsItem)) {
                $invalidValues[] = is_object($taskFilterDTOOrgUnitsItem) ? get_class($taskFilterDTOOrgUnitsItem) : sprintf('%s(%s)', gettype($taskFilterDTOOrgUnitsItem), var_export($taskFilterDTOOrgUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnits value
     * @throws InvalidArgumentException
     * @param string[] $orgUnits
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function addToOrgUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnits[] = $item;
        
        return $this;
    }
    /**
     * Get queues value
     * @return string[]
     */
    public function getQueues(): ?array
    {
        return $this->queues;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setQueues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQueues method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQueuesForArrayConstraintFromSetQueues(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taskFilterDTOQueuesItem) {
            // validation for constraint: itemType
            if (!is_string($taskFilterDTOQueuesItem)) {
                $invalidValues[] = is_object($taskFilterDTOQueuesItem) ? get_class($taskFilterDTOQueuesItem) : sprintf('%s(%s)', gettype($taskFilterDTOQueuesItem), var_export($taskFilterDTOQueuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The queues property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set queues value
     * @throws InvalidArgumentException
     * @param string[] $queues
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function setQueues(?array $queues = null): self
    {
        // validation for constraint: array
        if ('' !== ($queuesArrayErrorMessage = self::validateQueuesForArrayConstraintFromSetQueues($queues))) {
            throw new InvalidArgumentException($queuesArrayErrorMessage, __LINE__);
        }
        $this->queues = $queues;
        
        return $this;
    }
    /**
     * Add item to queues value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function addToQueues(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The queues property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->queues[] = $item;
        
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
        foreach ($values as $taskFilterDTOTaskTypesItem) {
            // validation for constraint: itemType
            if (!is_string($taskFilterDTOTaskTypesItem)) {
                $invalidValues[] = is_object($taskFilterDTOTaskTypesItem) ? get_class($taskFilterDTOTaskTypesItem) : sprintf('%s(%s)', gettype($taskFilterDTOTaskTypesItem), var_export($taskFilterDTOTaskTypesItem, true));
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
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
     * Get toDueDate value
     * @return string|null
     */
    public function getToDueDate(): ?string
    {
        return $this->toDueDate;
    }
    /**
     * Set toDueDate value
     * @param string $toDueDate
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function setToDueDate(?string $toDueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($toDueDate) && !is_string($toDueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDueDate, true), gettype($toDueDate)), __LINE__);
        }
        $this->toDueDate = $toDueDate;
        
        return $this;
    }
    /**
     * Get fromDelegationDate value
     * @return string|null
     */
    public function getFromDelegationDate(): ?string
    {
        return $this->fromDelegationDate;
    }
    /**
     * Set fromDelegationDate value
     * @param string $fromDelegationDate
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function setFromDelegationDate(?string $fromDelegationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDelegationDate) && !is_string($fromDelegationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDelegationDate, true), gettype($fromDelegationDate)), __LINE__);
        }
        $this->fromDelegationDate = $fromDelegationDate;
        
        return $this;
    }
    /**
     * Get toDelegationDate value
     * @return string|null
     */
    public function getToDelegationDate(): ?string
    {
        return $this->toDelegationDate;
    }
    /**
     * Set toDelegationDate value
     * @param string $toDelegationDate
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function setToDelegationDate(?string $toDelegationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($toDelegationDate) && !is_string($toDelegationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDelegationDate, true), gettype($toDelegationDate)), __LINE__);
        }
        $this->toDelegationDate = $toDelegationDate;
        
        return $this;
    }
    /**
     * Get fromPriority value
     * @return string|null
     */
    public function getFromPriority(): ?string
    {
        return $this->fromPriority;
    }
    /**
     * Set fromPriority value
     * @param string $fromPriority
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function setFromPriority(?string $fromPriority = null): self
    {
        // validation for constraint: string
        if (!is_null($fromPriority) && !is_string($fromPriority)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromPriority, true), gettype($fromPriority)), __LINE__);
        }
        $this->fromPriority = $fromPriority;
        
        return $this;
    }
    /**
     * Get toPriority value
     * @return string|null
     */
    public function getToPriority(): ?string
    {
        return $this->toPriority;
    }
    /**
     * Set toPriority value
     * @param string $toPriority
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function setToPriority(?string $toPriority = null): self
    {
        // validation for constraint: string
        if (!is_null($toPriority) && !is_string($toPriority)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toPriority, true), gettype($toPriority)), __LINE__);
        }
        $this->toPriority = $toPriority;
        
        return $this;
    }
    /**
     * Get MidocoTaskViewColumns value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns[]
     */
    public function getMidocoTaskViewColumns(): ?array
    {
        return $this->MidocoTaskViewColumns;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTaskViewColumns method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskViewColumns method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskViewColumnsForArrayConstraintFromSetMidocoTaskViewColumns(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taskFilterDTOMidocoTaskViewColumnsItem) {
            // validation for constraint: itemType
            if (!$taskFilterDTOMidocoTaskViewColumnsItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns) {
                $invalidValues[] = is_object($taskFilterDTOMidocoTaskViewColumnsItem) ? get_class($taskFilterDTOMidocoTaskViewColumnsItem) : sprintf('%s(%s)', gettype($taskFilterDTOMidocoTaskViewColumnsItem), var_export($taskFilterDTOMidocoTaskViewColumnsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskViewColumns property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskViewColumns value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns[] $midocoTaskViewColumns
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function setMidocoTaskViewColumns(?array $midocoTaskViewColumns = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskViewColumnsArrayErrorMessage = self::validateMidocoTaskViewColumnsForArrayConstraintFromSetMidocoTaskViewColumns($midocoTaskViewColumns))) {
            throw new InvalidArgumentException($midocoTaskViewColumnsArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskViewColumns = $midocoTaskViewColumns;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskViewColumns value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns $item
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskFilterDTO
     */
    public function addToMidocoTaskViewColumns(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskViewColumns property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskViewColumns[] = $item;
        
        return $this;
    }
}
