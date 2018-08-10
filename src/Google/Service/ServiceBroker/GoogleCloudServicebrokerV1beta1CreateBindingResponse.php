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

class Google_Service_ServiceBroker_GoogleCloudServicebrokerV1beta1CreateBindingResponse extends Google_Collection
{
  protected $collection_key = 'volume_mounts';
  protected $internal_gapi_mappings = array(
        "routeServiceUrl" => "route_service_url",
        "syslogDrainUrl" => "syslog_drain_url",
        "volumeMounts" => "volume_mounts",
  );
  public $credentials;
  public $description;
  public $operation;
  public $routeServiceUrl;
  public $syslogDrainUrl;
  public $volumeMounts;

  public function setCredentials($credentials)
  {
    $this->credentials = $credentials;
  }
  public function getCredentials()
  {
    return $this->credentials;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setOperation($operation)
  {
    $this->operation = $operation;
  }
  public function getOperation()
  {
    return $this->operation;
  }
  public function setRouteServiceUrl($routeServiceUrl)
  {
    $this->routeServiceUrl = $routeServiceUrl;
  }
  public function getRouteServiceUrl()
  {
    return $this->routeServiceUrl;
  }
  public function setSyslogDrainUrl($syslogDrainUrl)
  {
    $this->syslogDrainUrl = $syslogDrainUrl;
  }
  public function getSyslogDrainUrl()
  {
    return $this->syslogDrainUrl;
  }
  public function setVolumeMounts($volumeMounts)
  {
    $this->volumeMounts = $volumeMounts;
  }
  public function getVolumeMounts()
  {
    return $this->volumeMounts;
  }
}
