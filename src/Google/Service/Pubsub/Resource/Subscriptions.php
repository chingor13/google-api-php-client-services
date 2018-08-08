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
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pubsubService = new Google_Service_Pubsub(...);
 *   $subscriptions = $pubsubService->subscriptions;
 *  </code>
 */
class Google_Service_Pubsub_Resource_Subscriptions extends Google_Service_Resource
{
  /**
   * Acknowledges a particular received message: the Pub/Sub system can remove the
   * given message from the subscription. Acknowledging a message whose Ack
   * deadline has expired may succeed, but the message could have been already
   * redelivered. Acknowledging a message more than once will not result in an
   * error. This is only used for messages received via pull.
   * (subscriptions.acknowledge)
   *
   * @param Google_Service_Pubsub_AcknowledgeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function acknowledge(Google_Service_Pubsub_AcknowledgeRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('acknowledge', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   * Creates a subscription on a given topic for a given subscriber. If the
   * subscription already exists, returns ALREADY_EXISTS. If the corresponding
   * topic doesn't exist, returns NOT_FOUND.
   *
   * If the name is not provided in the request, the server will assign a random
   * name for this subscription on the same project as the topic.
   * (subscriptions.create)
   *
   * @param Google_Service_Pubsub_Subscription $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Subscription
   */
  public function create(Google_Service_Pubsub_Subscription $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Pubsub_Subscription");
  }
  /**
   * Deletes an existing subscription. All pending messages in the subscription
   * are immediately dropped. Calls to Pull after deletion will return NOT_FOUND.
   * (subscriptions.delete)
   *
   * @param string $subscription The subscription to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function delete($subscription, $optParams = array())
  {
    $params = array('subscription' => $subscription);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   * Gets the configuration details of a subscription. (subscriptions.get)
   *
   * @param string $subscription The name of the subscription to get.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Subscription
   */
  public function get($subscription, $optParams = array())
  {
    $params = array('subscription' => $subscription);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Pubsub_Subscription");
  }
  /**
   * Lists matching subscriptions. (subscriptions.listSubscriptions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The value obtained in the last
   * ListSubscriptionsResponse for continuation.
   * @opt_param string query A valid label query expression.
   * @opt_param int maxResults Maximum number of subscriptions to return.
   * @return Google_Service_Pubsub_ListSubscriptionsResponse
   */
  public function listSubscriptions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Pubsub_ListSubscriptionsResponse");
  }
  /**
   * Modifies the Ack deadline for a message received from a pull request.
   * (subscriptions.modifyAckDeadline)
   *
   * @param Google_Service_Pubsub_ModifyAckDeadlineRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function modifyAckDeadline(Google_Service_Pubsub_ModifyAckDeadlineRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifyAckDeadline', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   * Modifies the PushConfig for a specified subscription. This method can be used
   * to suspend the flow of messages to an endpoint by clearing the PushConfig
   * field in the request. Messages will be accumulated for delivery even if no
   * push configuration is defined or while the configuration is modified.
   * (subscriptions.modifyPushConfig)
   *
   * @param Google_Service_Pubsub_ModifyPushConfigRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function modifyPushConfig(Google_Service_Pubsub_ModifyPushConfigRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifyPushConfig', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   * Pulls a single message from the server. If return_immediately is true, and no
   * messages are available in the subscription, this method returns
   * FAILED_PRECONDITION. The system is free to return an UNAVAILABLE error if no
   * messages are available in a reasonable amount of time (to reduce system
   * load). (subscriptions.pull)
   *
   * @param Google_Service_Pubsub_PullRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PullResponse
   */
  public function pull(Google_Service_Pubsub_PullRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('pull', array($params), "Google_Service_Pubsub_PullResponse");
  }
  /**
   * Pulls messages from the server. Returns an empty list if there are no
   * messages available in the backlog. The system is free to return UNAVAILABLE
   * if there are too many pull requests outstanding for the given subscription.
   * (subscriptions.pullBatch)
   *
   * @param Google_Service_Pubsub_PullBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PullBatchResponse
   */
  public function pullBatch(Google_Service_Pubsub_PullBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('pullBatch', array($params), "Google_Service_Pubsub_PullBatchResponse");
  }
}
