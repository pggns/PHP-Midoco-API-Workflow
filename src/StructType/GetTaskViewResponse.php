<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskViewResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskViewResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskView
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskView
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView[]
     */
    protected ?array $MidocoTaskView = null;
    /**
     * Constructor method for GetTaskViewResponse
     * @uses GetTaskViewResponse::setMidocoTaskView()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView[] $midocoTaskView
     */
    public function __construct(?array $midocoTaskView = null)
    {
        $this
            ->setMidocoTaskView($midocoTaskView);
    }
    /**
     * Get MidocoTaskView value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView[]
     */
    public function getMidocoTaskView(): ?array
    {
        return $this->MidocoTaskView;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTaskView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskView method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskViewForArrayConstraintFromSetMidocoTaskView(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTaskViewResponseMidocoTaskViewItem) {
            // validation for constraint: itemType
            if (!$getTaskViewResponseMidocoTaskViewItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView) {
                $invalidValues[] = is_object($getTaskViewResponseMidocoTaskViewItem) ? get_class($getTaskViewResponseMidocoTaskViewItem) : sprintf('%s(%s)', gettype($getTaskViewResponseMidocoTaskViewItem), var_export($getTaskViewResponseMidocoTaskViewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskView property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskView value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView[] $midocoTaskView
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewResponse
     */
    public function setMidocoTaskView(?array $midocoTaskView = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskViewArrayErrorMessage = self::validateMidocoTaskViewForArrayConstraintFromSetMidocoTaskView($midocoTaskView))) {
            throw new InvalidArgumentException($midocoTaskViewArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskView = $midocoTaskView;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskView value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewResponse
     */
    public function addToMidocoTaskView(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskView property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskView[] = $item;
        
        return $this;
    }
}
