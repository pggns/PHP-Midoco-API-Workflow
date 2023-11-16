<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Workflow\ServiceType\Create
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named createTask
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\CreateTaskRequest $paramCreateTaskRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\CreateTaskResponse|bool
     */
    public function createTask(\Pggns\MidocoApi\Workflow\StructType\CreateTaskRequest $paramCreateTaskRequest)
    {
        try {
            $this->setResult($resultCreateTask = $this->getSoapClient()->__soapCall('createTask', [
                $paramCreateTaskRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateTask;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAttachedTask
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\AttachedTaskcreateRequest $paramAttachedTaskcreateRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\AttachedTaskcreateResponse|bool
     */
    public function createAttachedTask(\Pggns\MidocoApi\Workflow\StructType\AttachedTaskcreateRequest $paramAttachedTaskcreateRequest)
    {
        try {
            $this->setResult($resultCreateAttachedTask = $this->getSoapClient()->__soapCall('createAttachedTask', [
                $paramAttachedTaskcreateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAttachedTask;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Workflow\StructType\AttachedTaskcreateResponse|\Pggns\MidocoApi\Workflow\StructType\CreateTaskResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
