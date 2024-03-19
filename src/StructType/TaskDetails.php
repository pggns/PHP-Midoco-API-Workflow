<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskDetails StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaskDetails extends Task
{
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
     * The isNotice
     * @var bool|null
     */
    protected ?bool $isNotice = null;
    /**
     * The creationOrgunit
     * @var string|null
     */
    protected ?string $creationOrgunit = null;
    /**
     * The deletable
     * @var bool|null
     */
    protected ?bool $deletable = null;
    /**
     * The origin
     * @var int|null
     */
    protected ?int $origin = null;
    /**
     * Constructor method for TaskDetails
     * @uses TaskDetails::setCreationUser()
     * @uses TaskDetails::setWarningLevel()
     * @uses TaskDetails::setIsNotice()
     * @uses TaskDetails::setCreationOrgunit()
     * @uses TaskDetails::setDeletable()
     * @uses TaskDetails::setOrigin()
     * @param string $creationUser
     * @param int $warningLevel
     * @param bool $isNotice
     * @param string $creationOrgunit
     * @param bool $deletable
     * @param int $origin
     */
    public function __construct(?string $creationUser = null, ?int $warningLevel = null, ?bool $isNotice = null, ?string $creationOrgunit = null, ?bool $deletable = null, ?int $origin = null)
    {
        $this
            ->setCreationUser($creationUser)
            ->setWarningLevel($warningLevel)
            ->setIsNotice($isNotice)
            ->setCreationOrgunit($creationOrgunit)
            ->setDeletable($deletable)
            ->setOrigin($origin);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDetails
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
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDetails
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
    /**
     * Get isNotice value
     * @return bool|null
     */
    public function getIsNotice(): ?bool
    {
        return $this->isNotice;
    }
    /**
     * Set isNotice value
     * @param bool $isNotice
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDetails
     */
    public function setIsNotice(?bool $isNotice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNotice) && !is_bool($isNotice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNotice, true), gettype($isNotice)), __LINE__);
        }
        $this->isNotice = $isNotice;
        
        return $this;
    }
    /**
     * Get creationOrgunit value
     * @return string|null
     */
    public function getCreationOrgunit(): ?string
    {
        return $this->creationOrgunit;
    }
    /**
     * Set creationOrgunit value
     * @param string $creationOrgunit
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDetails
     */
    public function setCreationOrgunit(?string $creationOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($creationOrgunit) && !is_string($creationOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationOrgunit, true), gettype($creationOrgunit)), __LINE__);
        }
        $this->creationOrgunit = $creationOrgunit;
        
        return $this;
    }
    /**
     * Get deletable value
     * @return bool|null
     */
    public function getDeletable(): ?bool
    {
        return $this->deletable;
    }
    /**
     * Set deletable value
     * @param bool $deletable
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDetails
     */
    public function setDeletable(?bool $deletable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deletable) && !is_bool($deletable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deletable, true), gettype($deletable)), __LINE__);
        }
        $this->deletable = $deletable;
        
        return $this;
    }
    /**
     * Get origin value
     * @return int|null
     */
    public function getOrigin(): ?int
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param int $origin
     * @return \Pggns\MidocoApi\Workflow\StructType\TaskDetails
     */
    public function setOrigin(?int $origin = null): self
    {
        // validation for constraint: int
        if (!is_null($origin) && !(is_int($origin) || ctype_digit($origin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        
        return $this;
    }
}
