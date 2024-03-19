<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskViewSingleContext StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskViewSingleContext extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The count
     * @var int|null
     */
    protected ?int $count = null;
    /**
     * The TaskOverviewCriteria
     * Meta information extracted from the WSDL
     * - ref: TaskOverviewCriteria
     * @var \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $TaskOverviewCriteria = null;
    /**
     * Constructor method for TaskViewSingleContext
     * @uses TaskViewSingleContext::setName()
     * @uses TaskViewSingleContext::setCount()
     * @uses TaskViewSingleContext::setTaskOverviewCriteria()
     * @param string $name
     * @param int $count
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria
     */
    public function __construct(?string $name = null, ?int $count = null, ?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria = null)
    {
        $this
            ->setName($name)
            ->setCount($count)
            ->setTaskOverviewCriteria($taskOverviewCriteria);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;
        
        return $this;
    }
    /**
     * Get TaskOverviewCriteria value
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria|null
     */
    public function getTaskOverviewCriteria(): ?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria
    {
        return $this->TaskOverviewCriteria;
    }
    /**
     * Set TaskOverviewCriteria value
     * @param \Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewSingleContext
     */
    public function setTaskOverviewCriteria(?\Pggns\MidocoApi\Workflow\StructType\TaskOverviewCriteria $taskOverviewCriteria = null): self
    {
        $this->TaskOverviewCriteria = $taskOverviewCriteria;
        
        return $this;
    }
}
