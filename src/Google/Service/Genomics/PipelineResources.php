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

class Google_Service_Genomics_PipelineResources extends Google_Collection
{
  protected $collection_key = 'zones';
  public $acceleratorCount;
  public $acceleratorType;
  public $bootDiskSizeGb;
  protected $disksType = 'Google_Service_Genomics_Disk';
  protected $disksDataType = 'array';
  public $minimumCpuCores;
  public $minimumRamGb;
  public $noAddress;
  public $preemptible;
  public $zones;

  public function setAcceleratorCount($acceleratorCount)
  {
    $this->acceleratorCount = $acceleratorCount;
  }
  public function getAcceleratorCount()
  {
    return $this->acceleratorCount;
  }
  public function setAcceleratorType($acceleratorType)
  {
    $this->acceleratorType = $acceleratorType;
  }
  public function getAcceleratorType()
  {
    return $this->acceleratorType;
  }
  public function setBootDiskSizeGb($bootDiskSizeGb)
  {
    $this->bootDiskSizeGb = $bootDiskSizeGb;
  }
  public function getBootDiskSizeGb()
  {
    return $this->bootDiskSizeGb;
  }
  /**
   * @param Google_Service_Genomics_Disk
   */
  public function setDisks($disks)
  {
    $this->disks = $disks;
  }
  /**
   * @return Google_Service_Genomics_Disk
   */
  public function getDisks()
  {
    return $this->disks;
  }
  public function setMinimumCpuCores($minimumCpuCores)
  {
    $this->minimumCpuCores = $minimumCpuCores;
  }
  public function getMinimumCpuCores()
  {
    return $this->minimumCpuCores;
  }
  public function setMinimumRamGb($minimumRamGb)
  {
    $this->minimumRamGb = $minimumRamGb;
  }
  public function getMinimumRamGb()
  {
    return $this->minimumRamGb;
  }
  public function setNoAddress($noAddress)
  {
    $this->noAddress = $noAddress;
  }
  public function getNoAddress()
  {
    return $this->noAddress;
  }
  public function setPreemptible($preemptible)
  {
    $this->preemptible = $preemptible;
  }
  public function getPreemptible()
  {
    return $this->preemptible;
  }
  public function setZones($zones)
  {
    $this->zones = $zones;
  }
  public function getZones()
  {
    return $this->zones;
  }
}
