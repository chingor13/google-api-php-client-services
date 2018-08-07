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

class Google_Service_Genomics_ControllerConfig extends Google_Model
{
  public $cmd;
  public $disks;
  public $gcsLogPath;
  protected $gcsSinksType = 'Google_Service_Genomics_RepeatedString';
  protected $gcsSinksDataType = 'map';
  protected $gcsSourcesType = 'Google_Service_Genomics_RepeatedString';
  protected $gcsSourcesDataType = 'map';
  public $image;
  public $machineType;
  public $vars;

  public function setCmd($cmd)
  {
    $this->cmd = $cmd;
  }
  public function getCmd()
  {
    return $this->cmd;
  }
  public function setDisks($disks)
  {
    $this->disks = $disks;
  }
  public function getDisks()
  {
    return $this->disks;
  }
  public function setGcsLogPath($gcsLogPath)
  {
    $this->gcsLogPath = $gcsLogPath;
  }
  public function getGcsLogPath()
  {
    return $this->gcsLogPath;
  }
  /**
   * @param Google_Service_Genomics_RepeatedString
   */
  public function setGcsSinks($gcsSinks)
  {
    $this->gcsSinks = $gcsSinks;
  }
  /**
   * @return Google_Service_Genomics_RepeatedString
   */
  public function getGcsSinks()
  {
    return $this->gcsSinks;
  }
  /**
   * @param Google_Service_Genomics_RepeatedString
   */
  public function setGcsSources($gcsSources)
  {
    $this->gcsSources = $gcsSources;
  }
  /**
   * @return Google_Service_Genomics_RepeatedString
   */
  public function getGcsSources()
  {
    return $this->gcsSources;
  }
  public function setImage($image)
  {
    $this->image = $image;
  }
  public function getImage()
  {
    return $this->image;
  }
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  public function getMachineType()
  {
    return $this->machineType;
  }
  public function setVars($vars)
  {
    $this->vars = $vars;
  }
  public function getVars()
  {
    return $this->vars;
  }
}
