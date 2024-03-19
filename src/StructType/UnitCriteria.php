<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UnitCriteria extends AbstractStructBase
{
    /**
     * The creationOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $creationOrgunit = null;
    /**
     * The delegateOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $delegateOrgunit = null;
    /**
     * The negateDelegateOrgunit
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $negateDelegateOrgunit = null;
    /**
     * Constructor method for UnitCriteria
     * @uses UnitCriteria::setCreationOrgunit()
     * @uses UnitCriteria::setDelegateOrgunit()
     * @uses UnitCriteria::setNegateDelegateOrgunit()
     * @param string[] $creationOrgunit
     * @param string[] $delegateOrgunit
     * @param bool $negateDelegateOrgunit
     */
    public function __construct(?array $creationOrgunit = null, ?array $delegateOrgunit = null, ?bool $negateDelegateOrgunit = false)
    {
        $this
            ->setCreationOrgunit($creationOrgunit)
            ->setDelegateOrgunit($delegateOrgunit)
            ->setNegateDelegateOrgunit($negateDelegateOrgunit);
    }
    /**
     * Get creationOrgunit value
     * @return string[]
     */
    public function getCreationOrgunit(): ?array
    {
        return $this->creationOrgunit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCreationOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreationOrgunit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreationOrgunitForArrayConstraintFromSetCreationOrgunit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $unitCriteriaCreationOrgunitItem) {
            // validation for constraint: itemType
            if (!is_string($unitCriteriaCreationOrgunitItem)) {
                $invalidValues[] = is_object($unitCriteriaCreationOrgunitItem) ? get_class($unitCriteriaCreationOrgunitItem) : sprintf('%s(%s)', gettype($unitCriteriaCreationOrgunitItem), var_export($unitCriteriaCreationOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The creationOrgunit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set creationOrgunit value
     * @throws InvalidArgumentException
     * @param string[] $creationOrgunit
     * @return \Pggns\MidocoApi\Workflow\StructType\UnitCriteria
     */
    public function setCreationOrgunit(?array $creationOrgunit = null): self
    {
        // validation for constraint: array
        if ('' !== ($creationOrgunitArrayErrorMessage = self::validateCreationOrgunitForArrayConstraintFromSetCreationOrgunit($creationOrgunit))) {
            throw new InvalidArgumentException($creationOrgunitArrayErrorMessage, __LINE__);
        }
        $this->creationOrgunit = $creationOrgunit;
        
        return $this;
    }
    /**
     * Add item to creationOrgunit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\UnitCriteria
     */
    public function addToCreationOrgunit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The creationOrgunit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->creationOrgunit[] = $item;
        
        return $this;
    }
    /**
     * Get delegateOrgunit value
     * @return string[]
     */
    public function getDelegateOrgunit(): ?array
    {
        return $this->delegateOrgunit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDelegateOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDelegateOrgunit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDelegateOrgunitForArrayConstraintFromSetDelegateOrgunit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $unitCriteriaDelegateOrgunitItem) {
            // validation for constraint: itemType
            if (!is_string($unitCriteriaDelegateOrgunitItem)) {
                $invalidValues[] = is_object($unitCriteriaDelegateOrgunitItem) ? get_class($unitCriteriaDelegateOrgunitItem) : sprintf('%s(%s)', gettype($unitCriteriaDelegateOrgunitItem), var_export($unitCriteriaDelegateOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The delegateOrgunit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set delegateOrgunit value
     * @throws InvalidArgumentException
     * @param string[] $delegateOrgunit
     * @return \Pggns\MidocoApi\Workflow\StructType\UnitCriteria
     */
    public function setDelegateOrgunit(?array $delegateOrgunit = null): self
    {
        // validation for constraint: array
        if ('' !== ($delegateOrgunitArrayErrorMessage = self::validateDelegateOrgunitForArrayConstraintFromSetDelegateOrgunit($delegateOrgunit))) {
            throw new InvalidArgumentException($delegateOrgunitArrayErrorMessage, __LINE__);
        }
        $this->delegateOrgunit = $delegateOrgunit;
        
        return $this;
    }
    /**
     * Add item to delegateOrgunit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\UnitCriteria
     */
    public function addToDelegateOrgunit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The delegateOrgunit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->delegateOrgunit[] = $item;
        
        return $this;
    }
    /**
     * Get negateDelegateOrgunit value
     * @return bool|null
     */
    public function getNegateDelegateOrgunit(): ?bool
    {
        return $this->negateDelegateOrgunit;
    }
    /**
     * Set negateDelegateOrgunit value
     * @param bool $negateDelegateOrgunit
     * @return \Pggns\MidocoApi\Workflow\StructType\UnitCriteria
     */
    public function setNegateDelegateOrgunit(?bool $negateDelegateOrgunit = false): self
    {
        // validation for constraint: boolean
        if (!is_null($negateDelegateOrgunit) && !is_bool($negateDelegateOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($negateDelegateOrgunit, true), gettype($negateDelegateOrgunit)), __LINE__);
        }
        $this->negateDelegateOrgunit = $negateDelegateOrgunit;
        
        return $this;
    }
}
