<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMfRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for SaveMfRequest
     * @uses SaveMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\Workflow\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\Workflow\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
