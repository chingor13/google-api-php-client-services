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

class Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1Service extends Google_Collection
{
  protected $collection_key = 'tags';
  protected $internal_gapi_mappings = array(
        "bindingRetrievable" => "binding_retrievable",
        "dashboardClient" => "dashboard_client",
        "instanceRetrievable" => "instance_retrievable",
        "planUpdateable" => "plan_updateable",
  );
  public $bindable;
  public $bindingRetrievable;
  protected $dashboardClientType = 'Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1DashboardClient';
  protected $dashboardClientDataType = '';
  public $description;
  public $id;
  public $instanceRetrievable;
  public $metadata;
  public $name;
  public $planUpdateable;
  protected $plansType = 'Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1Plan';
  protected $plansDataType = 'array';
  public $tags;

  public function setBindable($bindable)
  {
    $this->bindable = $bindable;
  }
  public function getBindable()
  {
    return $this->bindable;
  }
  public function setBindingRetrievable($bindingRetrievable)
  {
    $this->bindingRetrievable = $bindingRetrievable;
  }
  public function getBindingRetrievable()
  {
    return $this->bindingRetrievable;
  }
  /**
   * @param Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1DashboardClient
   */
  public function setDashboardClient(Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1DashboardClient $dashboardClient)
  {
    $this->dashboardClient = $dashboardClient;
  }
  /**
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1DashboardClient
   */
  public function getDashboardClient()
  {
    return $this->dashboardClient;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setInstanceRetrievable($instanceRetrievable)
  {
    $this->instanceRetrievable = $instanceRetrievable;
  }
  public function getInstanceRetrievable()
  {
    return $this->instanceRetrievable;
  }
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPlanUpdateable($planUpdateable)
  {
    $this->planUpdateable = $planUpdateable;
  }
  public function getPlanUpdateable()
  {
    return $this->planUpdateable;
  }
  /**
   * @param Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1Plan
   */
  public function setPlans($plans)
  {
    $this->plans = $plans;
  }
  /**
   * @return Google_Service_ServiceBroker_GoogleCloudServicebrokerV1alpha1Plan
   */
  public function getPlans()
  {
    return $this->plans;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
}
