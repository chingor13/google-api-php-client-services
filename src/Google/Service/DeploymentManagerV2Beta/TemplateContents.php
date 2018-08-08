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

class Google_Service_DeploymentManagerV2Beta_TemplateContents extends Google_Collection
{
  protected $collection_key = 'imports';
  protected $importsType = 'Google_Service_DeploymentManagerV2Beta_ImportFile';
  protected $importsDataType = 'array';
  public $interpreter;
  public $mainTemplate;
  public $schema;
  public $template;

  /**
   * @param Google_Service_DeploymentManagerV2Beta_ImportFile
   */
  public function setImports($imports)
  {
    $this->imports = $imports;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_ImportFile
   */
  public function getImports()
  {
    return $this->imports;
  }
  public function setInterpreter($interpreter)
  {
    $this->interpreter = $interpreter;
  }
  public function getInterpreter()
  {
    return $this->interpreter;
  }
  public function setMainTemplate($mainTemplate)
  {
    $this->mainTemplate = $mainTemplate;
  }
  public function getMainTemplate()
  {
    return $this->mainTemplate;
  }
  public function setSchema($schema)
  {
    $this->schema = $schema;
  }
  public function getSchema()
  {
    return $this->schema;
  }
  public function setTemplate($template)
  {
    $this->template = $template;
  }
  public function getTemplate()
  {
    return $this->template;
  }
}
