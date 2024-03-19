<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMfGroupRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMfGroupRequest extends AbstractStructBase
{
    /**
     * The MidocoMfGroup
     * Meta information extracted from the WSDL
     * - ref: MidocoMfGroup
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoMfGroup|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\MidocoMfGroup $MidocoMfGroup = null;
    /**
     * Constructor method for SaveMfGroupRequest
     * @uses SaveMfGroupRequest::setMidocoMfGroup()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMfGroup $midocoMfGroup
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\MidocoMfGroup $midocoMfGroup = null)
    {
        $this
            ->setMidocoMfGroup($midocoMfGroup);
    }
    /**
     * Get MidocoMfGroup value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoMfGroup|null
     */
    public function getMidocoMfGroup(): ?\Pggns\MidocoApi\Workflow\StructType\MidocoMfGroup
    {
        return $this->MidocoMfGroup;
    }
    /**
     * Set MidocoMfGroup value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMfGroup $midocoMfGroup
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMfGroupRequest
     */
    public function setMidocoMfGroup(?\Pggns\MidocoApi\Workflow\StructType\MidocoMfGroup $midocoMfGroup = null): self
    {
        $this->MidocoMfGroup = $midocoMfGroup;
        
        return $this;
    }
}
