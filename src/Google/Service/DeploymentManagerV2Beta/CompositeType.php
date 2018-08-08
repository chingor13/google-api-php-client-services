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

class Google_Service_DeploymentManagerV2Beta_CompositeType extends Google_Collection
{
  protected $collection_key = 'labels';
  public $description;
  public $id;
  public $insertTime;
  protected $labelsType = 'Google_Service_DeploymentManagerV2Beta_CompositeTypeLabelEntry';
  protected $labelsDataType = 'array';
  public $name;
  protected $operationType = 'Google_Service_DeploymentManagerV2Beta_Operation';
  protected $operationDataType = '';
  public $selfLink;
  public $status;
  protected $templateContentsType = 'Google_Service_DeploymentManagerV2Beta_TemplateContents';
  protected $templateContentsDataType = '';

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
  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
  }
  public function getInsertTime()
  {
    return $this->insertTime;
  }
  /**
   * @param Google_Service_DeploymentManagerV2Beta_CompositeTypeLabelEntry
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_CompositeTypeLabelEntry
   */
  public function getLabels()
  {
    return $this->labels;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param Google_Service_DeploymentManagerV2Beta_Operation
   */
  public function setOperation(Google_Service_DeploymentManagerV2Beta_Operation $operation)
  {
    $this->operation = $operation;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_Operation
   */
  public function getOperation()
  {
    return $this->operation;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * @param Google_Service_DeploymentManagerV2Beta_TemplateContents
   */
  public function setTemplateContents(Google_Service_DeploymentManagerV2Beta_TemplateContents $templateContents)
  {
    $this->templateContents = $templateContents;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_TemplateContents
   */
  public function getTemplateContents()
  {
    return $this->templateContents;
  }
}
