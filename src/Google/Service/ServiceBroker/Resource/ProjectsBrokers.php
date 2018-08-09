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
 * The "brokers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicebrokerService = new Google_Service_ServiceBroker(...);
 *   $brokers = $servicebrokerService->brokers;
 *  </code>
 */
class Google_Service_ServiceBroker_Resource_ProjectsBrokers extends Google_Service_Resource
{
  /**
   * CreateBroker creates a Broker. (brokers.create)
   *
   * @param string $parent The project in which to create broker.
   * @param Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1Broker $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1Broker
   */
  public function create($parent, Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1Broker $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1Broker");
  }
  /**
   * DeleteBroker deletes a Broker. (brokers.delete)
   *
   * @param string $name The broker to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceBroker_GoogleProtobufEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_ServiceBroker_GoogleProtobufEmpty");
  }
  /**
   * ListBrokers lists brokers. (brokers.listProjectsBrokers)
   *
   * @param string $parent Parent must match `projects/[PROJECT_ID]/brokers`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Specifies a page token to use. Set `pageToken` to
   * a `nextPageToken` returned by a previous list request to get the next page of
   * results.
   * @opt_param int pageSize Specifies the number of results to return per page.
   * If there are fewer elements than the specified number, returns all elements.
   * Optional. Acceptable values are 0 to 200, inclusive. (Default: 100)
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1ListBrokersResponse
   */
  public function listProjectsBrokers($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1ListBrokersResponse");
  }
}
