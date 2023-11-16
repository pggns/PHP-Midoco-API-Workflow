<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllAssignedAdapters4OrgUnitResponse StructType
 * @subpackage Structs
 */
class GetAllAssignedAdapters4OrgUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoAdapter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdapter
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoAdapterType[]
     */
    protected array $MidocoAdapter = [];
    /**
     * The MidocoAdapterAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdapterAssign
     * @var \Pggns\MidocoApi\Workflow\StructType\AdapterAssignDTO[]
     */
    protected array $MidocoAdapterAssign = [];
    /**
     * Constructor method for GetAllAssignedAdapters4OrgUnitResponse
     * @uses GetAllAssignedAdapters4OrgUnitResponse::setMidocoAdapter()
     * @uses GetAllAssignedAdapters4OrgUnitResponse::setMidocoAdapterAssign()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoAdapterType[] $midocoAdapter
     * @param \Pggns\MidocoApi\Workflow\StructType\AdapterAssignDTO[] $midocoAdapterAssign
     */
    public function __construct(array $midocoAdapter = [], array $midocoAdapterAssign = [])
    {
        $this
            ->setMidocoAdapter($midocoAdapter)
            ->setMidocoAdapterAssign($midocoAdapterAssign);
    }
    /**
     * Get MidocoAdapter value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoAdapterType[]
     */
    public function getMidocoAdapter(): array
    {
        return $this->MidocoAdapter;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdapter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdapter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdapterForArrayConstraintsFromSetMidocoAdapter(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem) {
            // validation for constraint: itemType
            if (!$getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoAdapterType) {
                $invalidValues[] = is_object($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem) ? get_class($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem) : sprintf('%s(%s)', gettype($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem), var_export($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdapter property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoAdapterType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdapter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoAdapterType[] $midocoAdapter
     * @return \Pggns\MidocoApi\Workflow\StructType\GetAllAssignedAdapters4OrgUnitResponse
     */
    public function setMidocoAdapter(array $midocoAdapter = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdapterArrayErrorMessage = self::validateMidocoAdapterForArrayConstraintsFromSetMidocoAdapter($midocoAdapter))) {
            throw new InvalidArgumentException($midocoAdapterArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdapter = $midocoAdapter;
        
        return $this;
    }
    /**
     * Add item to MidocoAdapter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoAdapterType $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetAllAssignedAdapters4OrgUnitResponse
     */
    public function addToMidocoAdapter(\Pggns\MidocoApi\Workflow\StructType\MidocoAdapterType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoAdapterType) {
            throw new InvalidArgumentException(sprintf('The MidocoAdapter property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoAdapterType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdapter[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAdapterAssign value
     * @return \Pggns\MidocoApi\Workflow\StructType\AdapterAssignDTO[]
     */
    public function getMidocoAdapterAssign(): array
    {
        return $this->MidocoAdapterAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdapterAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdapterAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdapterAssignForArrayConstraintsFromSetMidocoAdapterAssign(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem) {
            // validation for constraint: itemType
            if (!$getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem instanceof \Pggns\MidocoApi\Workflow\StructType\AdapterAssignDTO) {
                $invalidValues[] = is_object($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem) ? get_class($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem) : sprintf('%s(%s)', gettype($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem), var_export($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdapterAssign property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\AdapterAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdapterAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\AdapterAssignDTO[] $midocoAdapterAssign
     * @return \Pggns\MidocoApi\Workflow\StructType\GetAllAssignedAdapters4OrgUnitResponse
     */
    public function setMidocoAdapterAssign(array $midocoAdapterAssign = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdapterAssignArrayErrorMessage = self::validateMidocoAdapterAssignForArrayConstraintsFromSetMidocoAdapterAssign($midocoAdapterAssign))) {
            throw new InvalidArgumentException($midocoAdapterAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdapterAssign = $midocoAdapterAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoAdapterAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\AdapterAssignDTO $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetAllAssignedAdapters4OrgUnitResponse
     */
    public function addToMidocoAdapterAssign(\Pggns\MidocoApi\Workflow\StructType\AdapterAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\AdapterAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAdapterAssign property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\AdapterAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdapterAssign[] = $item;
        
        return $this;
    }
}
