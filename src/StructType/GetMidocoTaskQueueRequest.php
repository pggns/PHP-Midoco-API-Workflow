<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTaskQueueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoTaskQueueRequest extends AbstractStructBase
{
    /**
     * The isFromSave
     * Meta information extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $isFromSave;
    /**
     * The cultureId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $cultureId;
    /**
     * The MidocoTaskQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTaskQueue
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $MidocoTaskQueue = null;
    /**
     * Constructor method for GetMidocoTaskQueueRequest
     * @uses GetMidocoTaskQueueRequest::setIsFromSave()
     * @uses GetMidocoTaskQueueRequest::setCultureId()
     * @uses GetMidocoTaskQueueRequest::setMidocoTaskQueue()
     * @param bool $isFromSave
     * @param string $cultureId
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue
     */
    public function __construct(bool $isFromSave, string $cultureId, ?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue = null)
    {
        $this
            ->setIsFromSave($isFromSave)
            ->setCultureId($cultureId)
            ->setMidocoTaskQueue($midocoTaskQueue);
    }
    /**
     * Get isFromSave value
     * @return bool
     */
    public function getIsFromSave(): bool
    {
        return $this->isFromSave;
    }
    /**
     * Set isFromSave value
     * @param bool $isFromSave
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskQueueRequest
     */
    public function setIsFromSave(bool $isFromSave): self
    {
        // validation for constraint: boolean
        if (!is_null($isFromSave) && !is_bool($isFromSave)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFromSave, true), gettype($isFromSave)), __LINE__);
        }
        $this->isFromSave = $isFromSave;
        
        return $this;
    }
    /**
     * Get cultureId value
     * @return string
     */
    public function getCultureId(): string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskQueueRequest
     */
    public function setCultureId(string $cultureId): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get MidocoTaskQueue value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue|null
     */
    public function getMidocoTaskQueue(): ?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue
    {
        return $this->MidocoTaskQueue;
    }
    /**
     * Set MidocoTaskQueue value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskQueueRequest
     */
    public function setMidocoTaskQueue(?\Pggns\MidocoApi\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue = null): self
    {
        $this->MidocoTaskQueue = $midocoTaskQueue;
        
        return $this;
    }
}
