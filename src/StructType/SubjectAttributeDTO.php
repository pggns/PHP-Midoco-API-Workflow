<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubjectAttributeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SubjectAttributeDTO extends AbstractStructBase
{
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
    /**
     * The attrValue
     * @var string|null
     */
    protected ?string $attrValue = null;
    /**
     * The subject
     * @var int|null
     */
    protected ?int $subject = null;
    /**
     * Constructor method for SubjectAttributeDTO
     * @uses SubjectAttributeDTO::setAttrName()
     * @uses SubjectAttributeDTO::setAttrValue()
     * @uses SubjectAttributeDTO::setSubject()
     * @param string $attrName
     * @param string $attrValue
     * @param int $subject
     */
    public function __construct(?string $attrName = null, ?string $attrValue = null, ?int $subject = null)
    {
        $this
            ->setAttrName($attrName)
            ->setAttrValue($attrValue)
            ->setSubject($subject);
    }
    /**
     * Get attrName value
     * @return string|null
     */
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }
    /**
     * Set attrName value
     * @param string $attrName
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectAttributeDTO
     */
    public function setAttrName(?string $attrName = null): self
    {
        // validation for constraint: string
        if (!is_null($attrName) && !is_string($attrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrName, true), gettype($attrName)), __LINE__);
        }
        $this->attrName = $attrName;
        
        return $this;
    }
    /**
     * Get attrValue value
     * @return string|null
     */
    public function getAttrValue(): ?string
    {
        return $this->attrValue;
    }
    /**
     * Set attrValue value
     * @param string $attrValue
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectAttributeDTO
     */
    public function setAttrValue(?string $attrValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attrValue) && !is_string($attrValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrValue, true), gettype($attrValue)), __LINE__);
        }
        $this->attrValue = $attrValue;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SubjectAttributeDTO
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
