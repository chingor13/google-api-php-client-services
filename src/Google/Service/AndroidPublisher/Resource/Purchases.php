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

/**
 * The "purchases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $purchases = $androidpublisherService->purchases;
 *  </code>
 */
class Google_Service_AndroidPublisher_Resource_Purchases extends Google_Service_Resource
{
  /**
   * Cancels a user's subscription purchase. The subscription remains valid until
   * its expiration time. (purchases.cancel)
   *
   * @param string $packageName The package name of the application for which this
   * subscription was purchased (for example, 'com.some.thing').
   * @param string $subscriptionId The purchased subscription ID (for example,
   * 'monthly001').
   * @param string $token The token provided to the user's device when the
   * subscription was purchased.
   * @param array $optParams Optional parameters.
   */
  public function cancel($packageName, $subscriptionId, $token, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'subscriptionId' => $subscriptionId, 'token' => $token);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params));
  }
  /**
   * Checks whether a user's subscription purchase is valid and returns its expiry
   * time. (purchases.get)
   *
   * @param string $packageName The package name of the application for which this
   * subscription was purchased (for example, 'com.some.thing').
   * @param string $subscriptionId The purchased subscription ID (for example,
   * 'monthly001').
   * @param string $token The token provided to the user's device when the
   * subscription was purchased.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_SubscriptionPurchase
   */
  public function get($packageName, $subscriptionId, $token, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'subscriptionId' => $subscriptionId, 'token' => $token);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AndroidPublisher_SubscriptionPurchase");
  }
}
