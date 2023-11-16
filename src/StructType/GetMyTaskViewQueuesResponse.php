<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyTaskViewQueuesResponse StructType
 * @subpackage Structs
 */
class GetMyTaskViewQueuesResponse extends AbstractStructBase
{
    /**
     * The MidocoMyTaskViewQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMyTaskViewQueue
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewQueue[]
     */
    protected array $MidocoMyTaskViewQueue = [];
    /**
     * Constructor method for GetMyTaskViewQueuesResponse
     * @uses GetMyTaskViewQueuesResponse::setMidocoMyTaskViewQueue()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewQueue[] $midocoMyTaskViewQueue
     */
    public function __construct(array $midocoMyTaskViewQueue = [])
    {
        $this
            ->setMidocoMyTaskViewQueue($midocoMyTaskViewQueue);
    }
    /**
     * Get MidocoMyTaskViewQueue value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewQueue[]
     */
    public function getMidocoMyTaskViewQueue(): array
    {
        return $this->MidocoMyTaskViewQueue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMyTaskViewQueue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMyTaskViewQueue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMyTaskViewQueueForArrayConstraintsFromSetMidocoMyTaskViewQueue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMyTaskViewQueuesResponseMidocoMyTaskViewQueueItem) {
            // validation for constraint: itemType
            if (!$getMyTaskViewQueuesResponseMidocoMyTaskViewQueueItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewQueue) {
                $invalidValues[] = is_object($getMyTaskViewQueuesResponseMidocoMyTaskViewQueueItem) ? get_class($getMyTaskViewQueuesResponseMidocoMyTaskViewQueueItem) : sprintf('%s(%s)', gettype($getMyTaskViewQueuesResponseMidocoMyTaskViewQueueItem), var_export($getMyTaskViewQueuesResponseMidocoMyTaskViewQueueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMyTaskViewQueue property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewQueue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMyTaskViewQueue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewQueue[] $midocoMyTaskViewQueue
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewQueuesResponse
     */
    public function setMidocoMyTaskViewQueue(array $midocoMyTaskViewQueue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMyTaskViewQueueArrayErrorMessage = self::validateMidocoMyTaskViewQueueForArrayConstraintsFromSetMidocoMyTaskViewQueue($midocoMyTaskViewQueue))) {
            throw new InvalidArgumentException($midocoMyTaskViewQueueArrayErrorMessage, __LINE__);
        }
        $this->MidocoMyTaskViewQueue = $midocoMyTaskViewQueue;
        
        return $this;
    }
    /**
     * Add item to MidocoMyTaskViewQueue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewQueue $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewQueuesResponse
     */
    public function addToMidocoMyTaskViewQueue(\Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewQueue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewQueue) {
            throw new InvalidArgumentException(sprintf('The MidocoMyTaskViewQueue property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewQueue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMyTaskViewQueue[] = $item;
        
        return $this;
    }
}
