<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskViewStatusResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskViewStatusResponse extends AbstractStructBase
{
    /**
     * The isRefresh
     * @var bool|null
     */
    protected ?bool $isRefresh = null;
    /**
     * Constructor method for GetTaskViewStatusResponse
     * @uses GetTaskViewStatusResponse::setIsRefresh()
     * @param bool $isRefresh
     */
    public function __construct(?bool $isRefresh = null)
    {
        $this
            ->setIsRefresh($isRefresh);
    }
    /**
     * Get isRefresh value
     * @return bool|null
     */
    public function getIsRefresh(): ?bool
    {
        return $this->isRefresh;
    }
    /**
     * Set isRefresh value
     * @param bool $isRefresh
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewStatusResponse
     */
    public function setIsRefresh(?bool $isRefresh = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRefresh) && !is_bool($isRefresh)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRefresh, true), gettype($isRefresh)), __LINE__);
        }
        $this->isRefresh = $isRefresh;
        
        return $this;
    }
}
