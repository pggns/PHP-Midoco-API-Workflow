<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Workflow\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteSubject
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteSubjectRequest $paramDeleteSubjectRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteSubjectResponse|bool
     */
    public function deleteSubject(\Pggns\MidocoApi\Workflow\StructType\DeleteSubjectRequest $paramDeleteSubjectRequest)
    {
        try {
            $this->setResult($resultDeleteSubject = $this->getSoapClient()->__soapCall('deleteSubject', [
                $paramDeleteSubjectRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSubject;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteGlobalNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteGlobalNoticesRequest $paramDeleteGlobalNoticesRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteGlobalNoticesResponse|bool
     */
    public function deleteGlobalNotices(\Pggns\MidocoApi\Workflow\StructType\DeleteGlobalNoticesRequest $paramDeleteGlobalNoticesRequest)
    {
        try {
            $this->setResult($resultDeleteGlobalNotices = $this->getSoapClient()->__soapCall('deleteGlobalNotices', [
                $paramDeleteGlobalNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteGlobalNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionRequest $paramDeleteMidocoTaskDefinitionRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionResponse|bool
     */
    public function deleteMidocoTaskDefinition(\Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionRequest $paramDeleteMidocoTaskDefinitionRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTaskDefinition = $this->getSoapClient()->__soapCall('deleteMidocoTaskDefinition', [
                $paramDeleteMidocoTaskDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTaskDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTaskPriority
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskPriorityRequest $paramDeleteMidocoTaskPriorityRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskPriorityResponse|bool
     */
    public function deleteMidocoTaskPriority(\Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskPriorityRequest $paramDeleteMidocoTaskPriorityRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTaskPriority = $this->getSoapClient()->__soapCall('deleteMidocoTaskPriority', [
                $paramDeleteMidocoTaskPriorityRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTaskPriority;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteMidocoTaskDefinitionDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionDescriptionRequest $paramDeleteMidocoTaskDefinitionDescriptionRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionDescriptionResponse|bool
     */
    public function deleteMidocoTaskDefinitionDescription(\Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionDescriptionRequest $paramDeleteMidocoTaskDefinitionDescriptionRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTaskDefinitionDescription = $this->getSoapClient()->__soapCall('deleteMidocoTaskDefinitionDescription', [
                $paramDeleteMidocoTaskDefinitionDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTaskDefinitionDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRuleDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteRuleDefinitionRequest $paramDeleteRuleDefinitionRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteRuleDefinitionResponse|bool
     */
    public function deleteRuleDefinition(\Pggns\MidocoApi\Workflow\StructType\DeleteRuleDefinitionRequest $paramDeleteRuleDefinitionRequest)
    {
        try {
            $this->setResult($resultDeleteRuleDefinition = $this->getSoapClient()->__soapCall('deleteRuleDefinition', [
                $paramDeleteRuleDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRuleDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRuleCriteriaOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaOrderRequest $paramDeleteRuleCriteriaOrderRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaOrderResponse|bool
     */
    public function deleteRuleCriteriaOrder(\Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaOrderRequest $paramDeleteRuleCriteriaOrderRequest)
    {
        try {
            $this->setResult($resultDeleteRuleCriteriaOrder = $this->getSoapClient()->__soapCall('deleteRuleCriteriaOrder', [
                $paramDeleteRuleCriteriaOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRuleCriteriaOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRuleCriteriaCrmAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaCrmAttributeRequest $paramDeleteRuleCriteriaCrmAttributeRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaCrmAttributeResponse|bool
     */
    public function deleteRuleCriteriaCrmAttribute(\Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaCrmAttributeRequest $paramDeleteRuleCriteriaCrmAttributeRequest)
    {
        try {
            $this->setResult($resultDeleteRuleCriteriaCrmAttribute = $this->getSoapClient()->__soapCall('deleteRuleCriteriaCrmAttribute', [
                $paramDeleteRuleCriteriaCrmAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRuleCriteriaCrmAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRuleCriteriaCrm
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaCrmRequest $paramDeleteRuleCriteriaCrmRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaCrmResponse|bool
     */
    public function deleteRuleCriteriaCrm(\Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaCrmRequest $paramDeleteRuleCriteriaCrmRequest)
    {
        try {
            $this->setResult($resultDeleteRuleCriteriaCrm = $this->getSoapClient()->__soapCall('deleteRuleCriteriaCrm', [
                $paramDeleteRuleCriteriaCrmRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRuleCriteriaCrm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRuleCriteriaOrderAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaOrderAttributeRequest $paramDeleteRuleCriteriaOrderAttributeRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaOrderAttributeResponse|bool
     */
    public function deleteRuleCriteriaOrderAttribute(\Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaOrderAttributeRequest $paramDeleteRuleCriteriaOrderAttributeRequest)
    {
        try {
            $this->setResult($resultDeleteRuleCriteriaOrderAttribute = $this->getSoapClient()->__soapCall('deleteRuleCriteriaOrderAttribute', [
                $paramDeleteRuleCriteriaOrderAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRuleCriteriaOrderAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\DeleteTaskRequest $paramDeleteTaskRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteTaskResponse|bool
     */
    public function deleteNotice(\Pggns\MidocoApi\Workflow\StructType\DeleteTaskRequest $paramDeleteTaskRequest)
    {
        try {
            $this->setResult($resultDeleteNotice = $this->getSoapClient()->__soapCall('deleteNotice', [
                $paramDeleteTaskRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Workflow\StructType\DeleteGlobalNoticesResponse|\Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionDescriptionResponse|\Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionResponse|\Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskPriorityResponse|\Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaCrmAttributeResponse|\Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaCrmResponse|\Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaOrderAttributeResponse|\Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaOrderResponse|\Pggns\MidocoApi\Workflow\StructType\DeleteRuleDefinitionResponse|\Pggns\MidocoApi\Workflow\StructType\DeleteSubjectResponse|\Pggns\MidocoApi\Workflow\StructType\DeleteTaskResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
