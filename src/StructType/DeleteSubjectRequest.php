<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSubjectRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSubjectRequest extends AbstractStructBase
{
    /**
     * The subjectType
     * @var string|null
     */
    protected ?string $subjectType = null;
    /**
     * The userValue
     * @var string|null
     */
    protected ?string $userValue = null;
    /**
     * Constructor method for DeleteSubjectRequest
     * @uses DeleteSubjectRequest::setSubjectType()
     * @uses DeleteSubjectRequest::setUserValue()
     * @param string $subjectType
     * @param string $userValue
     */
    public function __construct(?string $subjectType = null, ?string $userValue = null)
    {
        $this
            ->setSubjectType($subjectType)
            ->setUserValue($userValue);
    }
    /**
     * Get subjectType value
     * @return string|null
     */
    public function getSubjectType(): ?string
    {
        return $this->subjectType;
    }
    /**
     * Set subjectType value
     * @param string $subjectType
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteSubjectRequest
     */
    public function setSubjectType(?string $subjectType = null): self
    {
        // validation for constraint: string
        if (!is_null($subjectType) && !is_string($subjectType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subjectType, true), gettype($subjectType)), __LINE__);
        }
        $this->subjectType = $subjectType;
        
        return $this;
    }
    /**
     * Get userValue value
     * @return string|null
     */
    public function getUserValue(): ?string
    {
        return $this->userValue;
    }
    /**
     * Set userValue value
     * @param string $userValue
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteSubjectRequest
     */
    public function setUserValue(?string $userValue = null): self
    {
        // validation for constraint: string
        if (!is_null($userValue) && !is_string($userValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userValue, true), gettype($userValue)), __LINE__);
        }
        $this->userValue = $userValue;
        
        return $this;
    }
}
