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

class Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1Binding extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "bindResource" => "bind_resource",
        "bindingId" => "binding_id",
        "planId" => "plan_id",
        "serviceId" => "service_id",
  );
  public $bindResource;
  public $bindingId;
  public $createTime;
  public $deploymentName;
  public $parameters;
  public $planId;
  public $resourceName;
  public $serviceId;

  public function setBindResource($bindResource)
  {
    $this->bindResource = $bindResource;
  }
  public function getBindResource()
  {
    return $this->bindResource;
  }
  public function setBindingId($bindingId)
  {
    $this->bindingId = $bindingId;
  }
  public function getBindingId()
  {
    return $this->bindingId;
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
}
