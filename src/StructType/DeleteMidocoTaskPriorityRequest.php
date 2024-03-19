<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoTaskPriorityRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoTaskPriorityRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskPriority
     * Meta information extracted from the WSDL
     * - ref: MidocoTaskPriority
     * @var \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO $MidocoTaskPriority = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * The checkReferences
     * @var bool|null
     */
    protected ?bool $checkReferences = null;
    /**
     * Constructor method for DeleteMidocoTaskPriorityRequest
     * @uses DeleteMidocoTaskPriorityRequest::setMidocoTaskPriority()
     * @uses DeleteMidocoTaskPriorityRequest::setOrgunit()
     * @uses DeleteMidocoTaskPriorityRequest::setCheckReferences()
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO $midocoTaskPriority
     * @param string $orgunit
     * @param bool $checkReferences
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO $midocoTaskPriority = null, ?string $orgunit = null, ?bool $checkReferences = null)
    {
        $this
            ->setMidocoTaskPriority($midocoTaskPriority)
            ->setOrgunit($orgunit)
            ->setCheckReferences($checkReferences);
    }
    /**
     * Get MidocoTaskPriority value
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO|null
     */
    public function getMidocoTaskPriority(): ?\Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO
    {
        return $this->MidocoTaskPriority;
    }
    /**
     * Set MidocoTaskPriority value
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO $midocoTaskPriority
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskPriorityRequest
     */
    public function setMidocoTaskPriority(?\Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO $midocoTaskPriority = null): self
    {
        $this->MidocoTaskPriority = $midocoTaskPriority;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskPriorityRequest
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
     * Get checkReferences value
     * @return bool|null
     */
    public function getCheckReferences(): ?bool
    {
        return $this->checkReferences;
    }
    /**
     * Set checkReferences value
     * @param bool $checkReferences
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskPriorityRequest
     */
    public function setCheckReferences(?bool $checkReferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkReferences) && !is_bool($checkReferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkReferences, true), gettype($checkReferences)), __LINE__);
        }
        $this->checkReferences = $checkReferences;
        
        return $this;
    }
}
