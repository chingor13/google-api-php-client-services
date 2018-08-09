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
 * Service definition for Appengine (v1beta4).
 *
 * <p>
 * The App Engine Admin API enables developers to provision and manage their App
 * Engine applications.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/appengine/docs/admin-api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Appengine extends Google_Service
{
  /** View and manage your applications deployed on Google App Engine. */
  const APPENGINE_ADMIN =
      "https://www.googleapis.com/auth/appengine.admin";
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** View your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM_READ_ONLY =
      "https://www.googleapis.com/auth/cloud-platform.read-only";

  public $apps;
  public $apps_locations;
  public $apps_modules;
  public $apps_modules_versions;
  public $apps_modules_versions_instances;
  public $apps_operations;
  
  /**
   * Constructs the internal representation of the Appengine service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://appengine.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1beta4';
    $this->serviceName = 'appengine';

    $this->apps = new Google_Service_Appengine_Resource_Apps(
        $this,
        $this->serviceName,
        'apps',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1beta4/apps',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => 'v1beta4/apps/{appsId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ensureResourcesExist' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'patch' => array(
              'path' => 'v1beta4/apps/{appsId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'mask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->apps_locations = new Google_Service_Appengine_Resource_AppsLocations(
        $this,
        $this->serviceName,
        'locations',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1beta4/apps/{appsId}/locations/{locationsId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'locationsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta4/apps/{appsId}/locations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->apps_modules = new Google_Service_Appengine_Resource_AppsModules(
        $this,
        $this->serviceName,
        'modules',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta4/apps/{appsId}/modules',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'migrateTraffic' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'mask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->apps_modules_versions = new Google_Service_Appengine_Resource_AppsModulesVersions(
        $this,
        $this->serviceName,
        'versions',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions/{versionsId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'versionsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions/{versionsId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'versionsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'view' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'view' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions/{versionsId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'versionsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'mask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->apps_modules_versions_instances = new Google_Service_Appengine_Resource_AppsModulesVersionsInstances(
        $this,
        $this->serviceName,
        'instances',
        array(
          'methods' => array(
            'debug' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions/{versionsId}/instances/{instancesId}:debug',
              'httpMethod' => 'POST',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'versionsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'instancesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions/{versionsId}/instances/{instancesId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'versionsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'instancesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions/{versionsId}/instances/{instancesId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'versionsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'instancesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta4/apps/{appsId}/modules/{modulesId}/versions/{versionsId}/instances',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modulesId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'versionsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->apps_operations = new Google_Service_Appengine_Resource_AppsOperations(
        $this,
        $this->serviceName,
        'operations',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1beta4/apps/{appsId}/operations/{operationsId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'operationsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta4/apps/{appsId}/operations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'appsId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
  }
}
