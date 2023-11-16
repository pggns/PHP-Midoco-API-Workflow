<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessibleComponentsByRoleRequest StructType
 * @subpackage Structs
 */
class GetAccessibleComponentsByRoleRequest extends AbstractStructBase
{
    /**
     * The MidocoAccessibleComponentByRole
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoAccessibleComponentByRole
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoAccessibleComponentByRoleType
     */
    protected \Pggns\MidocoApi\Workflow\StructType\MidocoAccessibleComponentByRoleType $MidocoAccessibleComponentByRole;
    /**
     * Constructor method for GetAccessibleComponentsByRoleRequest
     * @uses GetAccessibleComponentsByRoleRequest::setMidocoAccessibleComponentByRole()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     */
    public function __construct(\Pggns\MidocoApi\Workflow\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole)
    {
        $this
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoAccessibleComponentByRoleType
     */
    public function getMidocoAccessibleComponentByRole(): \Pggns\MidocoApi\Workflow\StructType\MidocoAccessibleComponentByRoleType
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * Set MidocoAccessibleComponentByRole value
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     * @return \Pggns\MidocoApi\Workflow\StructType\GetAccessibleComponentsByRoleRequest
     */
    public function setMidocoAccessibleComponentByRole(\Pggns\MidocoApi\Workflow\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole): self
    {
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
}
