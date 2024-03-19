<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGlobalNoticeCommentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveGlobalNoticeCommentRequest extends AbstractStructBase
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
     * Constructor method for SaveGlobalNoticeCommentRequest
     * @uses SaveGlobalNoticeCommentRequest::setMidocoGlobalNoticeComment()
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
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticeCommentRequest
     */
    public function setMidocoGlobalNoticeComment(?\Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO $midocoGlobalNoticeComment = null): self
    {
        $this->MidocoGlobalNoticeComment = $midocoGlobalNoticeComment;
        
        return $this;
    }
}
