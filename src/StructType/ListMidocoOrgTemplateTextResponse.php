<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoOrgTemplateTextResponse StructType
 * @subpackage Structs
 */
class ListMidocoOrgTemplateTextResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgTemplateTextInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgTemplateTextInfo
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoOrgTemplateTextInfo[]
     */
    protected array $MidocoOrgTemplateTextInfo = [];
    /**
     * Constructor method for ListMidocoOrgTemplateTextResponse
     * @uses ListMidocoOrgTemplateTextResponse::setMidocoOrgTemplateTextInfo()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoOrgTemplateTextInfo[] $midocoOrgTemplateTextInfo
     */
    public function __construct(array $midocoOrgTemplateTextInfo = [])
    {
        $this
            ->setMidocoOrgTemplateTextInfo($midocoOrgTemplateTextInfo);
    }
    /**
     * Get MidocoOrgTemplateTextInfo value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoOrgTemplateTextInfo[]
     */
    public function getMidocoOrgTemplateTextInfo(): array
    {
        return $this->MidocoOrgTemplateTextInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrgTemplateTextInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgTemplateTextInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgTemplateTextInfoForArrayConstraintsFromSetMidocoOrgTemplateTextInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listMidocoOrgTemplateTextResponseMidocoOrgTemplateTextInfoItem) {
            // validation for constraint: itemType
            if (!$listMidocoOrgTemplateTextResponseMidocoOrgTemplateTextInfoItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoOrgTemplateTextInfo) {
                $invalidValues[] = is_object($listMidocoOrgTemplateTextResponseMidocoOrgTemplateTextInfoItem) ? get_class($listMidocoOrgTemplateTextResponseMidocoOrgTemplateTextInfoItem) : sprintf('%s(%s)', gettype($listMidocoOrgTemplateTextResponseMidocoOrgTemplateTextInfoItem), var_export($listMidocoOrgTemplateTextResponseMidocoOrgTemplateTextInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgTemplateTextInfo property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoOrgTemplateTextInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgTemplateTextInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoOrgTemplateTextInfo[] $midocoOrgTemplateTextInfo
     * @return \Pggns\MidocoApi\Workflow\StructType\ListMidocoOrgTemplateTextResponse
     */
    public function setMidocoOrgTemplateTextInfo(array $midocoOrgTemplateTextInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgTemplateTextInfoArrayErrorMessage = self::validateMidocoOrgTemplateTextInfoForArrayConstraintsFromSetMidocoOrgTemplateTextInfo($midocoOrgTemplateTextInfo))) {
            throw new InvalidArgumentException($midocoOrgTemplateTextInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgTemplateTextInfo = $midocoOrgTemplateTextInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgTemplateTextInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoOrgTemplateTextInfo $item
     * @return \Pggns\MidocoApi\Workflow\StructType\ListMidocoOrgTemplateTextResponse
     */
    public function addToMidocoOrgTemplateTextInfo(\Pggns\MidocoApi\Workflow\StructType\MidocoOrgTemplateTextInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoOrgTemplateTextInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgTemplateTextInfo property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoOrgTemplateTextInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgTemplateTextInfo[] = $item;
        
        return $this;
    }
}
