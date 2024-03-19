<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FileType extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The filename
     * @var string|null
     */
    protected ?string $filename = null;
    /**
     * Constructor method for FileType
     * @uses FileType::set_()
     * @uses FileType::setFilename()
     * @param string $_
     * @param string $filename
     */
    public function __construct(?string $_ = null, ?string $filename = null)
    {
        $this
            ->set_($_)
            ->setFilename($filename);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Pggns\MidocoApi\Workflow\StructType\FileType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get filename value
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @param string $filename
     * @return \Pggns\MidocoApi\Workflow\StructType\FileType
     */
    public function setFilename(?string $filename = null): self
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        
        return $this;
    }
}
