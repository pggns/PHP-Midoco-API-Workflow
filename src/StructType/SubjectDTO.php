<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubjectDTO StructType
 * @subpackage Structs
 */
class SubjectDTO extends AbstractStructBase
{
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The destroyed
     * @var bool|null
     */
    protected ?bool $destroyed = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The process
     * @var string|null
     */
    protected ?string $process = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The uservalue
     * @var string|null
     */
    protected ?string $uservalue = null;
    /**
     * The version
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * The workingTimestamp
     * @var string|null
     */
    protected ?string $workingTimestamp = null;
    /**
     * The workingUser
     * @var int|null
     */
    protected ?int $workingUser = null;
    /**
     * Constructor method for SubjectDTO
     * @uses SubjectDTO::setCreationUser()
     * @uses SubjectDTO::setDescription()
     * @uses SubjectDTO::setDestroyed()
     * @uses SubjectDTO::setId()
     * @uses SubjectDTO::setIsSpecialCustomer()
     * @uses SubjectDTO::setProcess()
     * @uses SubjectDTO::setType()
     * @uses SubjectDTO::setUnitName()
     * @uses SubjectDTO::setUservalue()
     * @uses SubjectDTO::setVersion()
     * @uses SubjectDTO::setWorkingTimestamp()
     * @uses SubjectDTO::setWorkingUser()
     * @param int $creationUser
     * @param string $description
     * @param bool $destroyed
     * @param int $id
     * @param bool $isSpecialCustomer
     * @param string $process
     * @param string $type
     * @param string $unitName
     * @param string $uservalue
     * @param int $version
     * @param string $workingTimestamp
     * @param int $workingUser
     */
    public function __construct(?int $creationUser = null, ?string $description = null, ?bool $destroyed = null, ?int $id = null, ?bool $isSpecialCustomer = null, ?string $process = null, ?string $type = null, ?string $unitName = null, ?string $uservalue = null, ?int $version = null, ?string $workingTimestamp = null, ?int $workingUser = null)
    {
        $this
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setDestroyed($destroyed)
            ->setId($id)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setProcess($process)
            ->setType($type)
            ->setUnitName($unitName)
            ->setUservalue($uservalue)
            ->setVersion($version)
            ->setWorkingTimestamp($workingTimestamp)
            ->setWorkingUser($workingUser);
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
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
     * Get destroyed value
     * @return bool|null
     */
    public function getDestroyed(): ?bool
    {
        return $this->destroyed;
    }
    /**
     * Set destroyed value
     * @param bool $destroyed
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
     */
    public function setDestroyed(?bool $destroyed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($destroyed) && !is_bool($destroyed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($destroyed, true), gettype($destroyed)), __LINE__);
        }
        $this->destroyed = $destroyed;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
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
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
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
    /**
     * Get uservalue value
     * @return string|null
     */
    public function getUservalue(): ?string
    {
        return $this->uservalue;
    }
    /**
     * Set uservalue value
     * @param string $uservalue
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
     */
    public function setUservalue(?string $uservalue = null): self
    {
        // validation for constraint: string
        if (!is_null($uservalue) && !is_string($uservalue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uservalue, true), gettype($uservalue)), __LINE__);
        }
        $this->uservalue = $uservalue;
        
        return $this;
    }
    /**
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get workingTimestamp value
     * @return string|null
     */
    public function getWorkingTimestamp(): ?string
    {
        return $this->workingTimestamp;
    }
    /**
     * Set workingTimestamp value
     * @param string $workingTimestamp
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
     */
    public function setWorkingTimestamp(?string $workingTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($workingTimestamp) && !is_string($workingTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingTimestamp, true), gettype($workingTimestamp)), __LINE__);
        }
        $this->workingTimestamp = $workingTimestamp;
        
        return $this;
    }
    /**
     * Get workingUser value
     * @return int|null
     */
    public function getWorkingUser(): ?int
    {
        return $this->workingUser;
    }
    /**
     * Set workingUser value
     * @param int $workingUser
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectDTO
     */
    public function setWorkingUser(?int $workingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($workingUser) && !(is_int($workingUser) || ctype_digit($workingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workingUser, true), gettype($workingUser)), __LINE__);
        }
        $this->workingUser = $workingUser;
        
        return $this;
    }
}
