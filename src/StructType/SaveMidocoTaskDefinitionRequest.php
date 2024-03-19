<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoTaskDefinitionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoTaskDefinitionRequest extends AbstractStructBase
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
     * The isUpdate
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isUpdate = null;
    /**
     * Constructor method for SaveMidocoTaskDefinitionRequest
     * @uses SaveMidocoTaskDefinitionRequest::setMidocoTaskDefinition()
     * @uses SaveMidocoTaskDefinitionRequest::setOrgunit()
     * @uses SaveMidocoTaskDefinitionRequest::setIsUpdate()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition $midocoTaskDefinition
     * @param string $orgunit
     * @param bool $isUpdate
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition $midocoTaskDefinition = null, ?string $orgunit = null, ?bool $isUpdate = false)
    {
        $this
            ->setMidocoTaskDefinition($midocoTaskDefinition)
            ->setOrgunit($orgunit)
            ->setIsUpdate($isUpdate);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionRequest
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionRequest
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
