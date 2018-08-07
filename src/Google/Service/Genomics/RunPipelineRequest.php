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

class Google_Service_Genomics_RunPipelineRequest extends Google_Model
{
  protected $ephemeralPipelineType = 'Google_Service_Genomics_Pipeline';
  protected $ephemeralPipelineDataType = '';
  protected $pipelineArgsType = 'Google_Service_Genomics_RunPipelineArgs';
  protected $pipelineArgsDataType = '';
  public $pipelineId;

  /**
   * @param Google_Service_Genomics_Pipeline
   */
  public function setEphemeralPipeline(Google_Service_Genomics_Pipeline $ephemeralPipeline)
  {
    $this->ephemeralPipeline = $ephemeralPipeline;
  }
  /**
   * @return Google_Service_Genomics_Pipeline
   */
  public function getEphemeralPipeline()
  {
    return $this->ephemeralPipeline;
  }
  /**
   * @param Google_Service_Genomics_RunPipelineArgs
   */
  public function setPipelineArgs(Google_Service_Genomics_RunPipelineArgs $pipelineArgs)
  {
    $this->pipelineArgs = $pipelineArgs;
  }
  /**
   * @return Google_Service_Genomics_RunPipelineArgs
   */
  public function getPipelineArgs()
  {
    return $this->pipelineArgs;
  }
  public function setPipelineId($pipelineId)
  {
    $this->pipelineId = $pipelineId;
  }
  public function getPipelineId()
  {
    return $this->pipelineId;
  }
}
