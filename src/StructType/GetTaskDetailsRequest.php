<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskDetailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskDetailsRequest extends AbstractStructBase
{
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
     * The delegateQueue
     * @var string|null
     */
    protected ?string $delegateQueue = null;
    /**
     * The delegateUser
     * @var int|null
     */
    protected ?int $delegateUser = null;
    /**
     * The delegateOrgunit
     * @var string|null
     */
    protected ?string $delegateOrgunit = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The fromPriority
     * @var int|null
     */
    protected ?int $fromPriority = null;
    /**
     * The toPriority
     * @var int|null
     */
    protected ?int $toPriority = null;
    /**
     * The startTimeLimit
     * @var string|null
     */
    protected ?string $startTimeLimit = null;
    /**
     * The endTimeLimit
     * @var string|null
     */
    protected ?string $endTimeLimit = null;
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
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for GetTaskDetailsRequest
     * @uses GetTaskDetailsRequest::setMidocoTaskViewColumns()
     * @uses GetTaskDetailsRequest::setDelegateQueue()
     * @uses GetTaskDetailsRequest::setDelegateUser()
     * @uses GetTaskDetailsRequest::setDelegateOrgunit()
     * @uses GetTaskDetailsRequest::setUnitName()
     * @uses GetTaskDetailsRequest::setTaskType()
     * @uses GetTaskDetailsRequest::setPriority()
     * @uses GetTaskDetailsRequest::setFromPriority()
     * @uses GetTaskDetailsRequest::setToPriority()
     * @uses GetTaskDetailsRequest::setStartTimeLimit()
     * @uses GetTaskDetailsRequest::setEndTimeLimit()
     * @uses GetTaskDetailsRequest::setDelegationFromDate()
     * @uses GetTaskDetailsRequest::setDelegationToDate()
     * @uses GetTaskDetailsRequest::setCreationUser()
     * @uses GetTaskDetailsRequest::setUserId()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns[] $midocoTaskViewColumns
     * @param string $delegateQueue
     * @param int $delegateUser
     * @param string $delegateOrgunit
     * @param string $unitName
     * @param string $taskType
     * @param int $priority
     * @param int $fromPriority
     * @param int $toPriority
     * @param string $startTimeLimit
     * @param string $endTimeLimit
     * @param string $delegationFromDate
     * @param string $delegationToDate
     * @param int $creationUser
     * @param int $userId
     */
    public function __construct(?array $midocoTaskViewColumns = null, ?string $delegateQueue = null, ?int $delegateUser = null, ?string $delegateOrgunit = null, ?string $unitName = null, ?string $taskType = null, ?int $priority = null, ?int $fromPriority = null, ?int $toPriority = null, ?string $startTimeLimit = null, ?string $endTimeLimit = null, ?string $delegationFromDate = null, ?string $delegationToDate = null, ?int $creationUser = null, ?int $userId = null)
    {
        $this
            ->setMidocoTaskViewColumns($midocoTaskViewColumns)
            ->setDelegateQueue($delegateQueue)
            ->setDelegateUser($delegateUser)
            ->setDelegateOrgunit($delegateOrgunit)
            ->setUnitName($unitName)
            ->setTaskType($taskType)
            ->setPriority($priority)
            ->setFromPriority($fromPriority)
            ->setToPriority($toPriority)
            ->setStartTimeLimit($startTimeLimit)
            ->setEndTimeLimit($endTimeLimit)
            ->setDelegationFromDate($delegationFromDate)
            ->setDelegationToDate($delegationToDate)
            ->setCreationUser($creationUser)
            ->setUserId($userId);
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
        foreach ($values as $getTaskDetailsRequestMidocoTaskViewColumnsItem) {
            // validation for constraint: itemType
            if (!$getTaskDetailsRequestMidocoTaskViewColumnsItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns) {
                $invalidValues[] = is_object($getTaskDetailsRequestMidocoTaskViewColumnsItem) ? get_class($getTaskDetailsRequestMidocoTaskViewColumnsItem) : sprintf('%s(%s)', gettype($getTaskDetailsRequestMidocoTaskViewColumnsItem), var_export($getTaskDetailsRequestMidocoTaskViewColumnsItem, true));
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
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
    /**
     * Get delegateQueue value
     * @return string|null
     */
    public function getDelegateQueue(): ?string
    {
        return $this->delegateQueue;
    }
    /**
     * Set delegateQueue value
     * @param string $delegateQueue
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
     */
    public function setDelegateQueue(?string $delegateQueue = null): self
    {
        // validation for constraint: string
        if (!is_null($delegateQueue) && !is_string($delegateQueue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegateQueue, true), gettype($delegateQueue)), __LINE__);
        }
        $this->delegateQueue = $delegateQueue;
        
        return $this;
    }
    /**
     * Get delegateUser value
     * @return int|null
     */
    public function getDelegateUser(): ?int
    {
        return $this->delegateUser;
    }
    /**
     * Set delegateUser value
     * @param int $delegateUser
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
     */
    public function setDelegateUser(?int $delegateUser = null): self
    {
        // validation for constraint: int
        if (!is_null($delegateUser) && !(is_int($delegateUser) || ctype_digit($delegateUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delegateUser, true), gettype($delegateUser)), __LINE__);
        }
        $this->delegateUser = $delegateUser;
        
        return $this;
    }
    /**
     * Get delegateOrgunit value
     * @return string|null
     */
    public function getDelegateOrgunit(): ?string
    {
        return $this->delegateOrgunit;
    }
    /**
     * Set delegateOrgunit value
     * @param string $delegateOrgunit
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
     */
    public function setDelegateOrgunit(?string $delegateOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($delegateOrgunit) && !is_string($delegateOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegateOrgunit, true), gettype($delegateOrgunit)), __LINE__);
        }
        $this->delegateOrgunit = $delegateOrgunit;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
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
     * Get priority value
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param int $priority
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
     */
    public function setPriority(?int $priority = null): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        
        return $this;
    }
    /**
     * Get fromPriority value
     * @return int|null
     */
    public function getFromPriority(): ?int
    {
        return $this->fromPriority;
    }
    /**
     * Set fromPriority value
     * @param int $fromPriority
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
     */
    public function setFromPriority(?int $fromPriority = null): self
    {
        // validation for constraint: int
        if (!is_null($fromPriority) && !(is_int($fromPriority) || ctype_digit($fromPriority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fromPriority, true), gettype($fromPriority)), __LINE__);
        }
        $this->fromPriority = $fromPriority;
        
        return $this;
    }
    /**
     * Get toPriority value
     * @return int|null
     */
    public function getToPriority(): ?int
    {
        return $this->toPriority;
    }
    /**
     * Set toPriority value
     * @param int $toPriority
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
     */
    public function setToPriority(?int $toPriority = null): self
    {
        // validation for constraint: int
        if (!is_null($toPriority) && !(is_int($toPriority) || ctype_digit($toPriority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($toPriority, true), gettype($toPriority)), __LINE__);
        }
        $this->toPriority = $toPriority;
        
        return $this;
    }
    /**
     * Get startTimeLimit value
     * @return string|null
     */
    public function getStartTimeLimit(): ?string
    {
        return $this->startTimeLimit;
    }
    /**
     * Set startTimeLimit value
     * @param string $startTimeLimit
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
     */
    public function setStartTimeLimit(?string $startTimeLimit = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimeLimit) && !is_string($startTimeLimit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeLimit, true), gettype($startTimeLimit)), __LINE__);
        }
        $this->startTimeLimit = $startTimeLimit;
        
        return $this;
    }
    /**
     * Get endTimeLimit value
     * @return string|null
     */
    public function getEndTimeLimit(): ?string
    {
        return $this->endTimeLimit;
    }
    /**
     * Set endTimeLimit value
     * @param string $endTimeLimit
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
     */
    public function setEndTimeLimit(?string $endTimeLimit = null): self
    {
        // validation for constraint: string
        if (!is_null($endTimeLimit) && !is_string($endTimeLimit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTimeLimit, true), gettype($endTimeLimit)), __LINE__);
        }
        $this->endTimeLimit = $endTimeLimit;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest
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
