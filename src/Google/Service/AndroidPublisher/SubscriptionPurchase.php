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

class Google_Service_AndroidPublisher_SubscriptionPurchase extends Google_Model
{
  public $autoRenewing;
  public $initiationTimestampMsec;
  public $kind;
  public $validUntilTimestampMsec;

  public function setAutoRenewing($autoRenewing)
  {
    $this->autoRenewing = $autoRenewing;
  }
  public function getAutoRenewing()
  {
    return $this->autoRenewing;
  }
  public function setInitiationTimestampMsec($initiationTimestampMsec)
  {
    $this->initiationTimestampMsec = $initiationTimestampMsec;
  }
  public function getInitiationTimestampMsec()
  {
    return $this->initiationTimestampMsec;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setValidUntilTimestampMsec($validUntilTimestampMsec)
  {
    $this->validUntilTimestampMsec = $validUntilTimestampMsec;
  }
  public function getValidUntilTimestampMsec()
  {
    return $this->validUntilTimestampMsec;
  }
}
