<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMyTaskViewsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMyTaskViewsRequest extends AbstractStructBase
{
    /**
     * The MidocoMyTaskView
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoMyTaskView
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskView[]
     */
    protected array $MidocoMyTaskView;
    /**
     * Constructor method for SaveMyTaskViewsRequest
     * @uses SaveMyTaskViewsRequest::setMidocoMyTaskView()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskView[] $midocoMyTaskView
     */
    public function __construct(array $midocoMyTaskView)
    {
        $this
            ->setMidocoMyTaskView($midocoMyTaskView);
    }
    /**
     * Get MidocoMyTaskView value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskView[]
     */
    public function getMidocoMyTaskView(): array
    {
        return $this->MidocoMyTaskView;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMyTaskView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMyTaskView method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMyTaskViewForArrayConstraintFromSetMidocoMyTaskView(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMyTaskViewsRequestMidocoMyTaskViewItem) {
            // validation for constraint: itemType
            if (!$saveMyTaskViewsRequestMidocoMyTaskViewItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskView) {
                $invalidValues[] = is_object($saveMyTaskViewsRequestMidocoMyTaskViewItem) ? get_class($saveMyTaskViewsRequestMidocoMyTaskViewItem) : sprintf('%s(%s)', gettype($saveMyTaskViewsRequestMidocoMyTaskViewItem), var_export($saveMyTaskViewsRequestMidocoMyTaskViewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMyTaskView property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskView, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMyTaskView value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskView[] $midocoMyTaskView
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewsRequest
     */
    public function setMidocoMyTaskView(array $midocoMyTaskView): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMyTaskViewArrayErrorMessage = self::validateMidocoMyTaskViewForArrayConstraintFromSetMidocoMyTaskView($midocoMyTaskView))) {
            throw new InvalidArgumentException($midocoMyTaskViewArrayErrorMessage, __LINE__);
        }
        $this->MidocoMyTaskView = $midocoMyTaskView;
        
        return $this;
    }
    /**
     * Add item to MidocoMyTaskView value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskView $item
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewsRequest
     */
    public function addToMidocoMyTaskView(\Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskView $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskView) {
            throw new InvalidArgumentException(sprintf('The MidocoMyTaskView property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskView, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMyTaskView[] = $item;
        
        return $this;
    }
}
