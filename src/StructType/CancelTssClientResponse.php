<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelTssClientResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelTssClientResponse extends TssApiErrorConveyingResponse
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for CancelTssClientResponse
     * @uses CancelTssClientResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\Workflow\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\Workflow\StructType\CancelTssClientResponse
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Workflow\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
