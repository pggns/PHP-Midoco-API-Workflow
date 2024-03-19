<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGlobalNoticeCommentsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGlobalNoticeCommentsResponse extends AbstractStructBase
{
    /**
     * The MidocoGlobalNoticeComment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoGlobalNoticeComment
     * @var \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO[]
     */
    protected ?array $MidocoGlobalNoticeComment = null;
    /**
     * Constructor method for GetGlobalNoticeCommentsResponse
     * @uses GetGlobalNoticeCommentsResponse::setMidocoGlobalNoticeComment()
     * @param \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO[] $midocoGlobalNoticeComment
     */
    public function __construct(?array $midocoGlobalNoticeComment = null)
    {
        $this
            ->setMidocoGlobalNoticeComment($midocoGlobalNoticeComment);
    }
    /**
     * Get MidocoGlobalNoticeComment value
     * @return \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO[]
     */
    public function getMidocoGlobalNoticeComment(): ?array
    {
        return $this->MidocoGlobalNoticeComment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoGlobalNoticeComment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoGlobalNoticeComment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoGlobalNoticeCommentForArrayConstraintFromSetMidocoGlobalNoticeComment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGlobalNoticeCommentsResponseMidocoGlobalNoticeCommentItem) {
            // validation for constraint: itemType
            if (!$getGlobalNoticeCommentsResponseMidocoGlobalNoticeCommentItem instanceof \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO) {
                $invalidValues[] = is_object($getGlobalNoticeCommentsResponseMidocoGlobalNoticeCommentItem) ? get_class($getGlobalNoticeCommentsResponseMidocoGlobalNoticeCommentItem) : sprintf('%s(%s)', gettype($getGlobalNoticeCommentsResponseMidocoGlobalNoticeCommentItem), var_export($getGlobalNoticeCommentsResponseMidocoGlobalNoticeCommentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoGlobalNoticeComment property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoGlobalNoticeComment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO[] $midocoGlobalNoticeComment
     * @return \Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticeCommentsResponse
     */
    public function setMidocoGlobalNoticeComment(?array $midocoGlobalNoticeComment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoGlobalNoticeCommentArrayErrorMessage = self::validateMidocoGlobalNoticeCommentForArrayConstraintFromSetMidocoGlobalNoticeComment($midocoGlobalNoticeComment))) {
            throw new InvalidArgumentException($midocoGlobalNoticeCommentArrayErrorMessage, __LINE__);
        }
        $this->MidocoGlobalNoticeComment = $midocoGlobalNoticeComment;
        
        return $this;
    }
    /**
     * Add item to MidocoGlobalNoticeComment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticeCommentsResponse
     */
    public function addToMidocoGlobalNoticeComment(\Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoGlobalNoticeComment property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\GlobalNoticeCommentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoGlobalNoticeComment[] = $item;
        
        return $this;
    }
}
