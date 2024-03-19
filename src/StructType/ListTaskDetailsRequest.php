<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTaskDetailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListTaskDetailsRequest extends AbstractStructBase
{
    /**
     * The ListTaskDetailsCriteria
     * Meta information extracted from the WSDL
     * - ref: ListTaskDetailsCriteria
     * @var \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria $ListTaskDetailsCriteria = null;
    /**
     * The MidocoTaskViewColumns
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskViewColumns
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns[]
     */
    protected ?array $MidocoTaskViewColumns = null;
    /**
     * The isCounterOnly
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isCounterOnly = null;
    /**
     * The maxRowCount
     * Meta information extracted from the WSDL
     * - default: 1000
     * @var int|null
     */
    protected ?int $maxRowCount = null;
    /**
     * Constructor method for ListTaskDetailsRequest
     * @uses ListTaskDetailsRequest::setListTaskDetailsCriteria()
     * @uses ListTaskDetailsRequest::setMidocoTaskViewColumns()
     * @uses ListTaskDetailsRequest::setIsCounterOnly()
     * @uses ListTaskDetailsRequest::setMaxRowCount()
     * @param \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria $listTaskDetailsCriteria
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns[] $midocoTaskViewColumns
     * @param bool $isCounterOnly
     * @param int $maxRowCount
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria $listTaskDetailsCriteria = null, ?array $midocoTaskViewColumns = null, ?bool $isCounterOnly = false, ?int $maxRowCount = 1000)
    {
        $this
            ->setListTaskDetailsCriteria($listTaskDetailsCriteria)
            ->setMidocoTaskViewColumns($midocoTaskViewColumns)
            ->setIsCounterOnly($isCounterOnly)
            ->setMaxRowCount($maxRowCount);
    }
    /**
     * Get ListTaskDetailsCriteria value
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria|null
     */
    public function getListTaskDetailsCriteria(): ?\Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria
    {
        return $this->ListTaskDetailsCriteria;
    }
    /**
     * Set ListTaskDetailsCriteria value
     * @param \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria $listTaskDetailsCriteria
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsRequest
     */
    public function setListTaskDetailsCriteria(?\Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsCriteria $listTaskDetailsCriteria = null): self
    {
        $this->ListTaskDetailsCriteria = $listTaskDetailsCriteria;
        
        return $this;
    }
    /**
     * Get MidocoTaskViewColumns value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns[]
     */
    public function getMidocoTaskViewColumns(): ?array
    {
        return $this->MidocoTaskViewColumns;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTaskViewColumns method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskViewColumns method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskViewColumnsForArrayConstraintFromSetMidocoTaskViewColumns(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTaskDetailsRequestMidocoTaskViewColumnsItem) {
            // validation for constraint: itemType
            if (!$listTaskDetailsRequestMidocoTaskViewColumnsItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns) {
                $invalidValues[] = is_object($listTaskDetailsRequestMidocoTaskViewColumnsItem) ? get_class($listTaskDetailsRequestMidocoTaskViewColumnsItem) : sprintf('%s(%s)', gettype($listTaskDetailsRequestMidocoTaskViewColumnsItem), var_export($listTaskDetailsRequestMidocoTaskViewColumnsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskViewColumns property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskViewColumns value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns[] $midocoTaskViewColumns
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsRequest
     */
    public function setMidocoTaskViewColumns(?array $midocoTaskViewColumns = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskViewColumnsArrayErrorMessage = self::validateMidocoTaskViewColumnsForArrayConstraintFromSetMidocoTaskViewColumns($midocoTaskViewColumns))) {
            throw new InvalidArgumentException($midocoTaskViewColumnsArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskViewColumns = $midocoTaskViewColumns;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskViewColumns value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns $item
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsRequest
     */
    public function addToMidocoTaskViewColumns(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskViewColumns property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewColumns, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskViewColumns[] = $item;
        
        return $this;
    }
    /**
     * Get isCounterOnly value
     * @return bool|null
     */
    public function getIsCounterOnly(): ?bool
    {
        return $this->isCounterOnly;
    }
    /**
     * Set isCounterOnly value
     * @param bool $isCounterOnly
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsRequest
     */
    public function setIsCounterOnly(?bool $isCounterOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isCounterOnly) && !is_bool($isCounterOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCounterOnly, true), gettype($isCounterOnly)), __LINE__);
        }
        $this->isCounterOnly = $isCounterOnly;
        
        return $this;
    }
    /**
     * Get maxRowCount value
     * @return int|null
     */
    public function getMaxRowCount(): ?int
    {
        return $this->maxRowCount;
    }
    /**
     * Set maxRowCount value
     * @param int $maxRowCount
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsRequest
     */
    public function setMaxRowCount(?int $maxRowCount = 1000): self
    {
        // validation for constraint: int
        if (!is_null($maxRowCount) && !(is_int($maxRowCount) || ctype_digit($maxRowCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxRowCount, true), gettype($maxRowCount)), __LINE__);
        }
        $this->maxRowCount = $maxRowCount;
        
        return $this;
    }
}
