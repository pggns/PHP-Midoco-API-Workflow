<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for List ServiceType
 * @subpackage Services
 */
class _List extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Workflow\ServiceType\_List
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named listRuleDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\ListRuleDefinitionRequest $paramListRuleDefinitionRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleDefinitionResponse|bool
     */
    public function listRuleDefinition(\Pggns\MidocoApi\Workflow\StructType\ListRuleDefinitionRequest $paramListRuleDefinitionRequest)
    {
        try {
            $this->setResult($resultListRuleDefinition = $this->getSoapClient()->__soapCall('listRuleDefinition', [
                $paramListRuleDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListRuleDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listRuleCriteriaOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderRequest $paramListRuleCriteriaOrderRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderResponse|bool
     */
    public function listRuleCriteriaOrder(\Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderRequest $paramListRuleCriteriaOrderRequest)
    {
        try {
            $this->setResult($resultListRuleCriteriaOrder = $this->getSoapClient()->__soapCall('listRuleCriteriaOrder', [
                $paramListRuleCriteriaOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListRuleCriteriaOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listRuleCriteriaCrmAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmAttributeRequest $paramListRuleCriteriaCrmAttributeRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmAttributeResponse|bool
     */
    public function listRuleCriteriaCrmAttribute(\Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmAttributeRequest $paramListRuleCriteriaCrmAttributeRequest)
    {
        try {
            $this->setResult($resultListRuleCriteriaCrmAttribute = $this->getSoapClient()->__soapCall('listRuleCriteriaCrmAttribute', [
                $paramListRuleCriteriaCrmAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListRuleCriteriaCrmAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listRuleCriteriaCrm
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmRequest $paramListRuleCriteriaCrmRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmResponse|bool
     */
    public function listRuleCriteriaCrm(\Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmRequest $paramListRuleCriteriaCrmRequest)
    {
        try {
            $this->setResult($resultListRuleCriteriaCrm = $this->getSoapClient()->__soapCall('listRuleCriteriaCrm', [
                $paramListRuleCriteriaCrmRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListRuleCriteriaCrm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listRuleCriteriaOrderAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderAttributeRequest $paramListRuleCriteriaOrderAttributeRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderAttributeResponse|bool
     */
    public function listRuleCriteriaOrderAttribute(\Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderAttributeRequest $paramListRuleCriteriaOrderAttributeRequest)
    {
        try {
            $this->setResult($resultListRuleCriteriaOrderAttribute = $this->getSoapClient()->__soapCall('listRuleCriteriaOrderAttribute', [
                $paramListRuleCriteriaOrderAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListRuleCriteriaOrderAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listTaskDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsRequest $paramListTaskDetailsRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsResponse|bool
     */
    public function listTaskDetails(\Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsRequest $paramListTaskDetailsRequest)
    {
        try {
            $this->setResult($resultListTaskDetails = $this->getSoapClient()->__soapCall('listTaskDetails', [
                $paramListTaskDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListTaskDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmAttributeResponse|\Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmResponse|\Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderAttributeResponse|\Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderResponse|\Pggns\MidocoApi\Workflow\StructType\ListRuleDefinitionResponse|\Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
