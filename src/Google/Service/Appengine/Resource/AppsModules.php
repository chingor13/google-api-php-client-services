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
 * The "modules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $modules = $appengineService->modules;
 *  </code>
 */
class Google_Service_Appengine_Resource_AppsModules extends Google_Service_Resource
{
  /**
   * Deletes the specified module and all enclosed versions. (modules.delete)
   *
   * @param string $appsId Part of `name`. Name of the resource requested.
   * Example: apps/myapp/modules/default.
   * @param string $modulesId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Operation
   */
  public function delete($appsId, $modulesId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'modulesId' => $modulesId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Appengine_Operation");
  }
  /**
   * Gets the current configuration of the specified module. (modules.get)
   *
   * @param string $appsId Part of `name`. Name of the resource requested.
   * Example: apps/myapp/modules/default.
   * @param string $modulesId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Module
   */
  public function get($appsId, $modulesId, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'modulesId' => $modulesId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Appengine_Module");
  }
  /**
   * Lists all the modules in the application. (modules.listAppsModules)
   *
   * @param string $appsId Part of `name`. Name of the resource requested.
   * Example: apps/myapp.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum results to return per page.
   * @opt_param string pageToken Continuation token for fetching the next page of
   * results.
   * @return Google_Service_Appengine_ListModulesResponse
   */
  public function listAppsModules($appsId, $optParams = array())
  {
    $params = array('appsId' => $appsId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Appengine_ListModulesResponse");
  }
  /**
   * Updates the configuration of the specified module. (modules.patch)
   *
   * @param string $appsId Part of `name`. Name of the resource to update.
   * Example: apps/myapp/modules/default.
   * @param string $modulesId Part of `name`. See documentation of `appsId`.
   * @param Google_Service_Appengine_Module $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool migrateTraffic Set to true to gradually shift traffic to one
   * or more versions that you specify. By default, traffic is shifted
   * immediately. For gradual traffic migration, the target versions must be
   * located within instances that are configured for both warmup requests
   * (https://cloud.google.com/appengine/docs/admin-
   * api/reference/rest/v1beta4/apps.modules.versions#inboundservicetype) and
   * automatic scaling (https://cloud.google.com/appengine/docs/admin-
   * api/reference/rest/v1beta4/apps.modules.versions#automaticscaling). You must
   * specify the shardBy (https://cloud.google.com/appengine/docs/admin-
   * api/reference/rest/v1beta4/apps.modules#shardby) field in the Module
   * resource. Gradual traffic migration is not supported in the App Engine
   * flexible environment. For examples, see Migrating and Splitting Traffic
   * (https://cloud.google.com/appengine/docs/admin-api/migrating-splitting-
   * traffic).
   * @opt_param string mask Standard field mask for the set of fields to be
   * updated.
   * @return Google_Service_Appengine_Operation
   */
  public function patch($appsId, $modulesId, Google_Service_Appengine_Module $postBody, $optParams = array())
  {
    $params = array('appsId' => $appsId, 'modulesId' => $modulesId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Appengine_Operation");
  }
}
