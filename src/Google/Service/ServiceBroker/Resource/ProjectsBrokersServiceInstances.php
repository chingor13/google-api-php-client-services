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
class Google_Service_ServiceBroker_Resource_ProjectsBrokersServiceInstances extends Google_Service_Resource
{
  /**
   * Lists all the instances in the brokers This API is an extension and not part
   * of the OSB spec. Hence the path is a standard Google API URL.
   * (service_instances.listProjectsBrokersServiceInstances)
   *
   * @param string $parent Parent must match
   * `projects/[PROJECT_ID]/brokers/[BROKER_ID]`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Specifies a page token to use. Set `pageToken` to
   * a `nextPageToken` returned by a previous list request to get the next page of
   * results.
   * @opt_param int pageSize Specifies the number of results to return per page.
   * If there are fewer elements than the specified number, returns all elements.
   * Optional. If unset or 0, all the results will be returned.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1ListServiceInstancesResponse
   */
  public function listProjectsBrokersServiceInstances($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1ListServiceInstancesResponse");
  }
}
