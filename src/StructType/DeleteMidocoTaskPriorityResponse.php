<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoTaskPriorityResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoTaskPriorityResponse extends AbstractStructBase
{
    /**
     * The checkReferences
     * @var bool|null
     */
    protected ?bool $checkReferences = null;
    /**
     * Constructor method for DeleteMidocoTaskPriorityResponse
     * @uses DeleteMidocoTaskPriorityResponse::setCheckReferences()
     * @param bool $checkReferences
     */
    public function __construct(?bool $checkReferences = null)
    {
        $this
            ->setCheckReferences($checkReferences);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskPriorityResponse
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
