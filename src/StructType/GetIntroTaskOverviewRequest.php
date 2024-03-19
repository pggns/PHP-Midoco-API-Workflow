<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIntroTaskOverviewRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetIntroTaskOverviewRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unitName = null;
    /**
     * The timeLimit
     * @var string|null
     */
    protected ?string $timeLimit = null;
    /**
     * Constructor method for GetIntroTaskOverviewRequest
     * @uses GetIntroTaskOverviewRequest::setUnitName()
     * @uses GetIntroTaskOverviewRequest::setTimeLimit()
     * @param string[] $unitName
     * @param string $timeLimit
     */
    public function __construct(?array $unitName = null, ?string $timeLimit = null)
    {
        $this
            ->setUnitName($unitName)
            ->setTimeLimit($timeLimit);
    }
    /**
     * Get unitName value
     * @return string[]
     */
    public function getUnitName(): ?array
    {
        return $this->unitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintFromSetUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIntroTaskOverviewRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($getIntroTaskOverviewRequestUnitNameItem)) {
                $invalidValues[] = is_object($getIntroTaskOverviewRequestUnitNameItem) ? get_class($getIntroTaskOverviewRequestUnitNameItem) : sprintf('%s(%s)', gettype($getIntroTaskOverviewRequestUnitNameItem), var_export($getIntroTaskOverviewRequestUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Workflow\StructType\GetIntroTaskOverviewRequest
     */
    public function setUnitName(?array $unitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to unitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetIntroTaskOverviewRequest
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitName[] = $item;
        
        return $this;
    }
    /**
     * Get timeLimit value
     * @return string|null
     */
    public function getTimeLimit(): ?string
    {
        return $this->timeLimit;
    }
    /**
     * Set timeLimit value
     * @param string $timeLimit
     * @return \Pggns\MidocoApi\Workflow\StructType\GetIntroTaskOverviewRequest
     */
    public function setTimeLimit(?string $timeLimit = null): self
    {
        // validation for constraint: string
        if (!is_null($timeLimit) && !is_string($timeLimit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeLimit, true), gettype($timeLimit)), __LINE__);
        }
        $this->timeLimit = $timeLimit;
        
        return $this;
    }
}
