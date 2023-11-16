<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoTaskQueueRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoTaskQueueRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoTaskQueue
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue
     */
    protected \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $MidocoTaskQueue;
    /**
     * Constructor method for DeleteMidocoTaskQueueRequest
     * @uses DeleteMidocoTaskQueueRequest::setMidocoTaskQueue()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue
     */
    public function __construct(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue)
    {
        $this
            ->setMidocoTaskQueue($midocoTaskQueue);
    }
    /**
     * Get MidocoTaskQueue value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue
     */
    public function getMidocoTaskQueue(): \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue
    {
        return $this->MidocoTaskQueue;
    }
    /**
     * Set MidocoTaskQueue value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskQueueRequest
     */
    public function setMidocoTaskQueue(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue): self
    {
        $this->MidocoTaskQueue = $midocoTaskQueue;
        
        return $this;
    }
}
