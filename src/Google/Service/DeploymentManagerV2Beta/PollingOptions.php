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

class Google_Service_DeploymentManagerV2Beta_PollingOptions extends Google_Collection
{
  protected $collection_key = 'diagnostics';
  protected $diagnosticsType = 'Google_Service_DeploymentManagerV2Beta_Diagnostic';
  protected $diagnosticsDataType = 'array';
  public $failCondition;
  public $finishCondition;
  public $pollingLink;
  public $targetLink;

  /**
   * @param Google_Service_DeploymentManagerV2Beta_Diagnostic
   */
  public function setDiagnostics($diagnostics)
  {
    $this->diagnostics = $diagnostics;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_Diagnostic
   */
  public function getDiagnostics()
  {
    return $this->diagnostics;
  }
  public function setFailCondition($failCondition)
  {
    $this->failCondition = $failCondition;
  }
  public function getFailCondition()
  {
    return $this->failCondition;
  }
  public function setFinishCondition($finishCondition)
  {
    $this->finishCondition = $finishCondition;
  }
  public function getFinishCondition()
  {
    return $this->finishCondition;
  }
  public function setPollingLink($pollingLink)
  {
    $this->pollingLink = $pollingLink;
  }
  public function getPollingLink()
  {
    return $this->pollingLink;
  }
  public function setTargetLink($targetLink)
  {
    $this->targetLink = $targetLink;
  }
  public function getTargetLink()
  {
    return $this->targetLink;
  }
}
