<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/WorkflowService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/WorkflowService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\Workflow\ClassMap::get(),
];
/**
 * Samples for Create ServiceType
 */
$create = new \Pggns\MidocoApi\Workflow\ServiceType\Create($options);
$create->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for createTask operation/method
 */
if ($create->createTask(new \Pggns\MidocoApi\Workflow\StructType\CreateTaskRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createAttachedTask operation/method
 */
if ($create->createAttachedTask(new \Pggns\MidocoApi\Workflow\StructType\AttachedTaskcreateRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Finish ServiceType
 */
$finish = new \Pggns\MidocoApi\Workflow\ServiceType\Finish($options);
$finish->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for finishTask operation/method
 */
if ($finish->finishTask(new \Pggns\MidocoApi\Workflow\StructType\FinishTaskRequest()) !== false) {
    print_r($finish->getResult());
} else {
    print_r($finish->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\Workflow\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for saveTask operation/method
 */
if ($save->saveTask(new \Pggns\MidocoApi\Workflow\StructType\SaveTaskRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveGlobalNotices operation/method
 */
if ($save->saveGlobalNotices(new \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveGlobalNoticeComment operation/method
 */
if ($save->saveGlobalNoticeComment(new \Pggns\MidocoApi\Workflow\StructType\SaveGlobalNoticeCommentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoTaskDefinition operation/method
 */
if ($save->saveMidocoTaskDefinition(new \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoTaskPriority operation/method
 */
if ($save->saveMidocoTaskPriority(new \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskPriorityRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoTaskDefinitionDescription operation/method
 */
if ($save->saveMidocoTaskDefinitionDescription(new \Pggns\MidocoApi\Workflow\StructType\SaveMidocoTaskDefinitionDescriptionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveWorkingUser operation/method
 */
if ($save->saveWorkingUser(new \Pggns\MidocoApi\Workflow\StructType\SaveWorkingUserRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveRuleDefinition operation/method
 */
if ($save->saveRuleDefinition(new \Pggns\MidocoApi\Workflow\StructType\SaveRuleDefinitionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveRuleCriteriaOrder operation/method
 */
if ($save->saveRuleCriteriaOrder(new \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveRuleCriteriaCrmAttribute operation/method
 */
if ($save->saveRuleCriteriaCrmAttribute(new \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmAttributeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveRuleCriteriaCrm operation/method
 */
if ($save->saveRuleCriteriaCrm(new \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaCrmRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveRuleCriteriaOrderAttribute operation/method
 */
if ($save->saveRuleCriteriaOrderAttribute(new \Pggns\MidocoApi\Workflow\StructType\SaveRuleCriteriaOrderAttributeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMyTaskViews operation/method
 */
if ($save->saveMyTaskViews(new \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewsRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMyTaskViewQueues operation/method
 */
if ($save->saveMyTaskViewQueues(new \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewQueuesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMyTaskViewUnits operation/method
 */
if ($save->saveMyTaskViewUnits(new \Pggns\MidocoApi\Workflow\StructType\SaveMyTaskViewUnitsRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\Workflow\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getTasklist operation/method
 */
if ($get->getTasklist(new \Pggns\MidocoApi\Workflow\StructType\TasklistRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGlobalNotices operation/method
 */
if ($get->getGlobalNotices(new \Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGlobalNoticeComments operation/method
 */
if ($get->getGlobalNoticeComments(new \Pggns\MidocoApi\Workflow\StructType\GetGlobalNoticeCommentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoTaskDefinition operation/method
 */
if ($get->getMidocoTaskDefinition(new \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskDefinitionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoTaskPriority operation/method
 */
if ($get->getMidocoTaskPriority(new \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskPriorityRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoTaskDefinitionDescription operation/method
 */
if ($get->getMidocoTaskDefinitionDescription(new \Pggns\MidocoApi\Workflow\StructType\GetMidocoTaskDefinitionDescriptionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTaskOverview operation/method
 */
if ($get->getTaskOverview(new \Pggns\MidocoApi\Workflow\StructType\GetTaskOverviewRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTaskDetails operation/method
 */
if ($get->getTaskDetails(new \Pggns\MidocoApi\Workflow\StructType\GetTaskDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUnitNamesForTaskSearch operation/method
 */
if ($get->getUnitNamesForTaskSearch(new \Pggns\MidocoApi\Workflow\StructType\GetUnitNamesForTaskSearchRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMyTaskViews operation/method
 */
if ($get->getMyTaskViews(new \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMyTaskViewQueues operation/method
 */
if ($get->getMyTaskViewQueues(new \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewQueuesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMyTaskViewUnits operation/method
 */
if ($get->getMyTaskViewUnits(new \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUnitsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMyTaskViewUser operation/method
 */
if ($get->getMyTaskViewUser(new \Pggns\MidocoApi\Workflow\StructType\GetMyTaskViewUserRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTaskViewbyTime operation/method
 */
if ($get->getTaskViewbyTime(new \Pggns\MidocoApi\Workflow\StructType\GetTaskViewbyTimeRestrictionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTaskViewTaskDetails operation/method
 */
if ($get->getTaskViewTaskDetails(new \Pggns\MidocoApi\Workflow\StructType\GetTaskViewTaskDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTaskCounter operation/method
 */
if ($get->getTaskCounter(new \Pggns\MidocoApi\Workflow\StructType\GetTaskCounterRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTaskViewStatus operation/method
 */
if ($get->getTaskViewStatus(new \Pggns\MidocoApi\Workflow\StructType\GetTaskViewStatusRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Start ServiceType
 */
$start = new \Pggns\MidocoApi\Workflow\ServiceType\Start($options);
$start->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for startTask operation/method
 */
if ($start->startTask(new \Pggns\MidocoApi\Workflow\StructType\StartTaskRequest()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\Workflow\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deleteSubject operation/method
 */
if ($delete->deleteSubject(new \Pggns\MidocoApi\Workflow\StructType\DeleteSubjectRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteGlobalNotices operation/method
 */
if ($delete->deleteGlobalNotices(new \Pggns\MidocoApi\Workflow\StructType\DeleteGlobalNoticesRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoTaskDefinition operation/method
 */
if ($delete->deleteMidocoTaskDefinition(new \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoTaskPriority operation/method
 */
if ($delete->deleteMidocoTaskPriority(new \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskPriorityRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoTaskDefinitionDescription operation/method
 */
if ($delete->deleteMidocoTaskDefinitionDescription(new \Pggns\MidocoApi\Workflow\StructType\DeleteMidocoTaskDefinitionDescriptionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteRuleDefinition operation/method
 */
if ($delete->deleteRuleDefinition(new \Pggns\MidocoApi\Workflow\StructType\DeleteRuleDefinitionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteRuleCriteriaOrder operation/method
 */
if ($delete->deleteRuleCriteriaOrder(new \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaOrderRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteRuleCriteriaCrmAttribute operation/method
 */
if ($delete->deleteRuleCriteriaCrmAttribute(new \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaCrmAttributeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteRuleCriteriaCrm operation/method
 */
if ($delete->deleteRuleCriteriaCrm(new \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaCrmRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteRuleCriteriaOrderAttribute operation/method
 */
if ($delete->deleteRuleCriteriaOrderAttribute(new \Pggns\MidocoApi\Workflow\StructType\DeleteRuleCriteriaOrderAttributeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteNotice operation/method
 */
if ($delete->deleteNotice(new \Pggns\MidocoApi\Workflow\StructType\DeleteTaskRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Mark ServiceType
 */
$mark = new \Pggns\MidocoApi\Workflow\ServiceType\Mark($options);
$mark->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for markVoidedGlobalNoticeComment operation/method
 */
if ($mark->markVoidedGlobalNoticeComment(new \Pggns\MidocoApi\Workflow\StructType\MarkVoidedGlobalNoticeCommentRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \Pggns\MidocoApi\Workflow\ServiceType\_List($options);
$list->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for listRuleDefinition operation/method
 */
if ($list->listRuleDefinition(new \Pggns\MidocoApi\Workflow\StructType\ListRuleDefinitionRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listRuleCriteriaOrder operation/method
 */
if ($list->listRuleCriteriaOrder(new \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listRuleCriteriaCrmAttribute operation/method
 */
if ($list->listRuleCriteriaCrmAttribute(new \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmAttributeRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listRuleCriteriaCrm operation/method
 */
if ($list->listRuleCriteriaCrm(new \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaCrmRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listRuleCriteriaOrderAttribute operation/method
 */
if ($list->listRuleCriteriaOrderAttribute(new \Pggns\MidocoApi\Workflow\StructType\ListRuleCriteriaOrderAttributeRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for listTaskDetails operation/method
 */
if ($list->listTaskDetails(new \Pggns\MidocoApi\Workflow\StructType\ListTaskDetailsRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
