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

class Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2VideoContext extends Google_Collection
{
  protected $collection_key = 'segments';
  protected $explicitContentDetectionConfigType = 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ExplicitContentDetectionConfig';
  protected $explicitContentDetectionConfigDataType = '';
  protected $labelDetectionConfigType = 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2LabelDetectionConfig';
  protected $labelDetectionConfigDataType = '';
  protected $segmentsType = 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2VideoSegment';
  protected $segmentsDataType = 'array';
  protected $shotChangeDetectionConfigType = 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ShotChangeDetectionConfig';
  protected $shotChangeDetectionConfigDataType = '';

  /**
   * @param Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ExplicitContentDetectionConfig
   */
  public function setExplicitContentDetectionConfig(Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ExplicitContentDetectionConfig $explicitContentDetectionConfig)
  {
    $this->explicitContentDetectionConfig = $explicitContentDetectionConfig;
  }
  /**
   * @return Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ExplicitContentDetectionConfig
   */
  public function getExplicitContentDetectionConfig()
  {
    return $this->explicitContentDetectionConfig;
  }
  /**
   * @param Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2LabelDetectionConfig
   */
  public function setLabelDetectionConfig(Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2LabelDetectionConfig $labelDetectionConfig)
  {
    $this->labelDetectionConfig = $labelDetectionConfig;
  }
  /**
   * @return Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2LabelDetectionConfig
   */
  public function getLabelDetectionConfig()
  {
    return $this->labelDetectionConfig;
  }
  /**
   * @param Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2VideoSegment
   */
  public function setSegments($segments)
  {
    $this->segments = $segments;
  }
  /**
   * @return Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2VideoSegment
   */
  public function getSegments()
  {
    return $this->segments;
  }
  /**
   * @param Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ShotChangeDetectionConfig
   */
  public function setShotChangeDetectionConfig(Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ShotChangeDetectionConfig $shotChangeDetectionConfig)
  {
    $this->shotChangeDetectionConfig = $shotChangeDetectionConfig;
  }
  /**
   * @return Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2ShotChangeDetectionConfig
   */
  public function getShotChangeDetectionConfig()
  {
    return $this->shotChangeDetectionConfig;
  }
}
