<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTaskAttribute StructType
 * @subpackage Structs
 */
class MidocoTaskAttribute extends AbstractStructBase
{
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
    /**
     * The attrDescription
     * @var string|null
     */
    protected ?string $attrDescription = null;
    /**
     * The attrValue
     * @var string|null
     */
    protected ?string $attrValue = null;
    /**
     * Constructor method for MidocoTaskAttribute
     * @uses MidocoTaskAttribute::setAttrName()
     * @uses MidocoTaskAttribute::setAttrDescription()
     * @uses MidocoTaskAttribute::setAttrValue()
     * @param string $attrName
     * @param string $attrDescription
     * @param string $attrValue
     */
    public function __construct(?string $attrName = null, ?string $attrDescription = null, ?string $attrValue = null)
    {
        $this
            ->setAttrName($attrName)
            ->setAttrDescription($attrDescription)
            ->setAttrValue($attrValue);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute
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
     * Get attrDescription value
     * @return string|null
     */
    public function getAttrDescription(): ?string
    {
        return $this->attrDescription;
    }
    /**
     * Set attrDescription value
     * @param string $attrDescription
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute
     */
    public function setAttrDescription(?string $attrDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($attrDescription) && !is_string($attrDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrDescription, true), gettype($attrDescription)), __LINE__);
        }
        $this->attrDescription = $attrDescription;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskAttribute
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
}
