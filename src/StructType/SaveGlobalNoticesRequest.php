<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGlobalNoticesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveGlobalNoticesRequest extends AbstractStructBase
{
    /**
     * The MidocoGlobalNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoGlobalNotice
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoGlobalNotice[]
     */
    protected ?array $MidocoGlobalNotice = null;
    /**
     * The manuallyCreatedTask
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $manuallyCreatedTask = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveGlobalNoticesRequest
     * @uses SaveGlobalNoticesRequest::setMidocoGlobalNotice()
     * @uses SaveGlobalNoticesRequest::setManuallyCreatedTask()
     * @uses SaveGlobalNoticesRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoGlobalNotice[] $midocoGlobalNotice
     * @param bool $manuallyCreatedTask
     * @param int $internalVersion
     */
    public function __construct(?array $midocoGlobalNotice = null, ?bool $manuallyCreatedTask = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoGlobalNotice($midocoGlobalNotice)
            ->setManuallyCreatedTask($manuallyCreatedTask)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoGlobalNotice value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoGlobalNotice[]
     */
    public function getMidocoGlobalNotice(): ?array
    {
        return $this->MidocoGlobalNotice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoGlobalNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoGlobalNotice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoGlobalNoticeForArrayConstraintFromSetMidocoGlobalNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveGlobalNoticesRequestMidocoGlobalNoticeItem) {
            // validation for constraint: itemType
            if (!$saveGlobalNoticesRequestMidocoGlobalNoticeItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoGlobalNotice) {
                $invalidValues[] = is_object($saveGlobalNoticesRequestMidocoGlobalNoticeItem) ? get_class($saveGlobalNoticesRequestMidocoGlobalNoticeItem) : sprintf('%s(%s)', gettype($saveGlobalNoticesRequestMidocoGlobalNoticeItem), var_export($saveGlobalNoticesRequestMidocoGlobalNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoGlobalNotice property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoGlobalNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoGlobalNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoGlobalNotice[] $midocoGlobalNotice
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticesRequest
     */
    public function setMidocoGlobalNotice(?array $midocoGlobalNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoGlobalNoticeArrayErrorMessage = self::validateMidocoGlobalNoticeForArrayConstraintFromSetMidocoGlobalNotice($midocoGlobalNotice))) {
            throw new InvalidArgumentException($midocoGlobalNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoGlobalNotice = $midocoGlobalNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoGlobalNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoGlobalNotice $item
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticesRequest
     */
    public function addToMidocoGlobalNotice(\Pggns\MidocoApi\Workflow\StructType\MidocoGlobalNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoGlobalNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoGlobalNotice property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoGlobalNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoGlobalNotice[] = $item;
        
        return $this;
    }
    /**
     * Get manuallyCreatedTask value
     * @return bool|null
     */
    public function getManuallyCreatedTask(): ?bool
    {
        return $this->manuallyCreatedTask;
    }
    /**
     * Set manuallyCreatedTask value
     * @param bool $manuallyCreatedTask
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticesRequest
     */
    public function setManuallyCreatedTask(?bool $manuallyCreatedTask = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manuallyCreatedTask) && !is_bool($manuallyCreatedTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manuallyCreatedTask, true), gettype($manuallyCreatedTask)), __LINE__);
        }
        $this->manuallyCreatedTask = $manuallyCreatedTask;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticesRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
