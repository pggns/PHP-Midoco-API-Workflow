<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskDetailsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskDetailsResponse extends AbstractStructBase
{
    /**
     * The TaskDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TaskDetails
     * @var \Pggns\MidocoApi\Workflow\StructType\TaskDetails[]
     */
    protected ?array $TaskDetails = null;
    /**
     * Constructor method for GetTaskDetailsResponse
     * @uses GetTaskDetailsResponse::setTaskDetails()
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskDetails[] $taskDetails
     */
    public function __construct(?array $taskDetails = null)
    {
        $this
            ->setTaskDetails($taskDetails);
    }
    /**
     * Get TaskDetails value
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDetails[]
     */
    public function getTaskDetails(): ?array
    {
        return $this->TaskDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTaskDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaskDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskDetailsForArrayConstraintFromSetTaskDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTaskDetailsResponseTaskDetailsItem) {
            // validation for constraint: itemType
            if (!$getTaskDetailsResponseTaskDetailsItem instanceof \Pggns\MidocoApi\Workflow\StructType\TaskDetails) {
                $invalidValues[] = is_object($getTaskDetailsResponseTaskDetailsItem) ? get_class($getTaskDetailsResponseTaskDetailsItem) : sprintf('%s(%s)', gettype($getTaskDetailsResponseTaskDetailsItem), var_export($getTaskDetailsResponseTaskDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaskDetails property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\TaskDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaskDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskDetails[] $taskDetails
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsResponse
     */
    public function setTaskDetails(?array $taskDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($taskDetailsArrayErrorMessage = self::validateTaskDetailsForArrayConstraintFromSetTaskDetails($taskDetails))) {
            throw new InvalidArgumentException($taskDetailsArrayErrorMessage, __LINE__);
        }
        $this->TaskDetails = $taskDetails;
        
        return $this;
    }
    /**
     * Add item to TaskDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskDetails $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsResponse
     */
    public function addToTaskDetails(\Pggns\MidocoApi\Workflow\StructType\TaskDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\TaskDetails) {
            throw new InvalidArgumentException(sprintf('The TaskDetails property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\TaskDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaskDetails[] = $item;
        
        return $this;
    }
}
