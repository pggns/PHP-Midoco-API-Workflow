<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskPriorityDTO StructType
 * @subpackage Structs
 */
class TaskPriorityDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The levelId
     * @var int|null
     */
    protected ?int $levelId = null;
    /**
     * Constructor method for TaskPriorityDTO
     * @uses TaskPriorityDTO::setDescription()
     * @uses TaskPriorityDTO::setLevelId()
     * @param string $description
     * @param int $levelId
     */
    public function __construct(?string $description = null, ?int $levelId = null)
    {
        $this
            ->setDescription($description)
            ->setLevelId($levelId);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get levelId value
     * @return int|null
     */
    public function getLevelId(): ?int
    {
        return $this->levelId;
    }
    /**
     * Set levelId value
     * @param int $levelId
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskPriorityDTO
     */
    public function setLevelId(?int $levelId = null): self
    {
        // validation for constraint: int
        if (!is_null($levelId) && !(is_int($levelId) || ctype_digit($levelId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($levelId, true), gettype($levelId)), __LINE__);
        }
        $this->levelId = $levelId;
        
        return $this;
    }
}
