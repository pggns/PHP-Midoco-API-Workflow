<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskOverviewResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskOverviewResponse extends AbstractStructBase
{
    /**
     * The TaskOverview
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TaskOverview
     * @var \Pggns\MidocoApi\Workflow\StructType\TaskOverview[]
     */
    protected ?array $TaskOverview = null;
    /**
     * Constructor method for GetTaskOverviewResponse
     * @uses GetTaskOverviewResponse::setTaskOverview()
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskOverview[] $taskOverview
     */
    public function __construct(?array $taskOverview = null)
    {
        $this
            ->setTaskOverview($taskOverview);
    }
    /**
     * Get TaskOverview value
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverview[]
     */
    public function getTaskOverview(): ?array
    {
        return $this->TaskOverview;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTaskOverview method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaskOverview method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskOverviewForArrayConstraintFromSetTaskOverview(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTaskOverviewResponseTaskOverviewItem) {
            // validation for constraint: itemType
            if (!$getTaskOverviewResponseTaskOverviewItem instanceof \Pggns\MidocoApi\Workflow\StructType\TaskOverview) {
                $invalidValues[] = is_object($getTaskOverviewResponseTaskOverviewItem) ? get_class($getTaskOverviewResponseTaskOverviewItem) : sprintf('%s(%s)', gettype($getTaskOverviewResponseTaskOverviewItem), var_export($getTaskOverviewResponseTaskOverviewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaskOverview property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\TaskOverview, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaskOverview value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskOverview[] $taskOverview
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskOverviewResponse
     */
    public function setTaskOverview(?array $taskOverview = null): self
    {
        // validation for constraint: array
        if ('' !== ($taskOverviewArrayErrorMessage = self::validateTaskOverviewForArrayConstraintFromSetTaskOverview($taskOverview))) {
            throw new InvalidArgumentException($taskOverviewArrayErrorMessage, __LINE__);
        }
        $this->TaskOverview = $taskOverview;
        
        return $this;
    }
    /**
     * Add item to TaskOverview value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskOverview $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskOverviewResponse
     */
    public function addToTaskOverview(\Pggns\MidocoApi\Workflow\StructType\TaskOverview $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\TaskOverview) {
            throw new InvalidArgumentException(sprintf('The TaskOverview property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\TaskOverview, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaskOverview[] = $item;
        
        return $this;
    }
}
