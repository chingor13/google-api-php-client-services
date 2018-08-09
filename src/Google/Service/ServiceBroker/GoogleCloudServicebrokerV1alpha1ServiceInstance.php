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

class Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1ServiceInstance extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "instanceId" => "instance_id",
        "organizationGuid" => "organization_guid",
        "planId" => "plan_id",
        "previousValues" => "previous_values",
        "serviceId" => "service_id",
        "spaceGuid" => "space_guid",
  );
  public $context;
  public $createTime;
  public $deploymentName;
  public $instanceId;
  public $organizationGuid;
  public $parameters;
  public $planId;
  public $previousValues;
  public $resourceName;
  public $serviceId;
  public $spaceGuid;

  public function setContext($context)
  {
    $this->context = $context;
  }
  public function getContext()
  {
    return $this->context;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setDeploymentName($deploymentName)
  {
    $this->deploymentName = $deploymentName;
  }
  public function getDeploymentName()
  {
    return $this->deploymentName;
  }
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  public function setOrganizationGuid($organizationGuid)
  {
    $this->organizationGuid = $organizationGuid;
  }
  public function getOrganizationGuid()
  {
    return $this->organizationGuid;
  }
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  public function getParameters()
  {
    return $this->parameters;
  }
  public function setPlanId($planId)
  {
    $this->planId = $planId;
  }
  public function getPlanId()
  {
    return $this->planId;
  }
  public function setPreviousValues($previousValues)
  {
    $this->previousValues = $previousValues;
  }
  public function getPreviousValues()
  {
    return $this->previousValues;
  }
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  public function getResourceName()
  {
    return $this->resourceName;
  }
  public function setServiceId($serviceId)
  {
    $this->serviceId = $serviceId;
  }
  public function getServiceId()
  {
    return $this->serviceId;
  }
  public function setSpaceGuid($spaceGuid)
  {
    $this->spaceGuid = $spaceGuid;
  }
  public function getSpaceGuid()
  {
    return $this->spaceGuid;
  }
}
