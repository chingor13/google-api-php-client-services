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

class Google_Service_CloudIot_DeviceRegistry extends Google_Model
{
  protected $eventNotificationConfigType = 'Google_Service_CloudIot_NotificationConfig';
  protected $eventNotificationConfigDataType = '';
  public $id;
  protected $mqttConfigType = 'Google_Service_CloudIot_MqttConfig';
  protected $mqttConfigDataType = '';
  public $name;

  /**
   * @param Google_Service_CloudIot_NotificationConfig
   */
  public function setEventNotificationConfig(Google_Service_CloudIot_NotificationConfig $eventNotificationConfig)
  {
    $this->eventNotificationConfig = $eventNotificationConfig;
  }
  /**
   * @return Google_Service_CloudIot_NotificationConfig
   */
  public function getEventNotificationConfig()
  {
    return $this->eventNotificationConfig;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param Google_Service_CloudIot_MqttConfig
   */
  public function setMqttConfig(Google_Service_CloudIot_MqttConfig $mqttConfig)
  {
    $this->mqttConfig = $mqttConfig;
  }
  /**
   * @return Google_Service_CloudIot_MqttConfig
   */
  public function getMqttConfig()
  {
    return $this->mqttConfig;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}
