<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitNamesForTaskSearchResponse StructType
 * @subpackage Structs
 */
class GetUnitNamesForTaskSearchResponse extends AbstractStructBase
{
    /**
     * The unitNames
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $unitNames = [];
    /**
     * Constructor method for GetUnitNamesForTaskSearchResponse
     * @uses GetUnitNamesForTaskSearchResponse::setUnitNames()
     * @param string[] $unitNames
     */
    public function __construct(array $unitNames = [])
    {
        $this
            ->setUnitNames($unitNames);
    }
    /**
     * Get unitNames value
     * @return string[]
     */
    public function getUnitNames(): array
    {
        return $this->unitNames;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitNames method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNamesForArrayConstraintsFromSetUnitNames(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUnitNamesForTaskSearchResponseUnitNamesItem) {
            // validation for constraint: itemType
            if (!is_string($getUnitNamesForTaskSearchResponseUnitNamesItem)) {
                $invalidValues[] = is_object($getUnitNamesForTaskSearchResponseUnitNamesItem) ? get_class($getUnitNamesForTaskSearchResponseUnitNamesItem) : sprintf('%s(%s)', gettype($getUnitNamesForTaskSearchResponseUnitNamesItem), var_export($getUnitNamesForTaskSearchResponseUnitNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitNames value
     * @throws InvalidArgumentException
     * @param string[] $unitNames
     * @return \Pggns\MidocoApi\Workflow\StructType\GetUnitNamesForTaskSearchResponse
     */
    public function setUnitNames(array $unitNames = []): self
    {
        // validation for constraint: array
        if ('' !== ($unitNamesArrayErrorMessage = self::validateUnitNamesForArrayConstraintsFromSetUnitNames($unitNames))) {
            throw new InvalidArgumentException($unitNamesArrayErrorMessage, __LINE__);
        }
        $this->unitNames = $unitNames;
        
        return $this;
    }
    /**
     * Add item to unitNames value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetUnitNamesForTaskSearchResponse
     */
    public function addToUnitNames(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitNames[] = $item;
        
        return $this;
    }
}
