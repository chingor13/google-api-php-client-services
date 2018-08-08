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
 * The "bindings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicebrokerService = new Google_Service_ServiceBroker(...);
 *   $bindings = $servicebrokerService->bindings;
 *  </code>
 */
class Google_Service_ServiceBroker_Resource_ProjectsBrokersInstancesBindings extends Google_Service_Resource
{
  /**
   * Returns the state of the last operation for the binding. Only last (or
   * current) operation can be polled. (bindings.getLast_operation)
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
  /**
   * Lists all the bindings in the instance.
   * (bindings.listProjectsBrokersInstancesBindings)
   *
   * @param string $parent Parent must match
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]/` +
   * `v2/service_instances/[INSTANCE_ID]` or
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]/instances/[INSTANCE_ID]`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Specifies a page token to use. Set `pageToken` to
   * a `nextPageToken` returned by a previous list request to get the next page of
   * results.
   * @opt_param int pageSize Specifies the number of results to return per page.
   * If there are fewer elements than the specified number, returns all elements.
   * Optional. Acceptable values are 0 to 200, inclusive. (Default: 100)
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1ListBindingsResponse
   */
  public function listProjectsBrokersInstancesBindings($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1ListBindingsResponse");
  }
}
