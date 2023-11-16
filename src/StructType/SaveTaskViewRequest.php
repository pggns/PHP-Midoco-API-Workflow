<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTaskViewRequest StructType
 * @subpackage Structs
 */
class SaveTaskViewRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskView
     * Meta information extracted from the WSDL
     * - ref: MidocoTaskView
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $MidocoTaskView = null;
    /**
     * The isUpdate
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isUpdate = null;
    /**
     * Constructor method for SaveTaskViewRequest
     * @uses SaveTaskViewRequest::setMidocoTaskView()
     * @uses SaveTaskViewRequest::setIsUpdate()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView
     * @param bool $isUpdate
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView = null, ?bool $isUpdate = false)
    {
        $this
            ->setMidocoTaskView($midocoTaskView)
            ->setIsUpdate($isUpdate);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveTaskViewRequest
     */
    public function setMidocoTaskView(?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskView $midocoTaskView = null): self
    {
        $this->MidocoTaskView = $midocoTaskView;
        
        return $this;
    }
    /**
     * Get isUpdate value
     * @return bool|null
     */
    public function getIsUpdate(): ?bool
    {
        return $this->isUpdate;
    }
    /**
     * Set isUpdate value
     * @param bool $isUpdate
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveTaskViewRequest
     */
    public function setIsUpdate(?bool $isUpdate = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isUpdate) && !is_bool($isUpdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUpdate, true), gettype($isUpdate)), __LINE__);
        }
        $this->isUpdate = $isUpdate;
        
        return $this;
    }
}
