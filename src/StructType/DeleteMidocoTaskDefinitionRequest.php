<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoTaskDefinitionRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoTaskDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoTaskDefinition
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition $MidocoTaskDefinition = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * Constructor method for DeleteMidocoTaskDefinitionRequest
     * @uses DeleteMidocoTaskDefinitionRequest::setMidocoTaskDefinition()
     * @uses DeleteMidocoTaskDefinitionRequest::setOrgunit()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition $midocoTaskDefinition
     * @param string $orgunit
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition $midocoTaskDefinition = null, ?string $orgunit = null)
    {
        $this
            ->setMidocoTaskDefinition($midocoTaskDefinition)
            ->setOrgunit($orgunit);
    }
    /**
     * Get MidocoTaskDefinition value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition|null
     */
    public function getMidocoTaskDefinition(): ?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition
    {
        return $this->MidocoTaskDefinition;
    }
    /**
     * Set MidocoTaskDefinition value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition $midocoTaskDefinition
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionRequest
     */
    public function setMidocoTaskDefinition(?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition $midocoTaskDefinition = null): self
    {
        $this->MidocoTaskDefinition = $midocoTaskDefinition;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionRequest
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
