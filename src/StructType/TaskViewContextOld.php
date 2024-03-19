<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskViewContextOld StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskViewContextOld extends AbstractStructBase
{
    /**
     * The TaskViewSingleContext
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TaskViewSingleContext
     * @var \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext[]
     */
    protected ?array $TaskViewSingleContext = null;
    /**
     * Constructor method for TaskViewContextOld
     * @uses TaskViewContextOld::setTaskViewSingleContext()
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext[] $taskViewSingleContext
     */
    public function __construct(?array $taskViewSingleContext = null)
    {
        $this
            ->setTaskViewSingleContext($taskViewSingleContext);
    }
    /**
     * Get TaskViewSingleContext value
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext[]
     */
    public function getTaskViewSingleContext(): ?array
    {
        return $this->TaskViewSingleContext;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTaskViewSingleContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaskViewSingleContext method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskViewSingleContextForArrayConstraintFromSetTaskViewSingleContext(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taskViewContextOldTaskViewSingleContextItem) {
            // validation for constraint: itemType
            if (!$taskViewContextOldTaskViewSingleContextItem instanceof \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext) {
                $invalidValues[] = is_object($taskViewContextOldTaskViewSingleContextItem) ? get_class($taskViewContextOldTaskViewSingleContextItem) : sprintf('%s(%s)', gettype($taskViewContextOldTaskViewSingleContextItem), var_export($taskViewContextOldTaskViewSingleContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaskViewSingleContext property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaskViewSingleContext value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext[] $taskViewSingleContext
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewContextOld
     */
    public function setTaskViewSingleContext(?array $taskViewSingleContext = null): self
    {
        // validation for constraint: array
        if ('' !== ($taskViewSingleContextArrayErrorMessage = self::validateTaskViewSingleContextForArrayConstraintFromSetTaskViewSingleContext($taskViewSingleContext))) {
            throw new InvalidArgumentException($taskViewSingleContextArrayErrorMessage, __LINE__);
        }
        $this->TaskViewSingleContext = $taskViewSingleContext;
        
        return $this;
    }
    /**
     * Add item to TaskViewSingleContext value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext $item
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewContextOld
     */
    public function addToTaskViewSingleContext(\Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext) {
            throw new InvalidArgumentException(sprintf('The TaskViewSingleContext property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaskViewSingleContext[] = $item;
        
        return $this;
    }
}
