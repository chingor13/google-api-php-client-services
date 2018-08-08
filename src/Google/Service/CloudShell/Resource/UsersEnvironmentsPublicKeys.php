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
 * The "publicKeys" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudshellService = new Google_Service_CloudShell(...);
 *   $publicKeys = $cloudshellService->publicKeys;
 *  </code>
 */
class Google_Service_CloudShell_Resource_UsersEnvironmentsPublicKeys extends Google_Service_Resource
{
  /**
   * Adds a public SSH key to an environment, allowing clients with the
   * corresponding private key to connect to that environment via SSH. If a key
   * with the same format and content already exists, this will return the
   * existing key. (publicKeys.create)
   *
   * @param string $parent Parent resource name, e.g.
   * `users/me/environments/default`.
   * @param Google_Service_CloudShell_CreatePublicKeyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudShell_PublicKey
   */
  public function create($parent, Google_Service_CloudShell_CreatePublicKeyRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudShell_PublicKey");
  }
  /**
   * Removes a public SSH key from an environment. Clients will no longer be able
   * to connect to the environment using the corresponding private key.
   * (publicKeys.delete)
   *
   * @param string $name Name of the resource to be deleted, e.g.
   * `users/me/environments/default/publicKeys/my-key`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudShell_CloudshellEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudShell_CloudshellEmpty");
  }
}
