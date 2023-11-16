<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkflowCreateRequest StructType
 * @subpackage Structs
 */
class WorkflowCreateRequest extends AbstractStructBase
{
    /**
     * The process
     * @var string|null
     */
    protected ?string $process = null;
    /**
     * The user_value
     * @var string|null
     */
    protected ?string $user_value = null;
    /**
     * Constructor method for WorkflowCreateRequest
     * @uses WorkflowCreateRequest::setProcess()
     * @uses WorkflowCreateRequest::setUser_value()
     * @param string $process
     * @param string $user_value
     */
    public function __construct(?string $process = null, ?string $user_value = null)
    {
        $this
            ->setProcess($process)
            ->setUser_value($user_value);
    }
    /**
     * Get process value
     * @return string|null
     */
    public function getProcess(): ?string
    {
        return $this->process;
    }
    /**
     * Set process value
     * @param string $process
     * @return \Pggns\MidocoApi\Workflow\StructType\WorkflowCreateRequest
     */
    public function setProcess(?string $process = null): self
    {
        // validation for constraint: string
        if (!is_null($process) && !is_string($process)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($process, true), gettype($process)), __LINE__);
        }
        $this->process = $process;
        
        return $this;
    }
    /**
     * Get user_value value
     * @return string|null
     */
    public function getUser_value(): ?string
    {
        return $this->user_value;
    }
    /**
     * Set user_value value
     * @param string $user_value
     * @return \Pggns\MidocoApi\Workflow\StructType\WorkflowCreateRequest
     */
    public function setUser_value(?string $user_value = null): self
    {
        // validation for constraint: string
        if (!is_null($user_value) && !is_string($user_value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user_value, true), gettype($user_value)), __LINE__);
        }
        $this->user_value = $user_value;
        
        return $this;
    }
}
