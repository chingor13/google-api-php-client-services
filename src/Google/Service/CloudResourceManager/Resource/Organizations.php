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
 * The "organizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudresourcemanagerService = new Google_Service_CloudResourceManager(...);
 *   $organizations = $cloudresourcemanagerService->organizations;
 *  </code>
 */
class Google_Service_CloudResourceManager_Resource_Organizations extends Google_Service_Resource
{
  /**
   * Fetches an Organization resource identified by the specified resource name.
   * (organizations.get)
   *
   * @param string $name The resource name of the Organization to fetch, e.g.
   * "organizations/1234".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string organizationId The id of the Organization resource to
   * fetch. This field is deprecated and will be removed in v1. Use name instead.
   * @return Google_Service_CloudResourceManager_Organization
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_CloudResourceManager_Organization");
  }
  /**
   * Gets the access control policy for an Organization resource. May be empty if
   * no such policy or resource exists. The `resource` field should be the
   * organization's resource name, e.g. "organizations/123".
   * (organizations.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_CloudResourceManager_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_Policy
   */
  public function getIamPolicy($resource, Google_Service_CloudResourceManager_GetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', array($params), "Google_Service_CloudResourceManager_Policy");
  }
  /**
   * Lists Organization resources that are visible to the user and satisfy the
   * specified filter. This method returns Organizations in an unspecified order.
   * New Organizations do not necessarily appear at the end of the list.
   * (organizations.listOrganizations)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken A pagination token returned from a previous call
   * to `ListOrganizations` that indicates from where listing should continue.
   * This field is optional.
   * @opt_param int pageSize The maximum number of Organizations to return in the
   * response. This field is optional.
   * @opt_param string filter An optional query string used to filter the
   * Organizations to return in the response. Filter rules are case-insensitive.
   *
   * Organizations may be filtered by `owner.directoryCustomerId` or by `domain`,
   * where the domain is a G Suite domain, for example:
   *
   * |Filter|Description| |------|-----------|
   * |owner.directorycustomerid:123456789|Organizations with
   * `owner.directory_customer_id` equal to `123456789`.|
   * |domain:google.com|Organizations corresponding to the domain `google.com`.|
   *
   * This field is optional.
   * @return Google_Service_CloudResourceManager_ListOrganizationsResponse
   */
  public function listOrganizations($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_CloudResourceManager_ListOrganizationsResponse");
  }
  /**
   * Sets the access control policy on an Organization resource. Replaces any
   * existing policy. The `resource` field should be the organization's resource
   * name, e.g. "organizations/123". (organizations.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_CloudResourceManager_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_Policy
   */
  public function setIamPolicy($resource, Google_Service_CloudResourceManager_SetIamPolicyRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', array($params), "Google_Service_CloudResourceManager_Policy");
  }
  /**
   * Returns permissions that a caller has on the specified Organization. The
   * `resource` field should be the organization's resource name, e.g.
   * "organizations/123". (organizations.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See the operation documentation for the appropriate value
   * for this field.
   * @param Google_Service_CloudResourceManager_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_TestIamPermissionsResponse
   */
  public function testIamPermissions($resource, Google_Service_CloudResourceManager_TestIamPermissionsRequest $postBody, $optParams = array())
  {
    $params = array('resource' => $resource, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', array($params), "Google_Service_CloudResourceManager_TestIamPermissionsResponse");
  }
  /**
   * Updates an Organization resource identified by the specified resource name.
   * (organizations.update)
   *
   * @param string $name Output Only. The resource name of the organization. This
   * is the organization's relative path in the API. Its format is
   * "organizations/[organization_id]". For example, "organizations/1234".
   * @param Google_Service_CloudResourceManager_Organization $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudResourceManager_Organization
   */
  public function update($name, Google_Service_CloudResourceManager_Organization $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_CloudResourceManager_Organization");
  }
}
