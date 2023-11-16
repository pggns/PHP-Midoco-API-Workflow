<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserHistoryResponse StructType
 * @subpackage Structs
 */
class GetUserHistoryResponse extends AbstractStructBase
{
    /**
     * The MidocoUserHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUserHistory
     * @var \Pggns\MidocoApi\Workflow\StructType\UserHistoryDTO[]
     */
    protected array $MidocoUserHistory = [];
    /**
     * Constructor method for GetUserHistoryResponse
     * @uses GetUserHistoryResponse::setMidocoUserHistory()
     * @param \Pggns\MidocoApi\Workflow\StructType\UserHistoryDTO[] $midocoUserHistory
     */
    public function __construct(array $midocoUserHistory = [])
    {
        $this
            ->setMidocoUserHistory($midocoUserHistory);
    }
    /**
     * Get MidocoUserHistory value
     * @return \Pggns\MidocoApi\Workflow\StructType\UserHistoryDTO[]
     */
    public function getMidocoUserHistory(): array
    {
        return $this->MidocoUserHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoUserHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUserHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUserHistoryForArrayConstraintsFromSetMidocoUserHistory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserHistoryResponseMidocoUserHistoryItem) {
            // validation for constraint: itemType
            if (!$getUserHistoryResponseMidocoUserHistoryItem instanceof \Pggns\MidocoApi\Workflow\StructType\UserHistoryDTO) {
                $invalidValues[] = is_object($getUserHistoryResponseMidocoUserHistoryItem) ? get_class($getUserHistoryResponseMidocoUserHistoryItem) : sprintf('%s(%s)', gettype($getUserHistoryResponseMidocoUserHistoryItem), var_export($getUserHistoryResponseMidocoUserHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUserHistory property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\UserHistoryDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUserHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\UserHistoryDTO[] $midocoUserHistory
     * @return \Pggns\MidocoApi\Workflow\StructType\GetUserHistoryResponse
     */
    public function setMidocoUserHistory(array $midocoUserHistory = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUserHistoryArrayErrorMessage = self::validateMidocoUserHistoryForArrayConstraintsFromSetMidocoUserHistory($midocoUserHistory))) {
            throw new InvalidArgumentException($midocoUserHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoUserHistory = $midocoUserHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoUserHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\UserHistoryDTO $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetUserHistoryResponse
     */
    public function addToMidocoUserHistory(\Pggns\MidocoApi\Workflow\StructType\UserHistoryDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\UserHistoryDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoUserHistory property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\UserHistoryDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUserHistory[] = $item;
        
        return $this;
    }
}
