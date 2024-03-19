<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Task StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Task extends AbstractStructBase
{
    /**
     * The MidocoTaskAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskAttribute
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute[]
     */
    protected ?array $MidocoTaskAttribute = null;
    /**
     * The subject_id
     * @var int|null
     */
    protected ?int $subject_id = null;
    /**
     * The userValue
     * @var string|null
     */
    protected ?string $userValue = null;
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
     * The unit_name
     * @var string|null
     */
    protected ?string $unit_name = null;
    /**
     * The process_role
     * @var string|null
     */
    protected ?string $process_role = null;
    /**
     * The delegateQueue
     * @var string|null
     */
    protected ?string $delegateQueue = null;
    /**
     * The delegateUser
     * @var string|null
     */
    protected ?string $delegateUser = null;
    /**
     * The delegateUserId
     * @var int|null
     */
    protected ?int $delegateUserId = null;
    /**
     * The delegateOrgunit
     * @var string|null
     */
    protected ?string $delegateOrgunit = null;
    /**
     * The delegation_date
     * @var string|null
     */
    protected ?string $delegation_date = null;
    /**
     * The delegation_comment
     * @var string|null
     */
    protected ?string $delegation_comment = null;
    /**
     * The notify_on_complete
     * @var bool|null
     */
    protected ?bool $notify_on_complete = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The time_limit
     * @var string|null
     */
    protected ?string $time_limit = null;
    /**
     * The working_user
     * @var string|null
     */
    protected ?string $working_user = null;
    /**
     * The working_userId
     * @var int|null
     */
    protected ?int $working_userId = null;
    /**
     * The work_timestamp
     * @var string|null
     */
    protected ?string $work_timestamp = null;
    /**
     * The subject_description
     * @var string|null
     */
    protected ?string $subject_description = null;
    /**
     * The activity_id
     * @var string|null
     */
    protected ?string $activity_id = null;
    /**
     * The subject_type
     * @var string|null
     */
    protected ?string $subject_type = null;
    /**
     * The handle_manually
     * @var bool|null
     */
    protected ?bool $handle_manually = null;
    /**
     * The hints
     * @var string|null
     */
    protected ?string $hints = null;
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The manuallyCreatedTask
     * @var bool|null
     */
    protected ?bool $manuallyCreatedTask = null;
    /**
     * The preventDateChange
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preventDateChange = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for Task
     * @uses Task::setMidocoTaskAttribute()
     * @uses Task::setSubject_id()
     * @uses Task::setUserValue()
     * @uses Task::setActivity()
     * @uses Task::setProcess()
     * @uses Task::setUnit_name()
     * @uses Task::setProcess_role()
     * @uses Task::setDelegateQueue()
     * @uses Task::setDelegateUser()
     * @uses Task::setDelegateUserId()
     * @uses Task::setDelegateOrgunit()
     * @uses Task::setDelegation_date()
     * @uses Task::setDelegation_comment()
     * @uses Task::setNotify_on_complete()
     * @uses Task::setTimestamp()
     * @uses Task::setTime_limit()
     * @uses Task::setWorking_user()
     * @uses Task::setWorking_userId()
     * @uses Task::setWork_timestamp()
     * @uses Task::setSubject_description()
     * @uses Task::setActivity_id()
     * @uses Task::setSubject_type()
     * @uses Task::setHandle_manually()
     * @uses Task::setHints()
     * @uses Task::setPriority()
     * @uses Task::setManuallyCreatedTask()
     * @uses Task::setPreventDateChange()
     * @uses Task::setUserId()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute[] $midocoTaskAttribute
     * @param int $subject_id
     * @param string $userValue
     * @param string $activity
     * @param string $process
     * @param string $unit_name
     * @param string $process_role
     * @param string $delegateQueue
     * @param string $delegateUser
     * @param int $delegateUserId
     * @param string $delegateOrgunit
     * @param string $delegation_date
     * @param string $delegation_comment
     * @param bool $notify_on_complete
     * @param string $timestamp
     * @param string $time_limit
     * @param string $working_user
     * @param int $working_userId
     * @param string $work_timestamp
     * @param string $subject_description
     * @param string $activity_id
     * @param string $subject_type
     * @param bool $handle_manually
     * @param string $hints
     * @param int $priority
     * @param bool $manuallyCreatedTask
     * @param bool $preventDateChange
     * @param int $userId
     */
    public function __construct(?array $midocoTaskAttribute = null, ?int $subject_id = null, ?string $userValue = null, ?string $activity = null, ?string $process = null, ?string $unit_name = null, ?string $process_role = null, ?string $delegateQueue = null, ?string $delegateUser = null, ?int $delegateUserId = null, ?string $delegateOrgunit = null, ?string $delegation_date = null, ?string $delegation_comment = null, ?bool $notify_on_complete = null, ?string $timestamp = null, ?string $time_limit = null, ?string $working_user = null, ?int $working_userId = null, ?string $work_timestamp = null, ?string $subject_description = null, ?string $activity_id = null, ?string $subject_type = null, ?bool $handle_manually = null, ?string $hints = null, ?int $priority = null, ?bool $manuallyCreatedTask = null, ?bool $preventDateChange = false, ?int $userId = null)
    {
        $this
            ->setMidocoTaskAttribute($midocoTaskAttribute)
            ->setSubject_id($subject_id)
            ->setUserValue($userValue)
            ->setActivity($activity)
            ->setProcess($process)
            ->setUnit_name($unit_name)
            ->setProcess_role($process_role)
            ->setDelegateQueue($delegateQueue)
            ->setDelegateUser($delegateUser)
            ->setDelegateUserId($delegateUserId)
            ->setDelegateOrgunit($delegateOrgunit)
            ->setDelegation_date($delegation_date)
            ->setDelegation_comment($delegation_comment)
            ->setNotify_on_complete($notify_on_complete)
            ->setTimestamp($timestamp)
            ->setTime_limit($time_limit)
            ->setWorking_user($working_user)
            ->setWorking_userId($working_userId)
            ->setWork_timestamp($work_timestamp)
            ->setSubject_description($subject_description)
            ->setActivity_id($activity_id)
            ->setSubject_type($subject_type)
            ->setHandle_manually($handle_manually)
            ->setHints($hints)
            ->setPriority($priority)
            ->setManuallyCreatedTask($manuallyCreatedTask)
            ->setPreventDateChange($preventDateChange)
            ->setUserId($userId);
    }
    /**
     * Get MidocoTaskAttribute value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute[]
     */
    public function getMidocoTaskAttribute(): ?array
    {
        return $this->MidocoTaskAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTaskAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskAttributeForArrayConstraintFromSetMidocoTaskAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taskMidocoTaskAttributeItem) {
            // validation for constraint: itemType
            if (!$taskMidocoTaskAttributeItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute) {
                $invalidValues[] = is_object($taskMidocoTaskAttributeItem) ? get_class($taskMidocoTaskAttributeItem) : sprintf('%s(%s)', gettype($taskMidocoTaskAttributeItem), var_export($taskMidocoTaskAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskAttribute property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute[] $midocoTaskAttribute
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setMidocoTaskAttribute(?array $midocoTaskAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskAttributeArrayErrorMessage = self::validateMidocoTaskAttributeForArrayConstraintFromSetMidocoTaskAttribute($midocoTaskAttribute))) {
            throw new InvalidArgumentException($midocoTaskAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskAttribute = $midocoTaskAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute $item
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function addToMidocoTaskAttribute(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskAttribute property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get subject_id value
     * @return int|null
     */
    public function getSubject_id(): ?int
    {
        return $this->subject_id;
    }
    /**
     * Set subject_id value
     * @param int $subject_id
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setSubject_id(?int $subject_id = null): self
    {
        // validation for constraint: int
        if (!is_null($subject_id) && !(is_int($subject_id) || ctype_digit($subject_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subject_id, true), gettype($subject_id)), __LINE__);
        }
        $this->subject_id = $subject_id;
        
        return $this;
    }
    /**
     * Get userValue value
     * @return string|null
     */
    public function getUserValue(): ?string
    {
        return $this->userValue;
    }
    /**
     * Set userValue value
     * @param string $userValue
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setUserValue(?string $userValue = null): self
    {
        // validation for constraint: string
        if (!is_null($userValue) && !is_string($userValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userValue, true), gettype($userValue)), __LINE__);
        }
        $this->userValue = $userValue;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
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
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
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
     * Get unit_name value
     * @return string|null
     */
    public function getUnit_name(): ?string
    {
        return $this->unit_name;
    }
    /**
     * Set unit_name value
     * @param string $unit_name
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setUnit_name(?string $unit_name = null): self
    {
        // validation for constraint: string
        if (!is_null($unit_name) && !is_string($unit_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit_name, true), gettype($unit_name)), __LINE__);
        }
        $this->unit_name = $unit_name;
        
        return $this;
    }
    /**
     * Get process_role value
     * @return string|null
     */
    public function getProcess_role(): ?string
    {
        return $this->process_role;
    }
    /**
     * Set process_role value
     * @param string $process_role
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setProcess_role(?string $process_role = null): self
    {
        // validation for constraint: string
        if (!is_null($process_role) && !is_string($process_role)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($process_role, true), gettype($process_role)), __LINE__);
        }
        $this->process_role = $process_role;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
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
     * @return string|null
     */
    public function getDelegateUser(): ?string
    {
        return $this->delegateUser;
    }
    /**
     * Set delegateUser value
     * @param string $delegateUser
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setDelegateUser(?string $delegateUser = null): self
    {
        // validation for constraint: string
        if (!is_null($delegateUser) && !is_string($delegateUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegateUser, true), gettype($delegateUser)), __LINE__);
        }
        $this->delegateUser = $delegateUser;
        
        return $this;
    }
    /**
     * Get delegateUserId value
     * @return int|null
     */
    public function getDelegateUserId(): ?int
    {
        return $this->delegateUserId;
    }
    /**
     * Set delegateUserId value
     * @param int $delegateUserId
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setDelegateUserId(?int $delegateUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($delegateUserId) && !(is_int($delegateUserId) || ctype_digit($delegateUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delegateUserId, true), gettype($delegateUserId)), __LINE__);
        }
        $this->delegateUserId = $delegateUserId;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
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
     * Get delegation_date value
     * @return string|null
     */
    public function getDelegation_date(): ?string
    {
        return $this->delegation_date;
    }
    /**
     * Set delegation_date value
     * @param string $delegation_date
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setDelegation_date(?string $delegation_date = null): self
    {
        // validation for constraint: string
        if (!is_null($delegation_date) && !is_string($delegation_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegation_date, true), gettype($delegation_date)), __LINE__);
        }
        $this->delegation_date = $delegation_date;
        
        return $this;
    }
    /**
     * Get delegation_comment value
     * @return string|null
     */
    public function getDelegation_comment(): ?string
    {
        return $this->delegation_comment;
    }
    /**
     * Set delegation_comment value
     * @param string $delegation_comment
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setDelegation_comment(?string $delegation_comment = null): self
    {
        // validation for constraint: string
        if (!is_null($delegation_comment) && !is_string($delegation_comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegation_comment, true), gettype($delegation_comment)), __LINE__);
        }
        $this->delegation_comment = $delegation_comment;
        
        return $this;
    }
    /**
     * Get notify_on_complete value
     * @return bool|null
     */
    public function getNotify_on_complete(): ?bool
    {
        return $this->notify_on_complete;
    }
    /**
     * Set notify_on_complete value
     * @param bool $notify_on_complete
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setNotify_on_complete(?bool $notify_on_complete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notify_on_complete) && !is_bool($notify_on_complete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notify_on_complete, true), gettype($notify_on_complete)), __LINE__);
        }
        $this->notify_on_complete = $notify_on_complete;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
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
     * Get time_limit value
     * @return string|null
     */
    public function getTime_limit(): ?string
    {
        return $this->time_limit;
    }
    /**
     * Set time_limit value
     * @param string $time_limit
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setTime_limit(?string $time_limit = null): self
    {
        // validation for constraint: string
        if (!is_null($time_limit) && !is_string($time_limit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_limit, true), gettype($time_limit)), __LINE__);
        }
        $this->time_limit = $time_limit;
        
        return $this;
    }
    /**
     * Get working_user value
     * @return string|null
     */
    public function getWorking_user(): ?string
    {
        return $this->working_user;
    }
    /**
     * Set working_user value
     * @param string $working_user
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setWorking_user(?string $working_user = null): self
    {
        // validation for constraint: string
        if (!is_null($working_user) && !is_string($working_user)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($working_user, true), gettype($working_user)), __LINE__);
        }
        $this->working_user = $working_user;
        
        return $this;
    }
    /**
     * Get working_userId value
     * @return int|null
     */
    public function getWorking_userId(): ?int
    {
        return $this->working_userId;
    }
    /**
     * Set working_userId value
     * @param int $working_userId
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setWorking_userId(?int $working_userId = null): self
    {
        // validation for constraint: int
        if (!is_null($working_userId) && !(is_int($working_userId) || ctype_digit($working_userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($working_userId, true), gettype($working_userId)), __LINE__);
        }
        $this->working_userId = $working_userId;
        
        return $this;
    }
    /**
     * Get work_timestamp value
     * @return string|null
     */
    public function getWork_timestamp(): ?string
    {
        return $this->work_timestamp;
    }
    /**
     * Set work_timestamp value
     * @param string $work_timestamp
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setWork_timestamp(?string $work_timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($work_timestamp) && !is_string($work_timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($work_timestamp, true), gettype($work_timestamp)), __LINE__);
        }
        $this->work_timestamp = $work_timestamp;
        
        return $this;
    }
    /**
     * Get subject_description value
     * @return string|null
     */
    public function getSubject_description(): ?string
    {
        return $this->subject_description;
    }
    /**
     * Set subject_description value
     * @param string $subject_description
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setSubject_description(?string $subject_description = null): self
    {
        // validation for constraint: string
        if (!is_null($subject_description) && !is_string($subject_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject_description, true), gettype($subject_description)), __LINE__);
        }
        $this->subject_description = $subject_description;
        
        return $this;
    }
    /**
     * Get activity_id value
     * @return string|null
     */
    public function getActivity_id(): ?string
    {
        return $this->activity_id;
    }
    /**
     * Set activity_id value
     * @param string $activity_id
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setActivity_id(?string $activity_id = null): self
    {
        // validation for constraint: string
        if (!is_null($activity_id) && !is_string($activity_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activity_id, true), gettype($activity_id)), __LINE__);
        }
        $this->activity_id = $activity_id;
        
        return $this;
    }
    /**
     * Get subject_type value
     * @return string|null
     */
    public function getSubject_type(): ?string
    {
        return $this->subject_type;
    }
    /**
     * Set subject_type value
     * @param string $subject_type
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setSubject_type(?string $subject_type = null): self
    {
        // validation for constraint: string
        if (!is_null($subject_type) && !is_string($subject_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject_type, true), gettype($subject_type)), __LINE__);
        }
        $this->subject_type = $subject_type;
        
        return $this;
    }
    /**
     * Get handle_manually value
     * @return bool|null
     */
    public function getHandle_manually(): ?bool
    {
        return $this->handle_manually;
    }
    /**
     * Set handle_manually value
     * @param bool $handle_manually
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setHandle_manually(?bool $handle_manually = null): self
    {
        // validation for constraint: boolean
        if (!is_null($handle_manually) && !is_bool($handle_manually)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($handle_manually, true), gettype($handle_manually)), __LINE__);
        }
        $this->handle_manually = $handle_manually;
        
        return $this;
    }
    /**
     * Get hints value
     * @return string|null
     */
    public function getHints(): ?string
    {
        return $this->hints;
    }
    /**
     * Set hints value
     * @param string $hints
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setHints(?string $hints = null): self
    {
        // validation for constraint: string
        if (!is_null($hints) && !is_string($hints)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hints, true), gettype($hints)), __LINE__);
        }
        $this->hints = $hints;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
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
     * Get manuallyCreatedTask value
     * @return bool|null
     */
    public function getManuallyCreatedTask(): ?bool
    {
        return $this->manuallyCreatedTask;
    }
    /**
     * Set manuallyCreatedTask value
     * @param bool $manuallyCreatedTask
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setManuallyCreatedTask(?bool $manuallyCreatedTask = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manuallyCreatedTask) && !is_bool($manuallyCreatedTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manuallyCreatedTask, true), gettype($manuallyCreatedTask)), __LINE__);
        }
        $this->manuallyCreatedTask = $manuallyCreatedTask;
        
        return $this;
    }
    /**
     * Get preventDateChange value
     * @return bool|null
     */
    public function getPreventDateChange(): ?bool
    {
        return $this->preventDateChange;
    }
    /**
     * Set preventDateChange value
     * @param bool $preventDateChange
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
     */
    public function setPreventDateChange(?bool $preventDateChange = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preventDateChange) && !is_bool($preventDateChange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventDateChange, true), gettype($preventDateChange)), __LINE__);
        }
        $this->preventDateChange = $preventDateChange;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\Task
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
