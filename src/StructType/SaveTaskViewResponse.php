<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTaskViewResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTaskViewResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskView
     * Meta information extracted from the WSDL
     * - ref: MidocoTaskView
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $MidocoTaskView = null;
    /**
     * Constructor method for SaveTaskViewResponse
     * @uses SaveTaskViewResponse::setMidocoTaskView()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView = null)
    {
        $this
            ->setMidocoTaskView($midocoTaskView);
    }
    /**
     * Get MidocoTaskView value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView|null
     */
    public function getMidocoTaskView(): ?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
    {
        return $this->MidocoTaskView;
    }
    /**
     * Set MidocoTaskView value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveTaskViewResponse
     */
    public function setMidocoTaskView(?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView = null): self
    {
        $this->MidocoTaskView = $midocoTaskView;
        
        return $this;
    }
}
