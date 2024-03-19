<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskCounterResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskCounterResponse extends AbstractStructBase
{
    /**
     * The counter
     * Meta information extracted from the WSDL
     * - default: 0
     * @var int|null
     */
    protected ?int $counter = null;
    /**
     * Constructor method for GetTaskCounterResponse
     * @uses GetTaskCounterResponse::setCounter()
     * @param int $counter
     */
    public function __construct(?int $counter = 0)
    {
        $this
            ->setCounter($counter);
    }
    /**
     * Get counter value
     * @return int|null
     */
    public function getCounter(): ?int
    {
        return $this->counter;
    }
    /**
     * Set counter value
     * @param int $counter
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskCounterResponse
     */
    public function setCounter(?int $counter = 0): self
    {
        // validation for constraint: int
        if (!is_null($counter) && !(is_int($counter) || ctype_digit($counter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($counter, true), gettype($counter)), __LINE__);
        }
        $this->counter = $counter;
        
        return $this;
    }
}
