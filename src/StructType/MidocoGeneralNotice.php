<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGeneralNotice StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoGeneralNotice extends GlobalNoticeDTO
{
    /**
     * The manuallyCreatedTask
     * @var bool|null
     */
    protected ?bool $manuallyCreatedTask = null;
    /**
     * The delegationComment
     * @var string|null
     */
    protected ?string $delegationComment = null;
    /**
     * The refId
     * @var int|null
     */
    protected ?int $refId = null;
    /**
     * The deadlineDate
     * @var string|null
     */
    protected ?string $deadlineDate = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The printAllowed
     * @var bool|null
     */
    protected ?bool $printAllowed = null;
    /**
     * The ruleDefinitionId
     * @var int|null
     */
    protected ?int $ruleDefinitionId = null;
    /**
     * Constructor method for MidocoGeneralNotice
     * @uses MidocoGeneralNotice::setManuallyCreatedTask()
     * @uses MidocoGeneralNotice::setDelegationComment()
     * @uses MidocoGeneralNotice::setRefId()
     * @uses MidocoGeneralNotice::setDeadlineDate()
     * @uses MidocoGeneralNotice::setIsSpecialCustomer()
     * @uses MidocoGeneralNotice::setItemId()
     * @uses MidocoGeneralNotice::setPosition()
     * @uses MidocoGeneralNotice::setPrintAllowed()
     * @uses MidocoGeneralNotice::setRuleDefinitionId()
     * @param bool $manuallyCreatedTask
     * @param string $delegationComment
     * @param int $refId
     * @param string $deadlineDate
     * @param bool $isSpecialCustomer
     * @param int $itemId
     * @param int $position
     * @param bool $printAllowed
     * @param int $ruleDefinitionId
     */
    public function __construct(?bool $manuallyCreatedTask = null, ?string $delegationComment = null, ?int $refId = null, ?string $deadlineDate = null, ?bool $isSpecialCustomer = null, ?int $itemId = null, ?int $position = null, ?bool $printAllowed = null, ?int $ruleDefinitionId = null)
    {
        $this
            ->setManuallyCreatedTask($manuallyCreatedTask)
            ->setDelegationComment($delegationComment)
            ->setRefId($refId)
            ->setDeadlineDate($deadlineDate)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setItemId($itemId)
            ->setPosition($position)
            ->setPrintAllowed($printAllowed)
            ->setRuleDefinitionId($ruleDefinitionId);
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
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoGeneralNotice
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
     * Get delegationComment value
     * @return string|null
     */
    public function getDelegationComment(): ?string
    {
        return $this->delegationComment;
    }
    /**
     * Set delegationComment value
     * @param string $delegationComment
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoGeneralNotice
     */
    public function setDelegationComment(?string $delegationComment = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationComment) && !is_string($delegationComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationComment, true), gettype($delegationComment)), __LINE__);
        }
        $this->delegationComment = $delegationComment;
        
        return $this;
    }
    /**
     * Get refId value
     * @return int|null
     */
    public function getRefId(): ?int
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param int $refId
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoGeneralNotice
     */
    public function setRefId(?int $refId = null): self
    {
        // validation for constraint: int
        if (!is_null($refId) && !(is_int($refId) || ctype_digit($refId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
    /**
     * Get deadlineDate value
     * @return string|null
     */
    public function getDeadlineDate(): ?string
    {
        return $this->deadlineDate;
    }
    /**
     * Set deadlineDate value
     * @param string $deadlineDate
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoGeneralNotice
     */
    public function setDeadlineDate(?string $deadlineDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deadlineDate) && !is_string($deadlineDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deadlineDate, true), gettype($deadlineDate)), __LINE__);
        }
        $this->deadlineDate = $deadlineDate;
        
        return $this;
    }
    /**
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoGeneralNotice
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoGeneralNotice
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoGeneralNotice
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get printAllowed value
     * @return bool|null
     */
    public function getPrintAllowed(): ?bool
    {
        return $this->printAllowed;
    }
    /**
     * Set printAllowed value
     * @param bool $printAllowed
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoGeneralNotice
     */
    public function setPrintAllowed(?bool $printAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printAllowed) && !is_bool($printAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printAllowed, true), gettype($printAllowed)), __LINE__);
        }
        $this->printAllowed = $printAllowed;
        
        return $this;
    }
    /**
     * Get ruleDefinitionId value
     * @return int|null
     */
    public function getRuleDefinitionId(): ?int
    {
        return $this->ruleDefinitionId;
    }
    /**
     * Set ruleDefinitionId value
     * @param int $ruleDefinitionId
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoGeneralNotice
     */
    public function setRuleDefinitionId(?int $ruleDefinitionId = null): self
    {
        // validation for constraint: int
        if (!is_null($ruleDefinitionId) && !(is_int($ruleDefinitionId) || ctype_digit($ruleDefinitionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ruleDefinitionId, true), gettype($ruleDefinitionId)), __LINE__);
        }
        $this->ruleDefinitionId = $ruleDefinitionId;
        
        return $this;
    }
}
