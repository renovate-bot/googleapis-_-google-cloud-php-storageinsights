<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/storageinsights/v1/storageinsights.proto

namespace Google\Cloud\StorageInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [`UpdateDatasetConfig`][google.cloud.storageinsights.v1.StorageInsights.UpdateDatasetConfig]
 *
 * Generated from protobuf message <code>google.cloud.storageinsights.v1.UpdateDatasetConfigRequest</code>
 */
class UpdateDatasetConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * `DatasetConfig` resource by the update.
     * The fields specified in the `update_mask` are relative to the resource, not
     * the full request. A field is overwritten if it is in the mask. If the
     * user does not provide a mask then it returns an "Invalid Argument" error.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The resource being updated
     *
     * Generated from protobuf field <code>.google.cloud.storageinsights.v1.DatasetConfig dataset_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $dataset_config = null;
    /**
     * Optional. A unique identifier for your request.
     * Specify the request ID if you need to retry the request.
     * If you retry the request with the same ID within 60 minutes, the server
     * ignores the request if it has already completed the original request.
     * For example, if your initial request times out and you retry the request
     * using the same request ID, the server recognizes the original request and
     * does not process the new request.
     * The request ID must be a valid UUID and cannot be a zero UUID
     * (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param \Google\Cloud\StorageInsights\V1\DatasetConfig $datasetConfig Required. The resource being updated
     * @param \Google\Protobuf\FieldMask                     $updateMask    Required. Field mask is used to specify the fields to be overwritten in the
     *                                                                      `DatasetConfig` resource by the update.
     *                                                                      The fields specified in the `update_mask` are relative to the resource, not
     *                                                                      the full request. A field is overwritten if it is in the mask. If the
     *                                                                      user does not provide a mask then it returns an "Invalid Argument" error.
     *
     * @return \Google\Cloud\StorageInsights\V1\UpdateDatasetConfigRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\StorageInsights\V1\DatasetConfig $datasetConfig, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setDatasetConfig($datasetConfig)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten in the
     *           `DatasetConfig` resource by the update.
     *           The fields specified in the `update_mask` are relative to the resource, not
     *           the full request. A field is overwritten if it is in the mask. If the
     *           user does not provide a mask then it returns an "Invalid Argument" error.
     *     @type \Google\Cloud\StorageInsights\V1\DatasetConfig $dataset_config
     *           Required. The resource being updated
     *     @type string $request_id
     *           Optional. A unique identifier for your request.
     *           Specify the request ID if you need to retry the request.
     *           If you retry the request with the same ID within 60 minutes, the server
     *           ignores the request if it has already completed the original request.
     *           For example, if your initial request times out and you retry the request
     *           using the same request ID, the server recognizes the original request and
     *           does not process the new request.
     *           The request ID must be a valid UUID and cannot be a zero UUID
     *           (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Storageinsights\V1\Storageinsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * `DatasetConfig` resource by the update.
     * The fields specified in the `update_mask` are relative to the resource, not
     * the full request. A field is overwritten if it is in the mask. If the
     * user does not provide a mask then it returns an "Invalid Argument" error.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * `DatasetConfig` resource by the update.
     * The fields specified in the `update_mask` are relative to the resource, not
     * the full request. A field is overwritten if it is in the mask. If the
     * user does not provide a mask then it returns an "Invalid Argument" error.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The resource being updated
     *
     * Generated from protobuf field <code>.google.cloud.storageinsights.v1.DatasetConfig dataset_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\StorageInsights\V1\DatasetConfig|null
     */
    public function getDatasetConfig()
    {
        return $this->dataset_config;
    }

    public function hasDatasetConfig()
    {
        return isset($this->dataset_config);
    }

    public function clearDatasetConfig()
    {
        unset($this->dataset_config);
    }

    /**
     * Required. The resource being updated
     *
     * Generated from protobuf field <code>.google.cloud.storageinsights.v1.DatasetConfig dataset_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\StorageInsights\V1\DatasetConfig $var
     * @return $this
     */
    public function setDatasetConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageInsights\V1\DatasetConfig::class);
        $this->dataset_config = $var;

        return $this;
    }

    /**
     * Optional. A unique identifier for your request.
     * Specify the request ID if you need to retry the request.
     * If you retry the request with the same ID within 60 minutes, the server
     * ignores the request if it has already completed the original request.
     * For example, if your initial request times out and you retry the request
     * using the same request ID, the server recognizes the original request and
     * does not process the new request.
     * The request ID must be a valid UUID and cannot be a zero UUID
     * (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique identifier for your request.
     * Specify the request ID if you need to retry the request.
     * If you retry the request with the same ID within 60 minutes, the server
     * ignores the request if it has already completed the original request.
     * For example, if your initial request times out and you retry the request
     * using the same request ID, the server recognizes the original request and
     * does not process the new request.
     * The request ID must be a valid UUID and cannot be a zero UUID
     * (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

