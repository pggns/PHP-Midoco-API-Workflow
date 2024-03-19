<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSftpCredentialRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSftpCredentialRequest extends AbstractStructBase
{
    /**
     * The MidocoSftpCredential
     * Meta information extracted from the WSDL
     * - ref: MidocoSftpCredential
     * @var \Pggns\MidocoApi\Workflow\StructType\SftpCredentialDTO|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\SftpCredentialDTO $MidocoSftpCredential = null;
    /**
     * Constructor method for DeleteSftpCredentialRequest
     * @uses DeleteSftpCredentialRequest::setMidocoSftpCredential()
     * @param \Pggns\MidocoApi\Workflow\StructType\SftpCredentialDTO $midocoSftpCredential
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\SftpCredentialDTO $midocoSftpCredential = null)
    {
        $this
            ->setMidocoSftpCredential($midocoSftpCredential);
    }
    /**
     * Get MidocoSftpCredential value
     * @return \Pggns\MidocoApi\Workflow\StructType\SftpCredentialDTO|null
     */
    public function getMidocoSftpCredential(): ?\Pggns\MidocoApi\Workflow\StructType\SftpCredentialDTO
    {
        return $this->MidocoSftpCredential;
    }
    /**
     * Set MidocoSftpCredential value
     * @param \Pggns\MidocoApi\Workflow\StructType\SftpCredentialDTO $midocoSftpCredential
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteSftpCredentialRequest
     */
    public function setMidocoSftpCredential(?\Pggns\MidocoApi\Workflow\StructType\SftpCredentialDTO $midocoSftpCredential = null): self
    {
        $this->MidocoSftpCredential = $midocoSftpCredential;
        
        return $this;
    }
}
