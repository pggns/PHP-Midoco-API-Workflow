<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskOverviewRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskOverviewRequest extends AbstractStructBase
{
    /**
     * The TaskOverviewCriteria
     * Meta information extracted from the WSDL
     * - ref: TaskOverviewCriteria
     * @var \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $TaskOverviewCriteria = null;
    /**
     * Constructor method for GetTaskOverviewRequest
     * @uses GetTaskOverviewRequest::setTaskOverviewCriteria()
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria = null)
    {
        $this
            ->setTaskOverviewCriteria($taskOverviewCriteria);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskOverviewRequest
     */
    public function setTaskOverviewCriteria(?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria = null): self
    {
        $this->TaskOverviewCriteria = $taskOverviewCriteria;
        
        return $this;
    }
}
