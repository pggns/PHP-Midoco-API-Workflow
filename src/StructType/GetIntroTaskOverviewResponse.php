<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIntroTaskOverviewResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetIntroTaskOverviewResponse extends AbstractStructBase
{
    /**
     * The IntroTaskOverview
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: IntroTaskOverview
     * @var \Pggns\MidocoApi\Workflow\StructType\IntroTaskOverview[]
     */
    protected ?array $IntroTaskOverview = null;
    /**
     * Constructor method for GetIntroTaskOverviewResponse
     * @uses GetIntroTaskOverviewResponse::setIntroTaskOverview()
     * @param \Pggns\MidocoApi\Workflow\StructType\IntroTaskOverview[] $introTaskOverview
     */
    public function __construct(?array $introTaskOverview = null)
    {
        $this
            ->setIntroTaskOverview($introTaskOverview);
    }
    /**
     * Get IntroTaskOverview value
     * @return \Pggns\MidocoApi\Workflow\StructType\IntroTaskOverview[]
     */
    public function getIntroTaskOverview(): ?array
    {
        return $this->IntroTaskOverview;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIntroTaskOverview method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIntroTaskOverview method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIntroTaskOverviewForArrayConstraintFromSetIntroTaskOverview(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIntroTaskOverviewResponseIntroTaskOverviewItem) {
            // validation for constraint: itemType
            if (!$getIntroTaskOverviewResponseIntroTaskOverviewItem instanceof \Pggns\MidocoApi\Workflow\StructType\IntroTaskOverview) {
                $invalidValues[] = is_object($getIntroTaskOverviewResponseIntroTaskOverviewItem) ? get_class($getIntroTaskOverviewResponseIntroTaskOverviewItem) : sprintf('%s(%s)', gettype($getIntroTaskOverviewResponseIntroTaskOverviewItem), var_export($getIntroTaskOverviewResponseIntroTaskOverviewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IntroTaskOverview property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\IntroTaskOverview, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IntroTaskOverview value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\IntroTaskOverview[] $introTaskOverview
     * @return \Pggns\MidocoApi\Workflow\StructType\GetIntroTaskOverviewResponse
     */
    public function setIntroTaskOverview(?array $introTaskOverview = null): self
    {
        // validation for constraint: array
        if ('' !== ($introTaskOverviewArrayErrorMessage = self::validateIntroTaskOverviewForArrayConstraintFromSetIntroTaskOverview($introTaskOverview))) {
            throw new InvalidArgumentException($introTaskOverviewArrayErrorMessage, __LINE__);
        }
        $this->IntroTaskOverview = $introTaskOverview;
        
        return $this;
    }
    /**
     * Add item to IntroTaskOverview value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\IntroTaskOverview $item
     * @return \Pggns\MidocoApi\Workflow\StructType\GetIntroTaskOverviewResponse
     */
    public function addToIntroTaskOverview(\Pggns\MidocoApi\Workflow\StructType\IntroTaskOverview $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\IntroTaskOverview) {
            throw new InvalidArgumentException(sprintf('The IntroTaskOverview property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\IntroTaskOverview, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->IntroTaskOverview[] = $item;
        
        return $this;
    }
}
