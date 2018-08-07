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
   * @param string $parent The GCP container. Must match
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]`.
   * @param string $instanceId The service instance to which to bind.
   * @param string $bindingId The id of the binding. Must be unique within GCP
   * project. Maximum length is 64, GUID recommended. Required.
   * @param Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1Binding $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool acceptsIncomplete See CreateServiceInstanceRequest for
   * details.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1CreateBindingResponse
   */
  public function create($parent, $instanceId, $bindingId, Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1Binding $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'instanceId' => $instanceId, 'binding_id' => $bindingId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1CreateBindingResponse");
  }
  /**
   * Unbinds from a service instance. For synchronous/asynchronous request details
   * see CreateServiceInstance method. If binding does not exist HTTP 410 status
   * will be returned. (service_bindings.delete)
   *
   * @param string $parent Parent must match
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]`.
   * @param string $instanceId The service instance id that deleted binding is
   * bound to.
   * @param string $bindingId The id of the binding to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string serviceId Additional query parameter hints. The service id
   * of the service instance.
   * @opt_param bool acceptsIncomplete See CreateServiceInstanceRequest for
   * details.
   * @opt_param string planId The plan id of the service instance.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1DeleteBindingResponse
   */
  public function delete($parent, $instanceId, $bindingId, $optParams = array())
  {
    $params = array('parent' => $parent, 'instanceId' => $instanceId, 'bindingId' => $bindingId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1DeleteBindingResponse");
  }
  /**
   * GetBinding returns the binding information. (service_bindings.get)
   *
   * @param string $parent Parent must match
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]`.
   * @param string $instanceId Instance id to which the binding is bound.
   * @param string $bindingId The binding id.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string planId Plan id.
   * @opt_param string serviceId Service id.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1GetBindingResponse
   */
  public function get($parent, $instanceId, $bindingId, $optParams = array())
  {
    $params = array('parent' => $parent, 'instanceId' => $instanceId, 'bindingId' => $bindingId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1GetBindingResponse");
  }
  /**
   * Returns the state of the last operation for the binding. Only last (or
   * current) operation can be polled. (service_bindings.getLast_operation)
   *
   * @param string $parent Parent must match
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]`.
   * @param string $instanceId The instance id that the binding is bound to.
   * @param string $bindingId The binding id for which to return the last
   * operation
   * @param array $optParams Optional parameters.
   *
   * @opt_param string planId Plan id.
   * @opt_param string serviceId Service id.
   * @opt_param string operation If `operation` was returned during mutation
   * operation, this field must be populated with the provided value.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1Operation
   */
  public function getLast_operation($parent, $instanceId, $bindingId, $optParams = array())
  {
    $params = array('parent' => $parent, 'instanceId' => $instanceId, 'bindingId' => $bindingId);
    $params = array_merge($params, $optParams);
    return $this->call('getLast_operation', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1Operation");
  }
}
