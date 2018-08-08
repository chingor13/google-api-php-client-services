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
 * The "configs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $runtimeconfigService = new Google_Service_CloudRuntimeConfig(...);
 *   $configs = $runtimeconfigService->configs;
 *  </code>
 */
class Google_Service_CloudRuntimeConfig_Resource_ProjectsConfigs extends Google_Service_Resource
{
  /**
   * Creates a new RuntimeConfig resource. The configuration name must be unique
   * within project. (configs.create)
   *
   * @param string $parent The [project
   * ID](https://support.google.com/cloud/answer/6158840?hl=en_topic=6158848) for
   * this request, in the format `projects/[PROJECT_ID]`.
   * @param Google_Service_CloudRuntimeConfig_RuntimeConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId An optional but recommended unique `request_id`.
   * If the server receives two `create()` requests  with the same `request_id`,
   * then the second request will be ignored and the first resource created and
   * stored in the backend is returned. Empty `request_id` fields are ignored.
   *
   * It is responsibility of the client to ensure uniqueness of the `request_id`
   * strings.
   *
   * `request_id` strings are limited to 64 characters.
   * @return Google_Service_CloudRuntimeConfig_RuntimeConfig
   */
  public function create($parent, Google_Service_CloudRuntimeConfig_RuntimeConfig $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_CloudRuntimeConfig_RuntimeConfig");
  }
  /**
   * Deletes a RuntimeConfig resource. (configs.delete)
   *
   * @param string $name The RuntimeConfig resource to delete, in the format:
   *
   * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudRuntimeConfig_RuntimeconfigEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_CloudRuntimeConfig_RuntimeconfigEmpty");
  }
  /**
   * Gets information about a RuntimeConfig resource. (configs.get)
   *
   * @param string $name The name of the RuntimeConfig resource to retrieve, in
   * the format:
   *
   * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudRuntimeConfig_RuntimeConfig
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudRuntimeConfig_RuntimeConfig");
  }
  /**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (configs.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudRuntimeConfig_Policy
   */
  public function getIamPolicy($resource, $optParams = array())
  {
    $params = array('resource' => $resource);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_CloudRuntimeConfig_Policy");
  }
  /**
   * Lists all the RuntimeConfig resources within project.
   * (configs.listProjectsConfigs)
   *
   * @param string $parent The [project
   * ID](https://support.google.com/cloud/answer/6158840?hl=en_topic=6158848) for
   * this request, in the format `projects/[PROJECT_ID]`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Specifies a page token to use. Set `pageToken` to
   * a `nextPageToken` returned by a previous list request to get the next page of
   * results.
   * @opt_param int pageSize Specifies the number of results to return per page.
   * If there are fewer elements than the specified number, returns all elements.
   * @return Google_Service_CloudRuntimeConfig_ListConfigsResponse
   */
  public function listProjectsConfigs($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudRuntimeConfig_ListConfigsResponse");
  }
  /**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. (configs.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_CloudRuntimeConfig_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudRuntimeConfig_Policy
   */
  public function setIamPolicy($resource, Google_Service_CloudRuntimeConfig_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_CloudRuntimeConfig_Policy");
  }
  /**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * NOT_FOUND error.
   *
   * Note: This operation is designed to be used for building permission-aware UIs
   * and command-line tools, not for authorization checking. This operation may
   * "fail open" without warning. (configs.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See the operation documentation for the appropriate value
   * for this field.
   * @param Google_Service_CloudRuntimeConfig_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudRuntimeConfig_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_CloudRuntimeConfig_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_CloudRuntimeConfig_TestIamPermissionsResponse");
  }
  /**
   * Updates a RuntimeConfig resource. The configuration must exist beforehand.
   * (configs.update)
   *
   * @param string $name The name of the RuntimeConfig resource to update, in the
   * format:
   *
   * `projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
   * @param Google_Service_CloudRuntimeConfig_RuntimeConfig $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudRuntimeConfig_RuntimeConfig
   */
  public function update($name, Google_Service_CloudRuntimeConfig_RuntimeConfig $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_CloudRuntimeConfig_RuntimeConfig");
  }
}
