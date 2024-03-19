<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTaskResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: deleteTask --- return the action result
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTaskResponse extends AbstractStructBase
{
    /**
     * The numberOfDeleted
     * @var int|null
     */
    protected ?int $numberOfDeleted = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for DeleteTaskResponse
     * @uses DeleteTaskResponse::setNumberOfDeleted()
     * @uses DeleteTaskResponse::setStatus()
     * @param int $numberOfDeleted
     * @param string $status
     */
    public function __construct(?int $numberOfDeleted = null, ?string $status = null)
    {
        $this
            ->setNumberOfDeleted($numberOfDeleted)
            ->setStatus($status);
    }
    /**
     * Get numberOfDeleted value
     * @return int|null
     */
    public function getNumberOfDeleted(): ?int
    {
        return $this->numberOfDeleted;
    }
    /**
     * Set numberOfDeleted value
     * @param int $numberOfDeleted
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteTaskResponse
     */
    public function setNumberOfDeleted(?int $numberOfDeleted = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfDeleted) && !(is_int($numberOfDeleted) || ctype_digit($numberOfDeleted))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfDeleted, true), gettype($numberOfDeleted)), __LINE__);
        }
        $this->numberOfDeleted = $numberOfDeleted;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteTaskResponse
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
