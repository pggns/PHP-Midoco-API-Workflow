<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPropertiesFromTemplateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPropertiesFromTemplateResponse extends AbstractStructBase
{
    /**
     * The MidocoPropertyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPropertyInfo
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoPropertyInfo[]
     */
    protected ?array $MidocoPropertyInfo = null;
    /**
     * Constructor method for GetPropertiesFromTemplateResponse
     * @uses GetPropertiesFromTemplateResponse::setMidocoPropertyInfo()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoPropertyInfo[] $midocoPropertyInfo
     */
    public function __construct(?array $midocoPropertyInfo = null)
    {
        $this
            ->setMidocoPropertyInfo($midocoPropertyInfo);
    }
    /**
     * Get MidocoPropertyInfo value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoPropertyInfo[]
     */
    public function getMidocoPropertyInfo(): ?array
    {
        return $this->MidocoPropertyInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPropertyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPropertyInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPropertyInfoForArrayConstraintFromSetMidocoPropertyInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPropertiesFromTemplateResponseMidocoPropertyInfoItem) {
            // validation for constraint: itemType
            if (!$getPropertiesFromTemplateResponseMidocoPropertyInfoItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoPropertyInfo) {
                $invalidValues[] = is_object($getPropertiesFromTemplateResponseMidocoPropertyInfoItem) ? get_class($getPropertiesFromTemplateResponseMidocoPropertyInfoItem) : sprintf('%s(%s)', gettype($getPropertiesFromTemplateResponseMidocoPropertyInfoItem), var_export($getPropertiesFromTemplateResponseMidocoPropertyInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPropertyInfo property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoPropertyInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPropertyInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoPropertyInfo[] $midocoPropertyInfo
     * @return \Pggns\MidocoApi\Workflow\StructType\GetPropertiesFromTemplateResponse
     */
    public function setMidocoPropertyInfo(?array $midocoPropertyInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPropertyInfoArrayErrorMessage = self::validateMidocoPropertyInfoForArrayConstraintFromSetMidocoPropertyInfo($midocoPropertyInfo))) {
            throw new InvalidArgumentException($midocoPropertyInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoPropertyInfo = $midocoPropertyInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoPropertyInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoPropertyInfo $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetPropertiesFromTemplateResponse
     */
    public function addToMidocoPropertyInfo(\Pggns\MidocoApi\Workflow\StructType\MidocoPropertyInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoPropertyInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoPropertyInfo property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoPropertyInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPropertyInfo[] = $item;
        
        return $this;
    }
}
