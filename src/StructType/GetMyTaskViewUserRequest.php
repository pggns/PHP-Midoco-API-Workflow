<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyTaskViewUserRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMyTaskViewUserRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskViewUser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoTaskViewUser
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser
     */
    protected \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser $MidocoTaskViewUser;
    /**
     * Constructor method for GetMyTaskViewUserRequest
     * @uses GetMyTaskViewUserRequest::setMidocoTaskViewUser()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser $midocoTaskViewUser
     */
    public function __construct(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser $midocoTaskViewUser)
    {
        $this
            ->setMidocoTaskViewUser($midocoTaskViewUser);
    }
    /**
     * Get MidocoTaskViewUser value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser
     */
    public function getMidocoTaskViewUser(): \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser
    {
        return $this->MidocoTaskViewUser;
    }
    /**
     * Set MidocoTaskViewUser value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser $midocoTaskViewUser
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUserRequest
     */
    public function setMidocoTaskViewUser(\Pggns\MidocoApi\Workflow\StructType\MidocoTaskViewUser $midocoTaskViewUser): self
    {
        $this->MidocoTaskViewUser = $midocoTaskViewUser;
        
        return $this;
    }
}
