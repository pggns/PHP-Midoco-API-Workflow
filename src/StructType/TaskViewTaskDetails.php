<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskViewTaskDetails StructType
 * @subpackage Structs
 */
class TaskViewTaskDetails extends Task
{
    /**
     * The dynamicColumn
     * @var string|null
     */
    protected ?string $dynamicColumn = null;
    /**
     * The creationUser
     * @var string|null
     */
    protected ?string $creationUser = null;
    /**
     * The warningLevel
     * @var int|null
     */
    protected ?int $warningLevel = null;
    /**
     * Constructor method for TaskViewTaskDetails
     * @uses TaskViewTaskDetails::setDynamicColumn()
     * @uses TaskViewTaskDetails::setCreationUser()
     * @uses TaskViewTaskDetails::setWarningLevel()
     * @param string $dynamicColumn
     * @param string $creationUser
     * @param int $warningLevel
     */
    public function __construct(?string $dynamicColumn = null, ?string $creationUser = null, ?int $warningLevel = null)
    {
        $this
            ->setDynamicColumn($dynamicColumn)
            ->setCreationUser($creationUser)
            ->setWarningLevel($warningLevel);
    }
    /**
     * Get dynamicColumn value
     * @return string|null
     */
    public function getDynamicColumn(): ?string
    {
        return $this->dynamicColumn;
    }
    /**
     * Set dynamicColumn value
     * @param string $dynamicColumn
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewTaskDetails
     */
    public function setDynamicColumn(?string $dynamicColumn = null): self
    {
        // validation for constraint: string
        if (!is_null($dynamicColumn) && !is_string($dynamicColumn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dynamicColumn, true), gettype($dynamicColumn)), __LINE__);
        }
        $this->dynamicColumn = $dynamicColumn;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return string|null
     */
    public function getCreationUser(): ?string
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param string $creationUser
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewTaskDetails
     */
    public function setCreationUser(?string $creationUser = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUser) && !is_string($creationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get warningLevel value
     * @return int|null
     */
    public function getWarningLevel(): ?int
    {
        return $this->warningLevel;
    }
    /**
     * Set warningLevel value
     * @param int $warningLevel
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewTaskDetails
     */
    public function setWarningLevel(?int $warningLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($warningLevel) && !(is_int($warningLevel) || ctype_digit($warningLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($warningLevel, true), gettype($warningLevel)), __LINE__);
        }
        $this->warningLevel = $warningLevel;
        
        return $this;
    }
}
