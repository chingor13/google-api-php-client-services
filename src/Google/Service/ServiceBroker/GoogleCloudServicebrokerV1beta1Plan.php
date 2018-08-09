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

class Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1Plan extends Google_Model
{
  public $bindable;
  public $description;
  public $free;
  public $id;
  public $metadata;
  public $name;
  public $schemas;

  public function setBindable($bindable)
  {
    $this->bindable = $bindable;
  }
  public function getBindable()
  {
    return $this->bindable;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setFree($free)
  {
    $this->free = $free;
  }
  public function getFree()
  {
    return $this->free;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSchemas($schemas)
  {
    $this->schemas = $schemas;
  }
  public function getSchemas()
  {
    return $this->schemas;
  }
}
