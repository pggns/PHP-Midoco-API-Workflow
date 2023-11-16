<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTaskDefinition StructType
 * @subpackage Structs
 */
class MidocoTaskDefinition extends TaskDefinitionDTO
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The notice
     * @var string|null
     */
    protected ?string $notice = null;
    /**
     * Constructor method for MidocoTaskDefinition
     * @uses MidocoTaskDefinition::setDescription()
     * @uses MidocoTaskDefinition::setNotice()
     * @param string $description
     * @param string $notice
     */
    public function __construct(?string $description = null, ?string $notice = null)
    {
        $this
            ->setDescription($description)
            ->setNotice($notice);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get notice value
     * @return string|null
     */
    public function getNotice(): ?string
    {
        return $this->notice;
    }
    /**
     * Set notice value
     * @param string $notice
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskDefinition
     */
    public function setNotice(?string $notice = null): self
    {
        // validation for constraint: string
        if (!is_null($notice) && !is_string($notice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notice, true), gettype($notice)), __LINE__);
        }
        $this->notice = $notice;
        
        return $this;
    }
}
