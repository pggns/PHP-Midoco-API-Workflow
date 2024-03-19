<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TimerDTO extends AbstractStructBase
{
    /**
     * The process
     * @var string|null
     */
    protected ?string $process = null;
    /**
     * The subject
     * @var int|null
     */
    protected ?int $subject = null;
    /**
     * The timeout
     * @var int|null
     */
    protected ?int $timeout = null;
    /**
     * Constructor method for TimerDTO
     * @uses TimerDTO::setProcess()
     * @uses TimerDTO::setSubject()
     * @uses TimerDTO::setTimeout()
     * @param string $process
     * @param int $subject
     * @param int $timeout
     */
    public function __construct(?string $process = null, ?int $subject = null, ?int $timeout = null)
    {
        $this
            ->setProcess($process)
            ->setSubject($subject)
            ->setTimeout($timeout);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TimerDTO
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
     * Get subject value
     * @return int|null
     */
    public function getSubject(): ?int
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param int $subject
     * @return \Pggns\MidocoApi\Workflow\StructType\TimerDTO
     */
    public function setSubject(?int $subject = null): self
    {
        // validation for constraint: int
        if (!is_null($subject) && !(is_int($subject) || ctype_digit($subject))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        
        return $this;
    }
    /**
     * Get timeout value
     * @return int|null
     */
    public function getTimeout(): ?int
    {
        return $this->timeout;
    }
    /**
     * Set timeout value
     * @param int $timeout
     * @return \Pggns\MidocoApi\Workflow\StructType\TimerDTO
     */
    public function setTimeout(?int $timeout = null): self
    {
        // validation for constraint: int
        if (!is_null($timeout) && !(is_int($timeout) || ctype_digit($timeout))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeout, true), gettype($timeout)), __LINE__);
        }
        $this->timeout = $timeout;
        
        return $this;
    }
}
