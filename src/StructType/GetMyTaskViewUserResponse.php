<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyTaskViewUserResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMyTaskViewUserResponse extends AbstractStructBase
{
    /**
     * The MidocoMyTaskViewUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMyTaskViewUser
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUser[]
     */
    protected ?array $MidocoMyTaskViewUser = null;
    /**
     * Constructor method for GetMyTaskViewUserResponse
     * @uses GetMyTaskViewUserResponse::setMidocoMyTaskViewUser()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUser[] $midocoMyTaskViewUser
     */
    public function __construct(?array $midocoMyTaskViewUser = null)
    {
        $this
            ->setMidocoMyTaskViewUser($midocoMyTaskViewUser);
    }
    /**
     * Get MidocoMyTaskViewUser value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUser[]
     */
    public function getMidocoMyTaskViewUser(): ?array
    {
        return $this->MidocoMyTaskViewUser;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMyTaskViewUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMyTaskViewUser method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMyTaskViewUserForArrayConstraintFromSetMidocoMyTaskViewUser(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMyTaskViewUserResponseMidocoMyTaskViewUserItem) {
            // validation for constraint: itemType
            if (!$getMyTaskViewUserResponseMidocoMyTaskViewUserItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUser) {
                $invalidValues[] = is_object($getMyTaskViewUserResponseMidocoMyTaskViewUserItem) ? get_class($getMyTaskViewUserResponseMidocoMyTaskViewUserItem) : sprintf('%s(%s)', gettype($getMyTaskViewUserResponseMidocoMyTaskViewUserItem), var_export($getMyTaskViewUserResponseMidocoMyTaskViewUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMyTaskViewUser property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUser, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMyTaskViewUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUser[] $midocoMyTaskViewUser
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUserResponse
     */
    public function setMidocoMyTaskViewUser(?array $midocoMyTaskViewUser = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMyTaskViewUserArrayErrorMessage = self::validateMidocoMyTaskViewUserForArrayConstraintFromSetMidocoMyTaskViewUser($midocoMyTaskViewUser))) {
            throw new InvalidArgumentException($midocoMyTaskViewUserArrayErrorMessage, __LINE__);
        }
        $this->MidocoMyTaskViewUser = $midocoMyTaskViewUser;
        
        return $this;
    }
    /**
     * Add item to MidocoMyTaskViewUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUser $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUserResponse
     */
    public function addToMidocoMyTaskViewUser(\Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUser $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUser) {
            throw new InvalidArgumentException(sprintf('The MidocoMyTaskViewUser property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoMyTaskViewUser, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMyTaskViewUser[] = $item;
        
        return $this;
    }
}
