<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskQueueAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskQueueAssignDTO extends AbstractStructBase
{
    /**
     * The taskQueueName
     * @var string|null
     */
    protected ?string $taskQueueName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for TaskQueueAssignDTO
     * @uses TaskQueueAssignDTO::setTaskQueueName()
     * @uses TaskQueueAssignDTO::setUnitName()
     * @param string $taskQueueName
     * @param string $unitName
     */
    public function __construct(?string $taskQueueName = null, ?string $unitName = null)
    {
        $this
            ->setTaskQueueName($taskQueueName)
            ->setUnitName($unitName);
    }
    /**
     * Get taskQueueName value
     * @return string|null
     */
    public function getTaskQueueName(): ?string
    {
        return $this->taskQueueName;
    }
    /**
     * Set taskQueueName value
     * @param string $taskQueueName
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskQueueAssignDTO
     */
    public function setTaskQueueName(?string $taskQueueName = null): self
    {
        // validation for constraint: string
        if (!is_null($taskQueueName) && !is_string($taskQueueName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskQueueName, true), gettype($taskQueueName)), __LINE__);
        }
        $this->taskQueueName = $taskQueueName;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskQueueAssignDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
