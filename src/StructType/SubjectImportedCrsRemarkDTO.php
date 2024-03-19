<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubjectImportedCrsRemarkDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SubjectImportedCrsRemarkDTO extends AbstractStructBase
{
    /**
     * The importCrs
     * @var string|null
     */
    protected ?string $importCrs = null;
    /**
     * The importTimestamp
     * @var string|null
     */
    protected ?string $importTimestamp = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The subject
     * @var int|null
     */
    protected ?int $subject = null;
    /**
     * Constructor method for SubjectImportedCrsRemarkDTO
     * @uses SubjectImportedCrsRemarkDTO::setImportCrs()
     * @uses SubjectImportedCrsRemarkDTO::setImportTimestamp()
     * @uses SubjectImportedCrsRemarkDTO::setPosition()
     * @uses SubjectImportedCrsRemarkDTO::setRemark()
     * @uses SubjectImportedCrsRemarkDTO::setSubject()
     * @param string $importCrs
     * @param string $importTimestamp
     * @param int $position
     * @param string $remark
     * @param int $subject
     */
    public function __construct(?string $importCrs = null, ?string $importTimestamp = null, ?int $position = null, ?string $remark = null, ?int $subject = null)
    {
        $this
            ->setImportCrs($importCrs)
            ->setImportTimestamp($importTimestamp)
            ->setPosition($position)
            ->setRemark($remark)
            ->setSubject($subject);
    }
    /**
     * Get importCrs value
     * @return string|null
     */
    public function getImportCrs(): ?string
    {
        return $this->importCrs;
    }
    /**
     * Set importCrs value
     * @param string $importCrs
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectImportedCrsRemarkDTO
     */
    public function setImportCrs(?string $importCrs = null): self
    {
        // validation for constraint: string
        if (!is_null($importCrs) && !is_string($importCrs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importCrs, true), gettype($importCrs)), __LINE__);
        }
        $this->importCrs = $importCrs;
        
        return $this;
    }
    /**
     * Get importTimestamp value
     * @return string|null
     */
    public function getImportTimestamp(): ?string
    {
        return $this->importTimestamp;
    }
    /**
     * Set importTimestamp value
     * @param string $importTimestamp
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectImportedCrsRemarkDTO
     */
    public function setImportTimestamp(?string $importTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($importTimestamp) && !is_string($importTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importTimestamp, true), gettype($importTimestamp)), __LINE__);
        }
        $this->importTimestamp = $importTimestamp;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectImportedCrsRemarkDTO
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
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectImportedCrsRemarkDTO
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectImportedCrsRemarkDTO
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
}
