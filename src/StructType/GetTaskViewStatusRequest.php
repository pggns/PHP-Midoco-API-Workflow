<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskViewStatusRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskViewStatusRequest extends AbstractStructBase
{
    /**
     * The TaskViewContext
     * Meta information extracted from the WSDL
     * - ref: TaskViewContext
     * @var \Pggns\MidocoApi\Workflow\StructType\TaskViewContext|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\TaskViewContext $TaskViewContext = null;
    /**
     * Constructor method for GetTaskViewStatusRequest
     * @uses GetTaskViewStatusRequest::setTaskViewContext()
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskViewContext $taskViewContext
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\TaskViewContext $taskViewContext = null)
    {
        $this
            ->setTaskViewContext($taskViewContext);
    }
    /**
     * Get TaskViewContext value
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewContext|null
     */
    public function getTaskViewContext(): ?\Pggns\MidocoApi\Workflow\StructType\TaskViewContext
    {
        return $this->TaskViewContext;
    }
    /**
     * Set TaskViewContext value
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskViewContext $taskViewContext
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewStatusRequest
     */
    public function setTaskViewContext(?\Pggns\MidocoApi\Workflow\StructType\TaskViewContext $taskViewContext = null): self
    {
        $this->TaskViewContext = $taskViewContext;
        
        return $this;
    }
}
