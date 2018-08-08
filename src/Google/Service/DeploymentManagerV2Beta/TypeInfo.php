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

class Google_Service_DeploymentManagerV2Beta_TypeInfo extends Google_Model
{
  public $description;
  public $documentationLink;
  public $kind;
  public $name;
  protected $schemaType = 'Google_Service_DeploymentManagerV2Beta_TypeInfoSchemaInfo';
  protected $schemaDataType = '';
  public $selfLink;
  public $title;

  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDocumentationLink($documentationLink)
  {
    $this->documentationLink = $documentationLink;
  }
  public function getDocumentationLink()
  {
    return $this->documentationLink;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
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
   * @param Google_Service_DeploymentManagerV2Beta_TypeInfoSchemaInfo
   */
  public function setSchema(Google_Service_DeploymentManagerV2Beta_TypeInfoSchemaInfo $schema)
  {
    $this->schema = $schema;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_TypeInfoSchemaInfo
   */
  public function getSchema()
  {
    return $this->schema;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}
