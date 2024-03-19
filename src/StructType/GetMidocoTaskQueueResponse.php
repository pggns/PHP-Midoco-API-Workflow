<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTaskQueueResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoTaskQueueResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskQueue
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue[]
     */
    protected ?array $MidocoTaskQueue = null;
    /**
     * Constructor method for GetMidocoTaskQueueResponse
     * @uses GetMidocoTaskQueueResponse::setMidocoTaskQueue()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue[] $midocoTaskQueue
     */
    public function __construct(?array $midocoTaskQueue = null)
    {
        $this
            ->setMidocoTaskQueue($midocoTaskQueue);
    }
    /**
     * Get MidocoTaskQueue value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue[]
     */
    public function getMidocoTaskQueue(): ?array
    {
        return $this->MidocoTaskQueue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTaskQueue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskQueue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskQueueForArrayConstraintFromSetMidocoTaskQueue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoTaskQueueResponseMidocoTaskQueueItem) {
            // validation for constraint: itemType
            if (!$getMidocoTaskQueueResponseMidocoTaskQueueItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue) {
                $invalidValues[] = is_object($getMidocoTaskQueueResponseMidocoTaskQueueItem) ? get_class($getMidocoTaskQueueResponseMidocoTaskQueueItem) : sprintf('%s(%s)', gettype($getMidocoTaskQueueResponseMidocoTaskQueueItem), var_export($getMidocoTaskQueueResponseMidocoTaskQueueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskQueue property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskQueue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue[] $midocoTaskQueue
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskQueueResponse
     */
    public function setMidocoTaskQueue(?array $midocoTaskQueue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskQueueArrayErrorMessage = self::validateMidocoTaskQueueForArrayConstraintFromSetMidocoTaskQueue($midocoTaskQueue))) {
            throw new InvalidArgumentException($midocoTaskQueueArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskQueue = $midocoTaskQueue;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskQueue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskQueueResponse
     */
    public function addToMidocoTaskQueue(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskQueue property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskQueue[] = $item;
        
        return $this;
    }
}
