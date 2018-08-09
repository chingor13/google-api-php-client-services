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
 * The "service_bindings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicebrokerService = new Google_Service_ServiceBroker(...);
 *   $service_bindings = $servicebrokerService->service_bindings;
 *  </code>
 */
class Google_Service_ServiceBroker_Resource_ProjectsBrokersV2ServiceInstancesServiceBindings extends Google_Service_Resource
{
  /**
   * CreateBinding generates a service binding to an existing service instance.
   * See ProviServiceInstance for async operation details.
   * (service_bindings.create)
   *
   * @param string $parent The GCP container. Must match `projects/[PROJECT_ID]/br
   * okers/[BROKER_ID]/v2/service_instances/[INSTANCE_ID]`.
   * @param string $bindingId The id of the binding. Must be unique within GCP
   * project. Maximum length is 64, GUID recommended. Required.
   * @param Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1Binding $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool acceptsIncomplete See CreateServiceInstanceRequest for
   * details.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1CreateBindingResponse
   */
  public function create($parent, $bindingId, Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1Binding $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'binding_id' => $bindingId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1CreateBindingResponse");
  }
  /**
   * Unbinds from a service instance. For synchronous/asynchronous request details
   * see CreateServiceInstance method. If binding does not exist HTTP 410 status
   * will be returned. (service_bindings.delete)
   *
   * @param string $name Name must match
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]/`
   * `v2/service_instances/[INSTANCE_ID]/service_bindings/[BINDING_ID]` or
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]/`
   * `/instances/[INSTANCE_ID]/bindings/[BINDING_ID]`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string serviceId Additional query parameter hints. The service id
   * of the service instance.
   * @opt_param bool acceptsIncomplete See CreateServiceInstanceRequest for
   * details.
   * @opt_param string planId The plan id of the service instance.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1DeleteBindingResponse
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1DeleteBindingResponse");
  }
  /**
   * GetBinding returns the binding information. (service_bindings.get)
   *
   * @param string $name Name must match `projects/[PROJECT_ID]/brokers/[BROKER_ID
   * ]/v2/service_instances/[INSTANCE_ID]/service_bindings`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string serviceId Service id.
   * @opt_param string planId Plan id.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1GetBindingResponse
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1GetBindingResponse");
  }
  /**
   * Returns the state of the last operation for the binding. Only last (or
   * current) operation can be polled. (service_bindings.getLast_operation)
   *
   * @param string $name Name must match `projects/[PROJECT_ID]/brokers/[BROKER_ID
   * ]/v2/service_instances/[INSTANCE_ID]/service_binding/[BINDING_ID]`.
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
}
