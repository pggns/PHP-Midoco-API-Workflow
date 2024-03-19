<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskViewTaskDetailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskViewTaskDetailsRequest extends AbstractStructBase
{
    /**
     * The TaskOverviewCriteria
     * Meta information extracted from the WSDL
     * - ref: TaskOverviewCriteria
     * @var \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $TaskOverviewCriteria = null;
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
     * The isCounterOnly
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isCounterOnly = null;
    /**
     * Constructor method for GetTaskViewTaskDetailsRequest
     * @uses GetTaskViewTaskDetailsRequest::setTaskOverviewCriteria()
     * @uses GetTaskViewTaskDetailsRequest::setMidocoTaskViewColumns()
     * @uses GetTaskViewTaskDetailsRequest::setIsCounterOnly()
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns[] $midocoTaskViewColumns
     * @param bool $isCounterOnly
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria = null, ?array $midocoTaskViewColumns = null, ?bool $isCounterOnly = false)
    {
        $this
            ->setTaskOverviewCriteria($taskOverviewCriteria)
            ->setMidocoTaskViewColumns($midocoTaskViewColumns)
            ->setIsCounterOnly($isCounterOnly);
    }
    /**
     * Get TaskOverviewCriteria value
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria|null
     */
    public function getTaskOverviewCriteria(): ?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
    {
        return $this->TaskOverviewCriteria;
    }
    /**
     * Set TaskOverviewCriteria value
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewTaskDetailsRequest
     */
    public function setTaskOverviewCriteria(?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria = null): self
    {
        $this->TaskOverviewCriteria = $taskOverviewCriteria;
        
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
        foreach ($values as $getTaskViewTaskDetailsRequestMidocoTaskViewColumnsItem) {
            // validation for constraint: itemType
            if (!$getTaskViewTaskDetailsRequestMidocoTaskViewColumnsItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns) {
                $invalidValues[] = is_object($getTaskViewTaskDetailsRequestMidocoTaskViewColumnsItem) ? get_class($getTaskViewTaskDetailsRequestMidocoTaskViewColumnsItem) : sprintf('%s(%s)', gettype($getTaskViewTaskDetailsRequestMidocoTaskViewColumnsItem), var_export($getTaskViewTaskDetailsRequestMidocoTaskViewColumnsItem, true));
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewTaskDetailsRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewTaskDetailsRequest
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
     * Get isCounterOnly value
     * @return bool|null
     */
    public function getIsCounterOnly(): ?bool
    {
        return $this->isCounterOnly;
    }
    /**
     * Set isCounterOnly value
     * @param bool $isCounterOnly
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewTaskDetailsRequest
     */
    public function setIsCounterOnly(?bool $isCounterOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isCounterOnly) && !is_bool($isCounterOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCounterOnly, true), gettype($isCounterOnly)), __LINE__);
        }
        $this->isCounterOnly = $isCounterOnly;
        
        return $this;
    }
}
