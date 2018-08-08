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
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicebrokerService = new Google_Service_ServiceBroker(...);
 *   $instances = $servicebrokerService->instances;
 *  </code>
 */
class Google_Service_ServiceBroker_Resource_ProjectsBrokersInstances extends Google_Service_Resource
{
  /**
   * Gets the given service instance from the system. This API is an extension and
   * not part of the OSB spec. Hence the path is a standard Google API URL.
   * (instances.get)
   *
   * @param string $name The resource name of the instance to return.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1ServiceInstance
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1ServiceInstance");
  }
}
