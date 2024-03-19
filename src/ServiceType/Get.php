<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Workflow\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getTasklist
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\TasklistRequest $paramTasklistRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\TasklistResponse|bool
     */
    public function getTasklist(\Pggns\MidocoApi\Workflow\StructType\TasklistRequest $paramTasklistRequest)
    {
        try {
            $this->setResult($resultGetTasklist = $this->getSoapClient()->__soapCall('getTasklist', [
                $paramTasklistRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTasklist;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGlobalNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticesRequest $paramGetGlobalNoticesRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticesResponse|bool
     */
    public function getGlobalNotices(\Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticesRequest $paramGetGlobalNoticesRequest)
    {
        try {
            $this->setResult($resultGetGlobalNotices = $this->getSoapClient()->__soapCall('getGlobalNotices', [
                $paramGetGlobalNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetGlobalNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGlobalNoticeComments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticeCommentsRequest $paramGetGlobalNoticeCommentsRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticeCommentsResponse|bool
     */
    public function getGlobalNoticeComments(\Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticeCommentsRequest $paramGetGlobalNoticeCommentsRequest)
    {
        try {
            $this->setResult($resultGetGlobalNoticeComments = $this->getSoapClient()->__soapCall('getGlobalNoticeComments', [
                $paramGetGlobalNoticeCommentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetGlobalNoticeComments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskDefinitionRequest $paramGetMidocoTaskDefinitionRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskDefinitionResponse|bool
     */
    public function getMidocoTaskDefinition(\Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskDefinitionRequest $paramGetMidocoTaskDefinitionRequest)
    {
        try {
            $this->setResult($resultGetMidocoTaskDefinition = $this->getSoapClient()->__soapCall('getMidocoTaskDefinition', [
                $paramGetMidocoTaskDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTaskDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoTaskPriority
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskPriorityRequest $paramGetMidocoTaskPriorityRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskPriorityResponse|bool
     */
    public function getMidocoTaskPriority(\Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskPriorityRequest $paramGetMidocoTaskPriorityRequest)
    {
        try {
            $this->setResult($resultGetMidocoTaskPriority = $this->getSoapClient()->__soapCall('getMidocoTaskPriority', [
                $paramGetMidocoTaskPriorityRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTaskPriority;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoTaskDefinitionDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskDefinitionDescriptionRequest $paramGetMidocoTaskDefinitionDescriptionRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskDefinitionDescriptionResponse|bool
     */
    public function getMidocoTaskDefinitionDescription(\Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskDefinitionDescriptionRequest $paramGetMidocoTaskDefinitionDescriptionRequest)
    {
        try {
            $this->setResult($resultGetMidocoTaskDefinitionDescription = $this->getSoapClient()->__soapCall('getMidocoTaskDefinitionDescription', [
                $paramGetMidocoTaskDefinitionDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTaskDefinitionDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskOverview
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetTaskOverviewRequest $paramGetTaskOverviewRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskOverviewResponse|bool
     */
    public function getTaskOverview(\Pggns\MidocoApi\Workflow\StructType\GetTaskOverviewRequest $paramGetTaskOverviewRequest)
    {
        try {
            $this->setResult($resultGetTaskOverview = $this->getSoapClient()->__soapCall('getTaskOverview', [
                $paramGetTaskOverviewRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTaskOverview;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest $paramGetTaskDetailsRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsResponse|bool
     */
    public function getTaskDetails(\Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest $paramGetTaskDetailsRequest)
    {
        try {
            $this->setResult($resultGetTaskDetails = $this->getSoapClient()->__soapCall('getTaskDetails', [
                $paramGetTaskDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTaskDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnitNamesForTaskSearch
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetUnitNamesForTaskSearchRequest $paramGetUnitNamesForTaskSearchRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetUnitNamesForTaskSearchResponse|bool
     */
    public function getUnitNamesForTaskSearch(\Pggns\MidocoApi\Workflow\StructType\GetUnitNamesForTaskSearchRequest $paramGetUnitNamesForTaskSearchRequest)
    {
        try {
            $this->setResult($resultGetUnitNamesForTaskSearch = $this->getSoapClient()->__soapCall('getUnitNamesForTaskSearch', [
                $paramGetUnitNamesForTaskSearchRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUnitNamesForTaskSearch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMyTaskViews
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewsRequest $paramGetMyTaskViewsRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewsResponse|bool
     */
    public function getMyTaskViews(\Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewsRequest $paramGetMyTaskViewsRequest)
    {
        try {
            $this->setResult($resultGetMyTaskViews = $this->getSoapClient()->__soapCall('getMyTaskViews', [
                $paramGetMyTaskViewsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMyTaskViews;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMyTaskViewQueues
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewQueuesRequest $paramGetMyTaskViewQueuesRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewQueuesResponse|bool
     */
    public function getMyTaskViewQueues(\Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewQueuesRequest $paramGetMyTaskViewQueuesRequest)
    {
        try {
            $this->setResult($resultGetMyTaskViewQueues = $this->getSoapClient()->__soapCall('getMyTaskViewQueues', [
                $paramGetMyTaskViewQueuesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMyTaskViewQueues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMyTaskViewUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUnitsRequest $paramGetMyTaskViewUnitsRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUnitsResponse|bool
     */
    public function getMyTaskViewUnits(\Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUnitsRequest $paramGetMyTaskViewUnitsRequest)
    {
        try {
            $this->setResult($resultGetMyTaskViewUnits = $this->getSoapClient()->__soapCall('getMyTaskViewUnits', [
                $paramGetMyTaskViewUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMyTaskViewUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMyTaskViewUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUserRequest $paramGetMyTaskViewUserRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUserResponse|bool
     */
    public function getMyTaskViewUser(\Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUserRequest $paramGetMyTaskViewUserRequest)
    {
        try {
            $this->setResult($resultGetMyTaskViewUser = $this->getSoapClient()->__soapCall('getMyTaskViewUser', [
                $paramGetMyTaskViewUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMyTaskViewUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskViewbyTime
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetTaskViewbyTimeRestrictionRequest $paramGetTaskViewbyTimeRestrictionRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewbyTimeRestrictionResponse|bool
     */
    public function getTaskViewbyTime(\Pggns\MidocoApi\Workflow\StructType\GetTaskViewbyTimeRestrictionRequest $paramGetTaskViewbyTimeRestrictionRequest)
    {
        try {
            $this->setResult($resultGetTaskViewbyTime = $this->getSoapClient()->__soapCall('getTaskViewbyTime', [
                $paramGetTaskViewbyTimeRestrictionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTaskViewbyTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskViewTaskDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetTaskViewTaskDetailsRequest $paramGetTaskViewTaskDetailsRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewTaskDetailsResponse|bool
     */
    public function getTaskViewTaskDetails(\Pggns\MidocoApi\Workflow\StructType\GetTaskViewTaskDetailsRequest $paramGetTaskViewTaskDetailsRequest)
    {
        try {
            $this->setResult($resultGetTaskViewTaskDetails = $this->getSoapClient()->__soapCall('getTaskViewTaskDetails', [
                $paramGetTaskViewTaskDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTaskViewTaskDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskCounter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetTaskCounterRequest $paramGetTaskCounterRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskCounterResponse|bool
     */
    public function getTaskCounter(\Pggns\MidocoApi\Workflow\StructType\GetTaskCounterRequest $paramGetTaskCounterRequest)
    {
        try {
            $this->setResult($resultGetTaskCounter = $this->getSoapClient()->__soapCall('getTaskCounter', [
                $paramGetTaskCounterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTaskCounter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskViewStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Workflow\StructType\GetTaskViewStatusRequest $paramGetTaskViewStatusRequest
     * @return \Pggns\MidocoApi\Workflow\StructType\GetTaskViewStatusResponse|bool
     */
    public function getTaskViewStatus(\Pggns\MidocoApi\Workflow\StructType\GetTaskViewStatusRequest $paramGetTaskViewStatusRequest)
    {
        try {
            $this->setResult($resultGetTaskViewStatus = $this->getSoapClient()->__soapCall('getTaskViewStatus', [
                $paramGetTaskViewStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTaskViewStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticeCommentsResponse|\Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticesResponse|\Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskDefinitionDescriptionResponse|\Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskDefinitionResponse|\Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskPriorityResponse|\Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewQueuesResponse|\Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewsResponse|\Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUnitsResponse|\Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUserResponse|\Pggns\MidocoApi\Workflow\StructType\GetTaskCounterResponse|\Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsResponse|\Pggns\MidocoApi\Workflow\StructType\GetTaskOverviewResponse|\Pggns\MidocoApi\Workflow\StructType\GetTaskViewbyTimeRestrictionResponse|\Pggns\MidocoApi\Workflow\StructType\GetTaskViewStatusResponse|\Pggns\MidocoApi\Workflow\StructType\GetTaskViewTaskDetailsResponse|\Pggns\MidocoApi\Workflow\StructType\GetUnitNamesForTaskSearchResponse|\Pggns\MidocoApi\Workflow\StructType\TasklistResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
