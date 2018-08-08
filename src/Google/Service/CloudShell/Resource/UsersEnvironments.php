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
 * The "environments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudshellService = new Google_Service_CloudShell(...);
 *   $environments = $cloudshellService->environments;
 *  </code>
 */
class Google_Service_CloudShell_Resource_UsersEnvironments extends Google_Service_Resource
{
  /**
   * Gets an environment. Returns NOT_FOUND if the environment does not exist.
   * (environments.get)
   *
   * @param string $name Name of the requested resource, for example
   * `users/me/environments/default` or
   * `users/someone@example.com/environments/default`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudShell_Environment
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudShell_Environment");
  }
  /**
   * Updates an existing environment. (environments.patch)
   *
   * @param string $name Name of the resource to be updated, for example
   * `users/me/environments/default` or
   * `users/someone@example.com/environments/default`.
   * @param Google_Service_CloudShell_Environment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Mask specifying which fields in the environment
   * should be updated.
   * @return Google_Service_CloudShell_Environment
   */
  public function patch($name, Google_Service_CloudShell_Environment $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_CloudShell_Environment");
  }
  /**
   * Starts an existing environment, allowing clients to connect to it. The
   * returned operation will contain an instance of StartEnvironmentMetadata in
   * its metadata field. Users can wait for the environment to start by polling
   * this operation via GetOperation. Once the environment has finished starting
   * and is ready to accept connections, the operation will contain a
   * StartEnvironmentResponse in its response field. (environments.start)
   *
   * @param string $name Name of the resource that should be started, for example
   * `users/me/environments/default` or
   * `users/someone@example.com/environments/default`.
   * @param Google_Service_CloudShell_StartEnvironmentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudShell_Operation
   */
  public function start($name, Google_Service_CloudShell_StartEnvironmentRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('start', array($params), "Google_Service_CloudShell_Operation");
  }
}
