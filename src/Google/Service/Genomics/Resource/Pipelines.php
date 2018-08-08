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
 * The "pipelines" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $pipelines = $genomicsService->pipelines;
 *  </code>
 */
class Google_Service_Genomics_Resource_Pipelines extends Google_Service_Resource
{
  /**
   * Creates a pipeline that can be run later. Create takes a Pipeline that has
   * all fields other than `pipelineId` populated, and then returns the same
   * pipeline with `pipelineId` populated. This id can be used to run the
   * pipeline.
   *
   * Caller must have WRITE permission to the project. (pipelines.create)
   *
   * @param Google_Service_Genomics_Pipeline $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Pipeline
   */
  public function create(Google_Service_Genomics_Pipeline $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Genomics_Pipeline");
  }
  /**
   * Deletes a pipeline based on ID.
   *
   * Caller must have WRITE permission to the project. (pipelines.delete)
   *
   * @param string $pipelineId Caller must have WRITE access to the project in
   * which this pipeline is defined.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_GenomicsEmpty
   */
  public function delete($pipelineId, $optParams = array())
  {
    $params = array('pipelineId' => $pipelineId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Genomics_GenomicsEmpty");
  }
  /**
   * Retrieves a pipeline based on ID.
   *
   * Caller must have READ permission to the project. (pipelines.get)
   *
   * @param string $pipelineId Caller must have READ access to the project in
   * which this pipeline is defined.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Pipeline
   */
  public function get($pipelineId, $optParams = array())
  {
    $params = array('pipelineId' => $pipelineId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_Pipeline");
  }
  /**
   * Gets controller configuration information. Should only be called by VMs
   * created by the Pipelines Service and not by end users.
   * (pipelines.getControllerConfig)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string operationId The operation to retrieve controller
   * configuration for.
   * @opt_param string validationToken
   * @return Google_Service_Genomics_ControllerConfig
   */
  public function getControllerConfig($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getControllerConfig', array($params), "Google_Service_Genomics_ControllerConfig");
  }
  /**
   * Lists pipelines.
   *
   * Caller must have READ permission to the project. (pipelines.listPipelines)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string namePrefix Pipelines with names that match this prefix
   * should be returned.  If unspecified, all pipelines in the project, up to
   * `pageSize`, will be returned.
   * @opt_param string pageToken Token to use to indicate where to start getting
   * results. If unspecified, returns the first page of results.
   * @opt_param int pageSize Number of pipelines to return at once. Defaults to
   * 256, and max is 2048.
   * @opt_param string projectId Required. The name of the project to search for
   * pipelines. Caller must have READ access to this project.
   * @return Google_Service_Genomics_ListPipelinesResponse
   */
  public function listPipelines($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Genomics_ListPipelinesResponse");
  }
  /**
   * Runs a pipeline. If `pipelineId` is specified in the request, then run a
   * saved pipeline. If `ephemeralPipeline` is specified, then run that pipeline
   * once without saving a copy.
   *
   * The caller must have READ permission to the project where the pipeline is
   * stored and WRITE permission to the project where the pipeline will be run, as
   * VMs will be created and storage will be used.
   *
   * If a pipeline operation is still running after 6 days, it will be canceled.
   * (pipelines.run)
   *
   * @param Google_Service_Genomics_RunPipelineRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_Operation
   */
  public function run(Google_Service_Genomics_RunPipelineRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('run', array($params), "Google_Service_Genomics_Operation");
  }
  /**
   * Sets status of a given operation. Any new timestamps (as determined by
   * description) are appended to TimestampEvents. Should only be called by VMs
   * created by the Pipelines Service and not by end users.
   * (pipelines.setOperationStatus)
   *
   * @param Google_Service_Genomics_SetOperationStatusRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Genomics_GenomicsEmpty
   */
  public function setOperationStatus(Google_Service_Genomics_SetOperationStatusRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setOperationStatus', array($params), "Google_Service_Genomics_GenomicsEmpty");
  }
}
