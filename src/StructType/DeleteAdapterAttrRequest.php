<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAdapterAttrRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAdapterAttrRequest extends AbstractStructBase
{
    /**
     * The MidocoAdapterAttr
     * Meta information extracted from the WSDL
     * - ref: MidocoAdapterAttr
     * @var \Pggns\MidocoApi\Workflow\StructType\AdapterAttrDTO|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\AdapterAttrDTO $MidocoAdapterAttr = null;
    /**
     * Constructor method for DeleteAdapterAttrRequest
     * @uses DeleteAdapterAttrRequest::setMidocoAdapterAttr()
     * @param \Pggns\MidocoApi\Workflow\StructType\AdapterAttrDTO $midocoAdapterAttr
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\AdapterAttrDTO $midocoAdapterAttr = null)
    {
        $this
            ->setMidocoAdapterAttr($midocoAdapterAttr);
    }
    /**
     * Get MidocoAdapterAttr value
     * @return \Pggns\MidocoApi\Workflow\StructType\AdapterAttrDTO|null
     */
    public function getMidocoAdapterAttr(): ?\Pggns\MidocoApi\Workflow\StructType\AdapterAttrDTO
    {
        return $this->MidocoAdapterAttr;
    }
    /**
     * Set MidocoAdapterAttr value
     * @param \Pggns\MidocoApi\Workflow\StructType\AdapterAttrDTO $midocoAdapterAttr
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteAdapterAttrRequest
     */
    public function setMidocoAdapterAttr(?\Pggns\MidocoApi\Workflow\StructType\AdapterAttrDTO $midocoAdapterAttr = null): self
    {
        $this->MidocoAdapterAttr = $midocoAdapterAttr;
        
        return $this;
    }
}
