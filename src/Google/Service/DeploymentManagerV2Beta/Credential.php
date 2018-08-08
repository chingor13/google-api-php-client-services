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

class Google_Service_DeploymentManagerV2Beta_Credential extends Google_Model
{
  protected $basicAuthType = 'Google_Service_DeploymentManagerV2Beta_BasicAuth';
  protected $basicAuthDataType = '';
  protected $serviceAccountType = 'Google_Service_DeploymentManagerV2Beta_ServiceAccount';
  protected $serviceAccountDataType = '';
  public $useProjectDefault;

  /**
   * @param Google_Service_DeploymentManagerV2Beta_BasicAuth
   */
  public function setBasicAuth(Google_Service_DeploymentManagerV2Beta_BasicAuth $basicAuth)
  {
    $this->basicAuth = $basicAuth;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_BasicAuth
   */
  public function getBasicAuth()
  {
    return $this->basicAuth;
  }
  /**
   * @param Google_Service_DeploymentManagerV2Beta_ServiceAccount
   */
  public function setServiceAccount(Google_Service_DeploymentManagerV2Beta_ServiceAccount $serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /**
   * @return Google_Service_DeploymentManagerV2Beta_ServiceAccount
   */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  public function setUseProjectDefault($useProjectDefault)
  {
    $this->useProjectDefault = $useProjectDefault;
  }
  public function getUseProjectDefault()
  {
    return $this->useProjectDefault;
  }
}
