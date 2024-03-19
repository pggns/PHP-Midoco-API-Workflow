<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteGlobalNoticesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteGlobalNoticesRequest extends AbstractStructBase
{
    /**
     * The noticeId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $noticeId;
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for DeleteGlobalNoticesRequest
     * @uses DeleteGlobalNoticesRequest::setNoticeId()
     * @uses DeleteGlobalNoticesRequest::setPosition()
     * @uses DeleteGlobalNoticesRequest::setInternalVersion()
     * @param int $noticeId
     * @param int $position
     * @param int $internalVersion
     */
    public function __construct(int $noticeId, int $position, ?int $internalVersion = null)
    {
        $this
            ->setNoticeId($noticeId)
            ->setPosition($position)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get noticeId value
     * @return int
     */
    public function getNoticeId(): int
    {
        return $this->noticeId;
    }
    /**
     * Set noticeId value
     * @param int $noticeId
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteGlobalNoticesRequest
     */
    public function setNoticeId(int $noticeId): self
    {
        // validation for constraint: int
        if (!is_null($noticeId) && !(is_int($noticeId) || ctype_digit($noticeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noticeId, true), gettype($noticeId)), __LINE__);
        }
        $this->noticeId = $noticeId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteGlobalNoticesRequest
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
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
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteGlobalNoticesRequest
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
