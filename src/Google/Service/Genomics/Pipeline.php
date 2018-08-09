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

class Google_Service_Genomics_Pipeline extends Google_Collection
{
  protected $collection_key = 'outputParameters';
  public $description;
  protected $dockerType = 'Google_Service_Genomics_DockerExecutor';
  protected $dockerDataType = '';
  protected $inputParametersType = 'Google_Service_Genomics_PipelineParameter';
  protected $inputParametersDataType = 'array';
  public $name;
  protected $outputParametersType = 'Google_Service_Genomics_PipelineParameter';
  protected $outputParametersDataType = 'array';
  public $pipelineId;
  public $projectId;
  protected $resourcesType = 'Google_Service_Genomics_PipelineResources';
  protected $resourcesDataType = '';

  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param Google_Service_Genomics_DockerExecutor
   */
  public function setDocker(Google_Service_Genomics_DockerExecutor $docker)
  {
    $this->docker = $docker;
  }
  /**
   * @return Google_Service_Genomics_DockerExecutor
   */
  public function getDocker()
  {
    return $this->docker;
  }
  /**
   * @param Google_Service_Genomics_PipelineParameter
   */
  public function setInputParameters($inputParameters)
  {
    $this->inputParameters = $inputParameters;
  }
  /**
   * @return Google_Service_Genomics_PipelineParameter
   */
  public function getInputParameters()
  {
    return $this->inputParameters;
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
   * @param Google_Service_Genomics_PipelineParameter
   */
  public function setOutputParameters($outputParameters)
  {
    $this->outputParameters = $outputParameters;
  }
  /**
   * @return Google_Service_Genomics_PipelineParameter
   */
  public function getOutputParameters()
  {
    return $this->outputParameters;
  }
  public function setPipelineId($pipelineId)
  {
    $this->pipelineId = $pipelineId;
  }
  public function getPipelineId()
  {
    return $this->pipelineId;
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
}
