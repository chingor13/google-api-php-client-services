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

class Google_Service_DeploymentManagerV2Beta_BaseType extends Google_Collection
{
  protected $collection_key = 'collectionOverrides';
  protected $collectionOverridesType = 'Google_Service_DeploymentManagerV2Beta_CollectionOverride';
  protected $collectionOverridesDataType = 'array';
  protected $credentialType = 'Google_Service_DeploymentManagerV2Beta_Credential';
  protected $credentialDataType = '';
  public $descriptorUrl;
  protected $optionsType = 'Google_Service_DeploymentManagerV2Beta_Options';
  protected $optionsDataType = '';

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
  public function setDescriptorUrl($descriptorUrl)
  {
    $this->descriptorUrl = $descriptorUrl;
  }
  public function getDescriptorUrl()
  {
    return $this->descriptorUrl;
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
}
