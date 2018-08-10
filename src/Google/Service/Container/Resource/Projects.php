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
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $containerService = new Google_Service_Container(...);
 *   $projects = $containerService->projects;
 *  </code>
 */
class Google_Service_Container_Resource_Projects extends Google_Service_Resource
{
  /**
   * Gets the access control policy for a resource. Returns NOT_FOUND error if the
   * resource does not exist. Returns an empty policy if the resource exists but
   * does not have a policy set.
   *
   * Authorization requires the Google IAM permission
   * `container.clusters.getIamPolicy` on the specified resource.
   * (projects.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_Container_GoogleIamV1GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_GoogleIamV1Policy
   */
  public function getIamPolicy($resource, Google_Service_Container_GoogleIamV1GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_Container_GoogleIamV1Policy");
  }
  /**
   * Sets the access control policy for a resource. Replaces any existing policy.
   *
   * Authorization requires the Google IAM permission
   * 'container.clusters.setIamPolicy' on the specified resource.
   * (projects.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_Container_GoogleIamV1SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_GoogleIamV1Policy
   */
  public function setIamPolicy($resource, Google_Service_Container_GoogleIamV1SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_Container_GoogleIamV1Policy");
  }
  /**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * NOT_FOUND error.
   *
   * There is no permission required to make this API call.
   * (projects.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See the operation documentation for the appropriate value
   * for this field.
   * @param Google_Service_Container_GoogleIamV1TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Container_GoogleIamV1TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_Container_GoogleIamV1TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_Container_GoogleIamV1TestIamPermissionsResponse");
  }
}
