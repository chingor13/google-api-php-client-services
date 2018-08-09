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
 * Service definition for ServiceBroker (v1beta1).
 *
 * <p>
 * The Google Cloud Platform Service Broker API provides Google hosted
 * implementation of the Open Service Broker API
 * (https://www.openservicebrokerapi.org/).</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/kubernetes-engine/docs/concepts/add-on/service-broker" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_ServiceBroker extends Google_Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $projects_brokers;
  public $projects_brokers_instances;
  public $projects_brokers_instances_bindings;
  public $projects_brokers_v2_catalog;
  public $projects_brokers_v2_service_instances;
  public $projects_brokers_v2_service_instances_service_bindings;
  public $v1beta1;
  
  /**
   * Constructs the internal representation of the ServiceBroker service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://servicebroker.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1beta1';
    $this->serviceName = 'servicebroker';

    $this->projects_brokers = new Google_Service_ServiceBroker_Resource_ProjectsBrokers(
        $this,
        $this->serviceName,
        'brokers',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1beta1/{+parent}/brokers',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v1beta1/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta1/{+parent}/brokers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
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
              ),
            ),
          )
        )
    );
    $this->projects_brokers_instances = new Google_Service_ServiceBroker_Resource_ProjectsBrokersInstances(
        $this,
        $this->serviceName,
        'instances',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1beta1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getLast_operation' => array(
              'path' => 'v1beta1/{+name}/last_operation',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'planId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'serviceId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'operation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta1/{+parent}/instances',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
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
              ),
            ),
          )
        )
    );
    $this->projects_brokers_instances_bindings = new Google_Service_ServiceBroker_Resource_ProjectsBrokersInstancesBindings(
        $this,
        $this->serviceName,
        'bindings',
        array(
          'methods' => array(
            'getLast_operation' => array(
              'path' => 'v1beta1/{+name}/last_operation',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'planId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'serviceId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'operation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'v1beta1/{+parent}/bindings',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
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
              ),
            ),
          )
        )
    );
    $this->projects_brokers_v2_catalog = new Google_Service_ServiceBroker_Resource_ProjectsBrokersV2Catalog(
        $this,
        $this->serviceName,
        'catalog',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v1beta1/{+parent}/v2/catalog',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
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
              ),
            ),
          )
        )
    );
    $this->projects_brokers_v2_service_instances = new Google_Service_ServiceBroker_Resource_ProjectsBrokersV2ServiceInstances(
        $this,
        $this->serviceName,
        'service_instances',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1beta1/{+parent}/v2/service_instances/{+instance_id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'instance_id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acceptsIncomplete' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => 'v1beta1/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'serviceId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'acceptsIncomplete' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'planId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'v1beta1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getLast_operation' => array(
              'path' => 'v1beta1/{+name}/last_operation',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'planId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'serviceId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'operation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'v1beta1/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acceptsIncomplete' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->projects_brokers_v2_service_instances_service_bindings = new Google_Service_ServiceBroker_Resource_ProjectsBrokersV2ServiceInstancesServiceBindings(
        $this,
        $this->serviceName,
        'service_bindings',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1beta1/{+parent}/service_bindings/{+binding_id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'binding_id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'acceptsIncomplete' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => 'v1beta1/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'serviceId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'acceptsIncomplete' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'planId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'v1beta1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'serviceId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'planId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getLast_operation' => array(
              'path' => 'v1beta1/{+name}/last_operation',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'planId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'serviceId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'operation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->v1beta1 = new Google_Service_ServiceBroker_Resource_V1beta1(
        $this,
        $this->serviceName,
        'v1beta1',
        array(
          'methods' => array(
            'getIamPolicy' => array(
              'path' => 'v1beta1/{+resource}:getIamPolicy',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'setIamPolicy' => array(
              'path' => 'v1beta1/{+resource}:setIamPolicy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'testIamPermissions' => array(
              'path' => 'v1beta1/{+resource}:testIamPermissions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}
