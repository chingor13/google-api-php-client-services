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
 * The "compositeTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deploymentmanagerService = new Google_Service_DeploymentManagerV2Beta(...);
 *   $compositeTypes = $deploymentmanagerService->compositeTypes;
 *  </code>
 */
class Google_Service_DeploymentManagerV2Beta_Resource_CompositeTypes extends Google_Service_Resource
{
  /**
   * Deletes a composite type. (compositeTypes.delete)
   *
   * @param string $project The project ID for this request.
   * @param string $compositeType The name of the type for this request.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManagerV2Beta_Operation
   */
  public function delete($project, $compositeType, $optParams = array())
  {
    $params = array('project' => $project, 'compositeType' => $compositeType);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_DeploymentManagerV2Beta_Operation");
  }
  /**
   * Gets information about a specific composite type. (compositeTypes.get)
   *
   * @param string $project The project ID for this request.
   * @param string $compositeType The name of the composite type for this request.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManagerV2Beta_CompositeType
   */
  public function get($project, $compositeType, $optParams = array())
  {
    $params = array('project' => $project, 'compositeType' => $compositeType);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_DeploymentManagerV2Beta_CompositeType");
  }
  /**
   * Creates a composite type. (compositeTypes.insert)
   *
   * @param string $project The project ID for this request.
   * @param Google_Service_DeploymentManagerV2Beta_CompositeType $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManagerV2Beta_Operation
   */
  public function insert($project, Google_Service_DeploymentManagerV2Beta_CompositeType $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_DeploymentManagerV2Beta_Operation");
  }
  /**
   * Lists all composite types for Deployment Manager.
   * (compositeTypes.listCompositeTypes)
   *
   * @param string $project The project ID for this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter A filter expression that filters resources listed in
   * the response. The expression must specify the field name, a comparison
   * operator, and the value that you want to use for filtering. The value must be
   * a string, a number, or a boolean. The comparison operator must be either =,
   * !=, >, or <.
   *
   * For example, if you are filtering Compute Engine instances, you can exclude
   * instances named example-instance by specifying name != example-instance.
   *
   * You can also filter nested fields. For example, you could specify
   * scheduling.automaticRestart = false to include instances only if they are not
   * scheduled for automatic restarts. You can use filtering on nested fields to
   * filter based on resource labels.
   *
   * To filter on multiple expressions, provide each separate expression within
   * parentheses. For example, (scheduling.automaticRestart = true) (cpuPlatform =
   * "Intel Skylake"). By default, each expression is an AND expression. However,
   * you can include AND and OR expressions explicitly. For example, (cpuPlatform
   * = "Intel Skylake") OR (cpuPlatform = "Intel Broadwell") AND
   * (scheduling.automaticRestart = true).
   * @opt_param string maxResults The maximum number of results per page that
   * should be returned. If the number of available results is larger than
   * maxResults, Compute Engine returns a nextPageToken that can be used to get
   * the next page of results in subsequent list requests. Acceptable values are 0
   * to 500, inclusive. (Default: 500)
   * @opt_param string orderBy Sorts list results by a certain order. By default,
   * results are returned in alphanumerical order based on the resource name.
   *
   * You can also sort results in descending order based on the creation timestamp
   * using orderBy="creationTimestamp desc". This sorts results based on the
   * creationTimestamp field in reverse chronological order (newest result first).
   * Use this to sort resources like operations so that the newest operation is
   * returned first.
   *
   * Currently, only sorting by name or creationTimestamp desc is supported.
   * @opt_param string pageToken Specifies a page token to use. Set pageToken to
   * the nextPageToken returned by a previous list request to get the next page of
   * results.
   * @return Google_Service_DeploymentManagerV2Beta_CompositeTypesListResponse
   */
  public function listCompositeTypes($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_DeploymentManagerV2Beta_CompositeTypesListResponse");
  }
  /**
   * Updates a composite type. This method supports patch semantics.
   * (compositeTypes.patch)
   *
   * @param string $project The project ID for this request.
   * @param string $compositeType The name of the composite type for this request.
   * @param Google_Service_DeploymentManagerV2Beta_CompositeType $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManagerV2Beta_Operation
   */
  public function patch($project, $compositeType, Google_Service_DeploymentManagerV2Beta_CompositeType $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'compositeType' => $compositeType, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_DeploymentManagerV2Beta_Operation");
  }
  /**
   * Updates a composite type. (compositeTypes.update)
   *
   * @param string $project The project ID for this request.
   * @param string $compositeType The name of the composite type for this request.
   * @param Google_Service_DeploymentManagerV2Beta_CompositeType $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeploymentManagerV2Beta_Operation
   */
  public function update($project, $compositeType, Google_Service_DeploymentManagerV2Beta_CompositeType $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'compositeType' => $compositeType, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_DeploymentManagerV2Beta_Operation");
  }
}
