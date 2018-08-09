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

class Google_Service_Vision_GoogleCloudVisionV1p2beta1AnnotateImageRequest extends Google_Collection
{
  protected $collection_key = 'features';
  protected $featuresType = 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Feature';
  protected $featuresDataType = 'array';
  protected $imageType = 'Google_Service_Vision_GoogleCloudVisionV1p2beta1Image';
  protected $imageDataType = '';
  protected $imageContextType = 'Google_Service_Vision_GoogleCloudVisionV1p2beta1ImageContext';
  protected $imageContextDataType = '';

  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1p2beta1Feature
   */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1p2beta1Feature
   */
  public function getFeatures()
  {
    return $this->features;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1p2beta1Image
   */
  public function setImage(Google_Service_Vision_GoogleCloudVisionV1p2beta1Image $image)
  {
    $this->image = $image;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1p2beta1Image
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1p2beta1ImageContext
   */
  public function setImageContext(Google_Service_Vision_GoogleCloudVisionV1p2beta1ImageContext $imageContext)
  {
    $this->imageContext = $imageContext;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1p2beta1ImageContext
   */
  public function getImageContext()
  {
    return $this->imageContext;
  }
}
