<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGlobalNoticeCommentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGlobalNoticeCommentsRequest extends AbstractStructBase
{
    /**
     * The noticeId
     * @var int|null
     */
    protected ?int $noticeId = null;
    /**
     * Constructor method for GetGlobalNoticeCommentsRequest
     * @uses GetGlobalNoticeCommentsRequest::setNoticeId()
     * @param int $noticeId
     */
    public function __construct(?int $noticeId = null)
    {
        $this
            ->setNoticeId($noticeId);
    }
    /**
     * Get noticeId value
     * @return int|null
     */
    public function getNoticeId(): ?int
    {
        return $this->noticeId;
    }
    /**
     * Set noticeId value
     * @param int $noticeId
     * @return \Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticeCommentsRequest
     */
    public function setNoticeId(?int $noticeId = null): self
    {
        // validation for constraint: int
        if (!is_null($noticeId) && !(is_int($noticeId) || ctype_digit($noticeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noticeId, true), gettype($noticeId)), __LINE__);
        }
        $this->noticeId = $noticeId;
        
        return $this;
    }
}
