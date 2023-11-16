<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for taskViewColumns StructType
 * @subpackage Structs
 */
class TaskViewColumns extends AbstractStructBase
{
    /**
     * The columnName
     * @var string|null
     */
    protected ?string $columnName = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The sortOrder
     * @var int|null
     */
    protected ?int $sortOrder = null;
    /**
     * Constructor method for taskViewColumns
     * @uses TaskViewColumns::setColumnName()
     * @uses TaskViewColumns::setPosition()
     * @uses TaskViewColumns::setSortOrder()
     * @param string $columnName
     * @param int $position
     * @param int $sortOrder
     */
    public function __construct(?string $columnName = null, ?int $position = null, ?int $sortOrder = null)
    {
        $this
            ->setColumnName($columnName)
            ->setPosition($position)
            ->setSortOrder($sortOrder);
    }
    /**
     * Get columnName value
     * @return string|null
     */
    public function getColumnName(): ?string
    {
        return $this->columnName;
    }
    /**
     * Set columnName value
     * @param string $columnName
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewColumns
     */
    public function setColumnName(?string $columnName = null): self
    {
        // validation for constraint: string
        if (!is_null($columnName) && !is_string($columnName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($columnName, true), gettype($columnName)), __LINE__);
        }
        $this->columnName = $columnName;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewColumns
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get sortOrder value
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @param int $sortOrder
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskViewColumns
     */
    public function setSortOrder(?int $sortOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($sortOrder) && !(is_int($sortOrder) || ctype_digit($sortOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortOrder, true), gettype($sortOrder)), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        
        return $this;
    }
}
