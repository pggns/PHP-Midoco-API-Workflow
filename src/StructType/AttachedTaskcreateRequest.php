<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachedTaskcreateRequest StructType
 * @subpackage Structs
 */
class AttachedTaskcreateRequest extends AbstractStructBase
{
    /**
     * The MidocoTask
     * Meta information extracted from the WSDL
     * - ref: MidocoTask
     * @var \Pggns\MidocoApi\Workflow\StructType\Task|null
     */
    protected ?\Pggns\MidocoApi\Workflow\StructType\Task $MidocoTask = null;
    /**
     * The subject_type
     * @var string|null
     */
    protected ?string $subject_type = null;
    /**
     * The appName
     * @var string|null
     */
    protected ?string $appName = null;
    /**
     * The eventId
     * @var string|null
     */
    protected ?string $eventId = null;
    /**
     * Constructor method for AttachedTaskcreateRequest
     * @uses AttachedTaskcreateRequest::setMidocoTask()
     * @uses AttachedTaskcreateRequest::setSubject_type()
     * @uses AttachedTaskcreateRequest::setAppName()
     * @uses AttachedTaskcreateRequest::setEventId()
     * @param \Pggns\MidocoApi\Workflow\StructType\Task $midocoTask
     * @param string $subject_type
     * @param string $appName
     * @param string $eventId
     */
    public function __construct(?\Pggns\MidocoApi\Workflow\StructType\Task $midocoTask = null, ?string $subject_type = null, ?string $appName = null, ?string $eventId = null)
    {
        $this
            ->setMidocoTask($midocoTask)
            ->setSubject_type($subject_type)
            ->setAppName($appName)
            ->setEventId($eventId);
    }
    /**
     * Get MidocoTask value
     * @return \Pggns\MidocoApi\Workflow\StructType\Task|null
     */
    public function getMidocoTask(): ?\Pggns\MidocoApi\Workflow\StructType\Task
    {
        return $this->MidocoTask;
    }
    /**
     * Set MidocoTask value
     * @param \Pggns\MidocoApi\Workflow\StructType\Task $midocoTask
     * @return \Pggns\MidocoApi\Workflow\StructType\AttachedTaskcreateRequest
     */
    public function setMidocoTask(?\Pggns\MidocoApi\Workflow\StructType\Task $midocoTask = null): self
    {
        $this->MidocoTask = $midocoTask;
        
        return $this;
    }
    /**
     * Get subject_type value
     * @return string|null
     */
    public function getSubject_type(): ?string
    {
        return $this->subject_type;
    }
    /**
     * Set subject_type value
     * @param string $subject_type
     * @return \Pggns\MidocoApi\Workflow\StructType\AttachedTaskcreateRequest
     */
    public function setSubject_type(?string $subject_type = null): self
    {
        // validation for constraint: string
        if (!is_null($subject_type) && !is_string($subject_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject_type, true), gettype($subject_type)), __LINE__);
        }
        $this->subject_type = $subject_type;
        
        return $this;
    }
    /**
     * Get appName value
     * @return string|null
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }
    /**
     * Set appName value
     * @param string $appName
     * @return \Pggns\MidocoApi\Workflow\StructType\AttachedTaskcreateRequest
     */
    public function setAppName(?string $appName = null): self
    {
        // validation for constraint: string
        if (!is_null($appName) && !is_string($appName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appName, true), gettype($appName)), __LINE__);
        }
        $this->appName = $appName;
        
        return $this;
    }
    /**
     * Get eventId value
     * @return string|null
     */
    public function getEventId(): ?string
    {
        return $this->eventId;
    }
    /**
     * Set eventId value
     * @param string $eventId
     * @return \Pggns\MidocoApi\Workflow\StructType\AttachedTaskcreateRequest
     */
    public function setEventId(?string $eventId = null): self
    {
        // validation for constraint: string
        if (!is_null($eventId) && !is_string($eventId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventId, true), gettype($eventId)), __LINE__);
        }
        $this->eventId = $eventId;
        
        return $this;
    }
}
