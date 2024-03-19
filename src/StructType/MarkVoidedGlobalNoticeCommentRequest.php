<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkVoidedGlobalNoticeCommentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarkVoidedGlobalNoticeCommentRequest extends AbstractStructBase
{
    /**
     * The MidocoGlobalNoticeComment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoGlobalNoticeComment
     * @var \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO $MidocoGlobalNoticeComment = null;
    /**
     * Constructor method for MarkVoidedGlobalNoticeCommentRequest
     * @uses MarkVoidedGlobalNoticeCommentRequest::setMidocoGlobalNoticeComment()
     * @param \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO $midocoGlobalNoticeComment
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO $midocoGlobalNoticeComment = null)
    {
        $this
            ->setMidocoGlobalNoticeComment($midocoGlobalNoticeComment);
    }
    /**
     * Get MidocoGlobalNoticeComment value
     * @return \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO|null
     */
    public function getMidocoGlobalNoticeComment(): ?\Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO
    {
        return $this->MidocoGlobalNoticeComment;
    }
    /**
     * Set MidocoGlobalNoticeComment value
     * @param \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO $midocoGlobalNoticeComment
     * @return \Pggns\MidocoApi\Workflow\StructType\MarkVoidedGlobalNoticeCommentRequest
     */
    public function setMidocoGlobalNoticeComment(?\Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO $midocoGlobalNoticeComment = null): self
    {
        $this->MidocoGlobalNoticeComment = $midocoGlobalNoticeComment;
        
        return $this;
    }
}
