<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TasklistRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TasklistRequest extends AbstractStructBase
{
    /**
     * The user_value
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $user_value = null;
    /**
     * The unit_name
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unit_name = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The show_untimed
     * @var bool|null
     */
    protected ?bool $show_untimed = null;
    /**
     * The from_date
     * @var string|null
     */
    protected ?string $from_date = null;
    /**
     * The to_date
     * @var string|null
     */
    protected ?string $to_date = null;
    /**
     * The queue_name
     * @var string|null
     */
    protected ?string $queue_name = null;
    /**
     * The process
     * @var string|null
     */
    protected ?string $process = null;
    /**
     * The subject_type
     * @var string|null
     */
    protected ?string $subject_type = null;
    /**
     * Constructor method for TasklistRequest
     * @uses TasklistRequest::setUser_value()
     * @uses TasklistRequest::setUnit_name()
     * @uses TasklistRequest::setType()
     * @uses TasklistRequest::setShow_untimed()
     * @uses TasklistRequest::setFrom_date()
     * @uses TasklistRequest::setTo_date()
     * @uses TasklistRequest::setQueue_name()
     * @uses TasklistRequest::setProcess()
     * @uses TasklistRequest::setSubject_type()
     * @param string[] $user_value
     * @param string[] $unit_name
     * @param string $type
     * @param bool $show_untimed
     * @param string $from_date
     * @param string $to_date
     * @param string $queue_name
     * @param string $process
     * @param string $subject_type
     */
    public function __construct(?array $user_value = null, ?array $unit_name = null, ?string $type = null, ?bool $show_untimed = null, ?string $from_date = null, ?string $to_date = null, ?string $queue_name = null, ?string $process = null, ?string $subject_type = null)
    {
        $this
            ->setUser_value($user_value)
            ->setUnit_name($unit_name)
            ->setType($type)
            ->setShow_untimed($show_untimed)
            ->setFrom_date($from_date)
            ->setTo_date($to_date)
            ->setQueue_name($queue_name)
            ->setProcess($process)
            ->setSubject_type($subject_type);
    }
    /**
     * Get user_value value
     * @return string[]
     */
    public function getUser_value(): ?array
    {
        return $this->user_value;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUser_value method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUser_value method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUser_valueForArrayConstraintFromSetUser_value(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tasklistRequestUser_valueItem) {
            // validation for constraint: itemType
            if (!is_string($tasklistRequestUser_valueItem)) {
                $invalidValues[] = is_object($tasklistRequestUser_valueItem) ? get_class($tasklistRequestUser_valueItem) : sprintf('%s(%s)', gettype($tasklistRequestUser_valueItem), var_export($tasklistRequestUser_valueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The user_value property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set user_value value
     * @throws InvalidArgumentException
     * @param string[] $user_value
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
     */
    public function setUser_value(?array $user_value = null): self
    {
        // validation for constraint: array
        if ('' !== ($user_valueArrayErrorMessage = self::validateUser_valueForArrayConstraintFromSetUser_value($user_value))) {
            throw new InvalidArgumentException($user_valueArrayErrorMessage, __LINE__);
        }
        $this->user_value = $user_value;
        
        return $this;
    }
    /**
     * Add item to user_value value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
     */
    public function addToUser_value(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The user_value property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->user_value[] = $item;
        
        return $this;
    }
    /**
     * Get unit_name value
     * @return string[]
     */
    public function getUnit_name(): ?array
    {
        return $this->unit_name;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnit_name method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnit_name method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnit_nameForArrayConstraintFromSetUnit_name(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tasklistRequestUnit_nameItem) {
            // validation for constraint: itemType
            if (!is_string($tasklistRequestUnit_nameItem)) {
                $invalidValues[] = is_object($tasklistRequestUnit_nameItem) ? get_class($tasklistRequestUnit_nameItem) : sprintf('%s(%s)', gettype($tasklistRequestUnit_nameItem), var_export($tasklistRequestUnit_nameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unit_name property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unit_name value
     * @throws InvalidArgumentException
     * @param string[] $unit_name
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
     */
    public function setUnit_name(?array $unit_name = null): self
    {
        // validation for constraint: array
        if ('' !== ($unit_nameArrayErrorMessage = self::validateUnit_nameForArrayConstraintFromSetUnit_name($unit_name))) {
            throw new InvalidArgumentException($unit_nameArrayErrorMessage, __LINE__);
        }
        $this->unit_name = $unit_name;
        
        return $this;
    }
    /**
     * Add item to unit_name value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
     */
    public function addToUnit_name(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unit_name property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unit_name[] = $item;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get show_untimed value
     * @return bool|null
     */
    public function getShow_untimed(): ?bool
    {
        return $this->show_untimed;
    }
    /**
     * Set show_untimed value
     * @param bool $show_untimed
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
     */
    public function setShow_untimed(?bool $show_untimed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($show_untimed) && !is_bool($show_untimed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($show_untimed, true), gettype($show_untimed)), __LINE__);
        }
        $this->show_untimed = $show_untimed;
        
        return $this;
    }
    /**
     * Get from_date value
     * @return string|null
     */
    public function getFrom_date(): ?string
    {
        return $this->from_date;
    }
    /**
     * Set from_date value
     * @param string $from_date
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
     */
    public function setFrom_date(?string $from_date = null): self
    {
        // validation for constraint: string
        if (!is_null($from_date) && !is_string($from_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from_date, true), gettype($from_date)), __LINE__);
        }
        $this->from_date = $from_date;
        
        return $this;
    }
    /**
     * Get to_date value
     * @return string|null
     */
    public function getTo_date(): ?string
    {
        return $this->to_date;
    }
    /**
     * Set to_date value
     * @param string $to_date
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
     */
    public function setTo_date(?string $to_date = null): self
    {
        // validation for constraint: string
        if (!is_null($to_date) && !is_string($to_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to_date, true), gettype($to_date)), __LINE__);
        }
        $this->to_date = $to_date;
        
        return $this;
    }
    /**
     * Get queue_name value
     * @return string|null
     */
    public function getQueue_name(): ?string
    {
        return $this->queue_name;
    }
    /**
     * Set queue_name value
     * @param string $queue_name
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
     */
    public function setQueue_name(?string $queue_name = null): self
    {
        // validation for constraint: string
        if (!is_null($queue_name) && !is_string($queue_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queue_name, true), gettype($queue_name)), __LINE__);
        }
        $this->queue_name = $queue_name;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistRequest
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
}
