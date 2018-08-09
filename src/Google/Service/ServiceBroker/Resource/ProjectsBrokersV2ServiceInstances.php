<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "service_instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicebrokerService = new Google_Service_ServiceBroker(...);
 *   $service_instances = $servicebrokerService->service_instances;
 *  </code>
 */
class Google_Service_ServiceBroker_Resource_ProjectsBrokersV2ServiceInstances extends Google_Service_Resource
{
  /**
   * Provisions a service instance. If `request.accepts_incomplete` is false and
   * Broker cannot execute request synchronously HTTP 422 error will be returned
   * along with FAILED_PRECONDITION status. If `request.accepts_incomplete` is
   * true and the Broker decides to execute resource asynchronously then HTTP 202
   * response code will be returned and a valid polling operation in the response
   * will be included. If Broker executes the request synchronously and it
   * succeeds HTTP 201 response will be furnished. If identical instance exists,
   * then HTTP 200 response will be returned. If an instance with identical ID but
   * mismatching parameters exists, then HTTP 409 status code will be returned.
   * (service_instances.create)
   *
   * @param string $parent Parent must match
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]`.
   * @param string $instanceId The id of the service instance. Must be unique
   * within GCP project. Maximum length is 64, GUID recommended. Required.
   * @param Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1ServiceInstance $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool acceptsIncomplete Value indicating that API client supports
   * asynchronous operations. If Broker cannot execute the request synchronously
   * HTTP 422 code will be returned to HTTP clients along with FAILED_PRECONDITION
   * error. If true and broker will execute request asynchronously 202 HTTP code
   * will be returned. This broker always requires this to be true as all mutator
   * operations are asynchronous.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1CreateServiceInstanceResponse
   */
  public function create($parent, $instanceId, Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1ServiceInstance $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'instance_id' => $instanceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1CreateServiceInstanceResponse");
  }
  /**
   * Deprovisions a service instance. For synchronous/asynchronous request details
   * see CreateServiceInstance method. If service instance does not exist HTTP 410
   * status will be returned. (service_instances.delete)
   *
   * @param string $name Name must match
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]/` +
   * `v2/service_instances/[INSTANCE_ID]` or
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]/instances/[INSTANCE_ID]`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string serviceId The service id of the service instance.
   * @opt_param bool acceptsIncomplete See CreateServiceInstanceRequest for
   * details.
   * @opt_param string planId The plan id of the service instance.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1DeleteServiceInstanceResponse
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1DeleteServiceInstanceResponse");
  }
  /**
   * Gets the given service instance from the system. The API call accepts both
   * OSB style API and standard google style API resource path. i.e. both
   * `projects/brokers/instances`  and `projects/brokers/v2/service_instances` are
   * acceptable paths. (service_instances.get)
   *
   * @param string $name The resource name of the instance to return. Name must
   * match `projects/[PROJECT_ID]/brokers/[BROKER_ID]/` +
   * `v2/service_instances/[INSTANCE_ID]` or
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]/instances/[INSTANCE_ID]`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1ServiceInstance
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1ServiceInstance");
  }
  /**
   * Returns the state of the last operation for the service instance. Only last
   * (or current) operation can be polled. (service_instances.getLast_operation)
   *
   * @param string $name Name must match
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]/v2/`+
   * `service_instances/[INSTANCE_ID]`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string planId Plan id.
   * @opt_param string serviceId Service id.
   * @opt_param string operation If `operation` was returned during mutation
   * operation, this field must be populated with the provided value.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1Operation
   */
  public function getLast_operation($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getLast_operation', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1Operation");
  }
  /**
   * Updates an existing service instance. See CreateServiceInstance for possible
   * response codes. (service_instances.patch)
   *
   * @param string $name Name must match `projects/[PROJECT_ID]/brokers/[BROKER_ID
   * ]/v2/service_instances/[INSTANCE_ID]`.
   * @param Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1ServiceInstance $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool acceptsIncomplete See CreateServiceInstanceRequest for
   * details.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1UpdateServiceInstanceResponse
   */
  public function patch($name, Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1ServiceInstance $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1UpdateServiceInstanceResponse");
  }
}
