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

class Google_Service_DeploymentManagerV2Beta_TypeProvider extends Google_Collection
{
  protected $collection_key = 'labels';
  protected $collectionOverridesType = 'Google_Service_DeploymentManagerV2Beta_CollectionOverride';
  protected $collectionOverridesDataType = 'array';
  protected $credentialType = 'Google_Service_DeploymentManagerV2Beta_Credential';
  protected $credentialDataType = '';
  public $description;
  public $descriptorUrl;
  public $id;
  public $insertTime;
  protected $labelsType = 'Google_Service_DeploymentManagerV2Beta_TypeProviderLabelEntry';
  protected $labelsDataType = 'array';
  public $name;
  protected $operationType = 'Google_Service_DeploymentManagerV2Beta_Operation';
  protected $operationDataType = '';
  protected $optionsType = 'Google_Service_DeploymentManagerV2Beta_Options';
  protected $optionsDataType = '';
  public $selfLink;

  /**
   * @param Google_Service_DeploymentManagerV2Beta_CollectionOverride
   */
  public function setCollectionOverrides($collectionOverrides)
  {
    $this->collectionOverrides = $collectionOverrides;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_CollectionOverride
   */
  public function getCollectionOverrides()
  {
    return $this->collectionOverrides;
  }
  /**
   * @param Google_Service_DeploymentManagerV2Beta_Credential
   */
  public function setCredential(Google_Service_DeploymentManagerV2Beta_Credential $credential)
  {
    $this->credential = $credential;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_Credential
   */
  public function getCredential()
  {
    return $this->credential;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDescriptorUrl($descriptorUrl)
  {
    $this->descriptorUrl = $descriptorUrl;
  }
  public function getDescriptorUrl()
  {
    return $this->descriptorUrl;
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
   * @param Google_Service_DeploymentManagerV2Beta_TypeProviderLabelEntry
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_TypeProviderLabelEntry
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
  /**
   * @param Google_Service_DeploymentManagerV2Beta_Options
   */
  public function setOptions(Google_Service_DeploymentManagerV2Beta_Options $options)
  {
    $this->options = $options;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_Options
   */
  public function getOptions()
  {
    return $this->options;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
}
