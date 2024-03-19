<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCcProxyHandlersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCcProxyHandlersResponse extends AbstractStructBase
{
    /**
     * The MidocoCcProxyHandler
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCcProxyHandler
     * @var \Pggns\MidocoApi\Workflow\StructType\CcproxyHandlerDTO[]
     */
    protected ?array $MidocoCcProxyHandler = null;
    /**
     * Constructor method for GetCcProxyHandlersResponse
     * @uses GetCcProxyHandlersResponse::setMidocoCcProxyHandler()
     * @param \Pggns\MidocoApi\Workflow\StructType\CcproxyHandlerDTO[] $midocoCcProxyHandler
     */
    public function __construct(?array $midocoCcProxyHandler = null)
    {
        $this
            ->setMidocoCcProxyHandler($midocoCcProxyHandler);
    }
    /**
     * Get MidocoCcProxyHandler value
     * @return \Pggns\MidocoApi\Workflow\StructType\CcproxyHandlerDTO[]
     */
    public function getMidocoCcProxyHandler(): ?array
    {
        return $this->MidocoCcProxyHandler;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCcProxyHandler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCcProxyHandler method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCcProxyHandlerForArrayConstraintFromSetMidocoCcProxyHandler(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCcProxyHandlersResponseMidocoCcProxyHandlerItem) {
            // validation for constraint: itemType
            if (!$getCcProxyHandlersResponseMidocoCcProxyHandlerItem instanceof \Pggns\MidocoApi\Workflow\StructType\CcproxyHandlerDTO) {
                $invalidValues[] = is_object($getCcProxyHandlersResponseMidocoCcProxyHandlerItem) ? get_class($getCcProxyHandlersResponseMidocoCcProxyHandlerItem) : sprintf('%s(%s)', gettype($getCcProxyHandlersResponseMidocoCcProxyHandlerItem), var_export($getCcProxyHandlersResponseMidocoCcProxyHandlerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCcProxyHandler property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\CcproxyHandlerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCcProxyHandler value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\CcproxyHandlerDTO[] $midocoCcProxyHandler
     * @return \Pggns\MidocoApi\Workflow\StructType\GetCcProxyHandlersResponse
     */
    public function setMidocoCcProxyHandler(?array $midocoCcProxyHandler = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCcProxyHandlerArrayErrorMessage = self::validateMidocoCcProxyHandlerForArrayConstraintFromSetMidocoCcProxyHandler($midocoCcProxyHandler))) {
            throw new InvalidArgumentException($midocoCcProxyHandlerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCcProxyHandler = $midocoCcProxyHandler;
        
        return $this;
    }
    /**
     * Add item to MidocoCcProxyHandler value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\CcproxyHandlerDTO $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetCcProxyHandlersResponse
     */
    public function addToMidocoCcProxyHandler(\Pggns\MidocoApi\Workflow\StructType\CcproxyHandlerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\CcproxyHandlerDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCcProxyHandler property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\CcproxyHandlerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCcProxyHandler[] = $item;
        
        return $this;
    }
}
