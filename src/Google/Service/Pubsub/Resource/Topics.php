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
 * The "topics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pubsubService = new Google_Service_Pubsub(...);
 *   $topics = $pubsubService->topics;
 *  </code>
 */
class Google_Service_Pubsub_Resource_Topics extends Google_Service_Resource
{
  /**
   * Creates the given topic with the given name. (topics.create)
   *
   * @param Google_Service_Pubsub_Topic $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Topic
   */
  public function create(Google_Service_Pubsub_Topic $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Pubsub_Topic");
  }
  /**
   * Deletes the topic with the given name. Returns NOT_FOUND if the topic does
   * not exist. After a topic is deleted, a new topic may be created with the same
   * name. (topics.delete)
   *
   * @param string $topic Name of the topic to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function delete($topic, $optParams = array())
  {
    $params = array('topic' => $topic);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   * Gets the configuration of a topic. Since the topic only has the name
   * attribute, this method is only useful to check the existence of a topic. If
   * other attributes are added in the future, they will be returned here.
   * (topics.get)
   *
   * @param string $topic The name of the topic to get.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_Topic
   */
  public function get($topic, $optParams = array())
  {
    $params = array('topic' => $topic);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Pubsub_Topic");
  }
  /**
   * Lists matching topics. (topics.listTopics)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The value obtained in the last ListTopicsResponse
   * for continuation.
   * @opt_param string query A valid label query expression.
   * @opt_param int maxResults Maximum number of topics to return.
   * @return Google_Service_Pubsub_ListTopicsResponse
   */
  public function listTopics($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Pubsub_ListTopicsResponse");
  }
  /**
   * Adds a message to the topic.  Returns NOT_FOUND if the topic does not exist.
   * (topics.publish)
   *
   * @param Google_Service_Pubsub_PublishRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PubsubEmpty
   */
  public function publish(Google_Service_Pubsub_PublishRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('publish', array($params), "Google_Service_Pubsub_PubsubEmpty");
  }
  /**
   * Adds one or more messages to the topic. Returns NOT_FOUND if the topic does
   * not exist. (topics.publishBatch)
   *
   * @param Google_Service_Pubsub_PublishBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Pubsub_PublishBatchResponse
   */
  public function publishBatch(Google_Service_Pubsub_PublishBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('publishBatch', array($params), "Google_Service_Pubsub_PublishBatchResponse");
  }
}
