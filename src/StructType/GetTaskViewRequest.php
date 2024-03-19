<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskViewRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskViewRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskView
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoTaskView
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
     */
    protected \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $MidocoTaskView;
    /**
     * The isMasterData
     * Meta information extracted from the WSDL
     * - documentation: flag should be set if its invocation comes from the masterdata
     * @var bool|null
     */
    protected ?bool $isMasterData = null;
    /**
     * Constructor method for GetTaskViewRequest
     * @uses GetTaskViewRequest::setMidocoTaskView()
     * @uses GetTaskViewRequest::setIsMasterData()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView
     * @param bool $isMasterData
     */
    public function __construct(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView, ?bool $isMasterData = null)
    {
        $this
            ->setMidocoTaskView($midocoTaskView)
            ->setIsMasterData($isMasterData);
    }
    /**
     * Get MidocoTaskView value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
     */
    public function getMidocoTaskView(): \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView
    {
        return $this->MidocoTaskView;
    }
    /**
     * Set MidocoTaskView value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewRequest
     */
    public function setMidocoTaskView(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView): self
    {
        $this->MidocoTaskView = $midocoTaskView;
        
        return $this;
    }
    /**
     * Get isMasterData value
     * @return bool|null
     */
    public function getIsMasterData(): ?bool
    {
        return $this->isMasterData;
    }
    /**
     * Set isMasterData value
     * @param bool $isMasterData
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewRequest
     */
    public function setIsMasterData(?bool $isMasterData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMasterData) && !is_bool($isMasterData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMasterData, true), gettype($isMasterData)), __LINE__);
        }
        $this->isMasterData = $isMasterData;
        
        return $this;
    }
}
