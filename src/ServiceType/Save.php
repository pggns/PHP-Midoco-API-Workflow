<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Workflow\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named saveTask
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveTaskRequest $paramSaveTaskRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveTaskResponse|bool
     */
    public function saveTask(\Pggns\MidocoApi\Workflow\StructType\SaveTaskRequest $paramSaveTaskRequest)
    {
        try {
            $this->setResult($resultSaveTask = $this->getSoapClient()->__soapCall('saveTask', [
                $paramSaveTaskRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTask;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveGlobalNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticesRequest $paramSaveGlobalNoticesRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticesResponse|bool
     */
    public function saveGlobalNotices(\Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticesRequest $paramSaveGlobalNoticesRequest)
    {
        try {
            $this->setResult($resultSaveGlobalNotices = $this->getSoapClient()->__soapCall('saveGlobalNotices', [
                $paramSaveGlobalNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveGlobalNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveGlobalNoticeComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticeCommentRequest $paramSaveGlobalNoticeCommentRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticeCommentResponse|bool
     */
    public function saveGlobalNoticeComment(\Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticeCommentRequest $paramSaveGlobalNoticeCommentRequest)
    {
        try {
            $this->setResult($resultSaveGlobalNoticeComment = $this->getSoapClient()->__soapCall('saveGlobalNoticeComment', [
                $paramSaveGlobalNoticeCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveGlobalNoticeComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionRequest $paramSaveMidocoTaskDefinitionRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionResponse|bool
     */
    public function saveMidocoTaskDefinition(\Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionRequest $paramSaveMidocoTaskDefinitionRequest)
    {
        try {
            $this->setResult($resultSaveMidocoTaskDefinition = $this->getSoapClient()->__soapCall('saveMidocoTaskDefinition', [
                $paramSaveMidocoTaskDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTaskDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoTaskPriority
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskPriorityRequest $paramSaveMidocoTaskPriorityRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskPriorityResponse|bool
     */
    public function saveMidocoTaskPriority(\Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskPriorityRequest $paramSaveMidocoTaskPriorityRequest)
    {
        try {
            $this->setResult($resultSaveMidocoTaskPriority = $this->getSoapClient()->__soapCall('saveMidocoTaskPriority', [
                $paramSaveMidocoTaskPriorityRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTaskPriority;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * saveMidocoTaskDefinitionDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionDescriptionRequest $paramSaveMidocoTaskDefinitionDescriptionRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionDescriptionResponse|bool
     */
    public function saveMidocoTaskDefinitionDescription(\Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionDescriptionRequest $paramSaveMidocoTaskDefinitionDescriptionRequest)
    {
        try {
            $this->setResult($resultSaveMidocoTaskDefinitionDescription = $this->getSoapClient()->__soapCall('saveMidocoTaskDefinitionDescription', [
                $paramSaveMidocoTaskDefinitionDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTaskDefinitionDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveWorkingUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveWorkingUserRequest $paramSaveWorkingUserRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveWorkingUserResponse|bool
     */
    public function saveWorkingUser(\Pggns\MidocoApi\Workflow\StructType\SaveWorkingUserRequest $paramSaveWorkingUserRequest)
    {
        try {
            $this->setResult($resultSaveWorkingUser = $this->getSoapClient()->__soapCall('saveWorkingUser', [
                $paramSaveWorkingUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveWorkingUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRuleDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveRuleDefinitionRequest $paramSaveRuleDefinitionRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleDefinitionResponse|bool
     */
    public function saveRuleDefinition(\Pggns\MidocoApi\Workflow\StructType\SaveRuleDefinitionRequest $paramSaveRuleDefinitionRequest)
    {
        try {
            $this->setResult($resultSaveRuleDefinition = $this->getSoapClient()->__soapCall('saveRuleDefinition', [
                $paramSaveRuleDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRuleDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRuleCriteriaOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderRequest $paramSaveRuleCriteriaOrderRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderResponse|bool
     */
    public function saveRuleCriteriaOrder(\Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderRequest $paramSaveRuleCriteriaOrderRequest)
    {
        try {
            $this->setResult($resultSaveRuleCriteriaOrder = $this->getSoapClient()->__soapCall('saveRuleCriteriaOrder', [
                $paramSaveRuleCriteriaOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRuleCriteriaOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRuleCriteriaCrmAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmAttributeRequest $paramSaveRuleCriteriaCrmAttributeRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmAttributeResponse|bool
     */
    public function saveRuleCriteriaCrmAttribute(\Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmAttributeRequest $paramSaveRuleCriteriaCrmAttributeRequest)
    {
        try {
            $this->setResult($resultSaveRuleCriteriaCrmAttribute = $this->getSoapClient()->__soapCall('saveRuleCriteriaCrmAttribute', [
                $paramSaveRuleCriteriaCrmAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRuleCriteriaCrmAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRuleCriteriaCrm
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmRequest $paramSaveRuleCriteriaCrmRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmResponse|bool
     */
    public function saveRuleCriteriaCrm(\Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmRequest $paramSaveRuleCriteriaCrmRequest)
    {
        try {
            $this->setResult($resultSaveRuleCriteriaCrm = $this->getSoapClient()->__soapCall('saveRuleCriteriaCrm', [
                $paramSaveRuleCriteriaCrmRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRuleCriteriaCrm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRuleCriteriaOrderAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderAttributeRequest $paramSaveRuleCriteriaOrderAttributeRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderAttributeResponse|bool
     */
    public function saveRuleCriteriaOrderAttribute(\Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderAttributeRequest $paramSaveRuleCriteriaOrderAttributeRequest)
    {
        try {
            $this->setResult($resultSaveRuleCriteriaOrderAttribute = $this->getSoapClient()->__soapCall('saveRuleCriteriaOrderAttribute', [
                $paramSaveRuleCriteriaOrderAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRuleCriteriaOrderAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMyTaskViews
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewsRequest $paramSaveMyTaskViewsRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewsResponse|bool
     */
    public function saveMyTaskViews(\Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewsRequest $paramSaveMyTaskViewsRequest)
    {
        try {
            $this->setResult($resultSaveMyTaskViews = $this->getSoapClient()->__soapCall('saveMyTaskViews', [
                $paramSaveMyTaskViewsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMyTaskViews;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMyTaskViewQueues
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewQueuesRequest $paramSaveMyTaskViewQueuesRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewQueuesResponse|bool
     */
    public function saveMyTaskViewQueues(\Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewQueuesRequest $paramSaveMyTaskViewQueuesRequest)
    {
        try {
            $this->setResult($resultSaveMyTaskViewQueues = $this->getSoapClient()->__soapCall('saveMyTaskViewQueues', [
                $paramSaveMyTaskViewQueuesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMyTaskViewQueues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMyTaskViewUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewUnitsRequest $paramSaveMyTaskViewUnitsRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewUnitsResponse|bool
     */
    public function saveMyTaskViewUnits(\Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewUnitsRequest $paramSaveMyTaskViewUnitsRequest)
    {
        try {
            $this->setResult($resultSaveMyTaskViewUnits = $this->getSoapClient()->__soapCall('saveMyTaskViewUnits', [
                $paramSaveMyTaskViewUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMyTaskViewUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticeCommentResponse|\Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticesResponse|\Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionDescriptionResponse|\Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionResponse|\Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskPriorityResponse|\Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewQueuesResponse|\Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewsResponse|\Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewUnitsResponse|\Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmAttributeResponse|\Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmResponse|\Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderAttributeResponse|\Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderResponse|\Pggns\MidocoApi\Workflow\StructType\SaveRuleDefinitionResponse|\Pggns\MidocoApi\Workflow\StructType\SaveTaskResponse|\Pggns\MidocoApi\Workflow\StructType\SaveWorkingUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
