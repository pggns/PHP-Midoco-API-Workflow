<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDocumentNatureRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDocumentNatureRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNature
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNature
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoDocumentNatureType|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\MidocoDocumentNatureType $MidocoDocumentNature = null;
    /**
     * Constructor method for DeleteDocumentNatureRequest
     * @uses DeleteDocumentNatureRequest::setMidocoDocumentNature()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoDocumentNatureType $midocoDocumentNature
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\MidocoDocumentNatureType $midocoDocumentNature = null)
    {
        $this
            ->setMidocoDocumentNature($midocoDocumentNature);
    }
    /**
     * Get MidocoDocumentNature value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoDocumentNatureType|null
     */
    public function getMidocoDocumentNature(): ?\Pggns\MidocoApi\Workflow\StructType\MidocoDocumentNatureType
    {
        return $this->MidocoDocumentNature;
    }
    /**
     * Set MidocoDocumentNature value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoDocumentNatureType $midocoDocumentNature
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteDocumentNatureRequest
     */
    public function setMidocoDocumentNature(?\Pggns\MidocoApi\Workflow\StructType\MidocoDocumentNatureType $midocoDocumentNature = null): self
    {
        $this->MidocoDocumentNature = $midocoDocumentNature;
        
        return $this;
    }
}
