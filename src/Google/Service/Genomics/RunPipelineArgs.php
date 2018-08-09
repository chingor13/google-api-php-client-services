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

class Google_Service_Genomics_RunPipelineArgs extends Google_Model
{
  public $clientId;
  public $inputs;
  public $keepVmAliveOnFailureDuration;
  public $labels;
  protected $loggingType = 'Google_Service_Genomics_LoggingOptions';
  protected $loggingDataType = '';
  public $outputs;
  public $projectId;
  protected $resourcesType = 'Google_Service_Genomics_PipelineResources';
  protected $resourcesDataType = '';
  protected $serviceAccountType = 'Google_Service_Genomics_ServiceAccount';
  protected $serviceAccountDataType = '';

  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }
  public function getClientId()
  {
    return $this->clientId;
  }
  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  public function getInputs()
  {
    return $this->inputs;
  }
  public function setKeepVmAliveOnFailureDuration($keepVmAliveOnFailureDuration)
  {
    $this->keepVmAliveOnFailureDuration = $keepVmAliveOnFailureDuration;
  }
  public function getKeepVmAliveOnFailureDuration()
  {
    return $this->keepVmAliveOnFailureDuration;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param Google_Service_Genomics_LoggingOptions
   */
  public function setLogging(Google_Service_Genomics_LoggingOptions $logging)
  {
    $this->logging = $logging;
  }
  /**
   * @return Google_Service_Genomics_LoggingOptions
   */
  public function getLogging()
  {
    return $this->logging;
  }
  public function setOutputs($outputs)
  {
    $this->outputs = $outputs;
  }
  public function getOutputs()
  {
    return $this->outputs;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  /**
   * @param Google_Service_Genomics_PipelineResources
   */
  public function setResources(Google_Service_Genomics_PipelineResources $resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return Google_Service_Genomics_PipelineResources
   */
  public function getResources()
  {
    return $this->resources;
  }
  /**
   * @param Google_Service_Genomics_ServiceAccount
   */
  public function setServiceAccount(Google_Service_Genomics_ServiceAccount $serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /**
   * @return Google_Service_Genomics_ServiceAccount
   */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}
