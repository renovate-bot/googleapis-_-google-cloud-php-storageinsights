<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/storageinsights/v1/storageinsights.proto

namespace Google\Cloud\StorageInsights\V1\DatasetConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides a summary of the project level error statistics.
 *
 * Generated from protobuf message <code>google.cloud.storageinsights.v1.DatasetConfig.ProjectErrors</code>
 */
class ProjectErrors extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Count of successfully validated projects.
     *
     * Generated from protobuf field <code>optional int64 validated_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validated_count = null;
    /**
     * Optional. Count of projects which are not in the same organization.
     *
     * Generated from protobuf field <code>optional int64 outside_org_error_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $outside_org_error_count = null;
    /**
     * Optional. Subset of project numbers which are not in the same
     * organization.
     *
     * Generated from protobuf field <code>repeated int64 outside_org_project_numbers = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $outside_org_project_numbers;
    /**
     * Optional. Count of projects that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>optional int64 non_management_hub_entitled_error_count = 7 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @deprecated
     */
    protected $non_management_hub_entitled_error_count = null;
    /**
     * Optional. Subset of project numbers that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>repeated int64 non_management_hub_entitled_project_numbers = 8 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @deprecated
     */
    private $non_management_hub_entitled_project_numbers;
    /**
     * Optional. Count of projects that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>optional int64 non_storage_intelligence_entitled_error_count = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $non_storage_intelligence_entitled_error_count = null;
    /**
     * Optional. Subset of project numbers that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>repeated int64 non_storage_intelligence_entitled_project_numbers = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $non_storage_intelligence_entitled_project_numbers;
    /**
     * Optional. Number of projects that encountered internal errors during
     * validation and are automatically retried.
     *
     * Generated from protobuf field <code>optional int64 internal_error_count = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $internal_error_count = null;
    protected $destination_project_check_result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $validated_count
     *           Optional. Count of successfully validated projects.
     *     @type int|string $outside_org_error_count
     *           Optional. Count of projects which are not in the same organization.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $outside_org_project_numbers
     *           Optional. Subset of project numbers which are not in the same
     *           organization.
     *     @type int|string $non_management_hub_entitled_error_count
     *           Optional. Count of projects that are not subscribed to Storage
     *           Intelligence.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $non_management_hub_entitled_project_numbers
     *           Optional. Subset of project numbers that are not subscribed to Storage
     *           Intelligence.
     *     @type int|string $non_storage_intelligence_entitled_error_count
     *           Optional. Count of projects that are not subscribed to Storage
     *           Intelligence.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $non_storage_intelligence_entitled_project_numbers
     *           Optional. Subset of project numbers that are not subscribed to Storage
     *           Intelligence.
     *     @type int|string $internal_error_count
     *           Optional. Number of projects that encountered internal errors during
     *           validation and are automatically retried.
     *     @type bool $destination_project_org_error
     *           Optional. Indicates if the destination project resides within the same
     *           organization as the source project.
     *     @type bool $destination_project_check_has_internal_error
     *           Optional. Indicates whether the destination project check failed due to
     *           an internal error. If `true`, the system automatically retries the
     *           check.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Storageinsights\V1\Storageinsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Count of successfully validated projects.
     *
     * Generated from protobuf field <code>optional int64 validated_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getValidatedCount()
    {
        return isset($this->validated_count) ? $this->validated_count : 0;
    }

    public function hasValidatedCount()
    {
        return isset($this->validated_count);
    }

    public function clearValidatedCount()
    {
        unset($this->validated_count);
    }

    /**
     * Optional. Count of successfully validated projects.
     *
     * Generated from protobuf field <code>optional int64 validated_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setValidatedCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->validated_count = $var;

        return $this;
    }

    /**
     * Optional. Count of projects which are not in the same organization.
     *
     * Generated from protobuf field <code>optional int64 outside_org_error_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getOutsideOrgErrorCount()
    {
        return isset($this->outside_org_error_count) ? $this->outside_org_error_count : 0;
    }

    public function hasOutsideOrgErrorCount()
    {
        return isset($this->outside_org_error_count);
    }

    public function clearOutsideOrgErrorCount()
    {
        unset($this->outside_org_error_count);
    }

    /**
     * Optional. Count of projects which are not in the same organization.
     *
     * Generated from protobuf field <code>optional int64 outside_org_error_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setOutsideOrgErrorCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->outside_org_error_count = $var;

        return $this;
    }

    /**
     * Optional. Subset of project numbers which are not in the same
     * organization.
     *
     * Generated from protobuf field <code>repeated int64 outside_org_project_numbers = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutsideOrgProjectNumbers()
    {
        return $this->outside_org_project_numbers;
    }

    /**
     * Optional. Subset of project numbers which are not in the same
     * organization.
     *
     * Generated from protobuf field <code>repeated int64 outside_org_project_numbers = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutsideOrgProjectNumbers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->outside_org_project_numbers = $arr;

        return $this;
    }

    /**
     * Optional. Count of projects that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>optional int64 non_management_hub_entitled_error_count = 7 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     * @deprecated
     */
    public function getNonManagementHubEntitledErrorCount()
    {
        if (isset($this->non_management_hub_entitled_error_count)) {
            @trigger_error('non_management_hub_entitled_error_count is deprecated.', E_USER_DEPRECATED);
        }
        return isset($this->non_management_hub_entitled_error_count) ? $this->non_management_hub_entitled_error_count : 0;
    }

    public function hasNonManagementHubEntitledErrorCount()
    {
        if (isset($this->non_management_hub_entitled_error_count)) {
            @trigger_error('non_management_hub_entitled_error_count is deprecated.', E_USER_DEPRECATED);
        }
        return isset($this->non_management_hub_entitled_error_count);
    }

    public function clearNonManagementHubEntitledErrorCount()
    {
        @trigger_error('non_management_hub_entitled_error_count is deprecated.', E_USER_DEPRECATED);
        unset($this->non_management_hub_entitled_error_count);
    }

    /**
     * Optional. Count of projects that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>optional int64 non_management_hub_entitled_error_count = 7 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     * @deprecated
     */
    public function setNonManagementHubEntitledErrorCount($var)
    {
        @trigger_error('non_management_hub_entitled_error_count is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkInt64($var);
        $this->non_management_hub_entitled_error_count = $var;

        return $this;
    }

    /**
     * Optional. Subset of project numbers that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>repeated int64 non_management_hub_entitled_project_numbers = 8 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getNonManagementHubEntitledProjectNumbers()
    {
        if ($this->non_management_hub_entitled_project_numbers->count() !== 0) {
            @trigger_error('non_management_hub_entitled_project_numbers is deprecated.', E_USER_DEPRECATED);
        }
        return $this->non_management_hub_entitled_project_numbers;
    }

    /**
     * Optional. Subset of project numbers that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>repeated int64 non_management_hub_entitled_project_numbers = 8 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setNonManagementHubEntitledProjectNumbers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        if (count($arr) !== 0) {
            @trigger_error('non_management_hub_entitled_project_numbers is deprecated.', E_USER_DEPRECATED);
        }
        $this->non_management_hub_entitled_project_numbers = $arr;

        return $this;
    }

    /**
     * Optional. Count of projects that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>optional int64 non_storage_intelligence_entitled_error_count = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getNonStorageIntelligenceEntitledErrorCount()
    {
        return isset($this->non_storage_intelligence_entitled_error_count) ? $this->non_storage_intelligence_entitled_error_count : 0;
    }

    public function hasNonStorageIntelligenceEntitledErrorCount()
    {
        return isset($this->non_storage_intelligence_entitled_error_count);
    }

    public function clearNonStorageIntelligenceEntitledErrorCount()
    {
        unset($this->non_storage_intelligence_entitled_error_count);
    }

    /**
     * Optional. Count of projects that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>optional int64 non_storage_intelligence_entitled_error_count = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setNonStorageIntelligenceEntitledErrorCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->non_storage_intelligence_entitled_error_count = $var;

        return $this;
    }

    /**
     * Optional. Subset of project numbers that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>repeated int64 non_storage_intelligence_entitled_project_numbers = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNonStorageIntelligenceEntitledProjectNumbers()
    {
        return $this->non_storage_intelligence_entitled_project_numbers;
    }

    /**
     * Optional. Subset of project numbers that are not subscribed to Storage
     * Intelligence.
     *
     * Generated from protobuf field <code>repeated int64 non_storage_intelligence_entitled_project_numbers = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNonStorageIntelligenceEntitledProjectNumbers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->non_storage_intelligence_entitled_project_numbers = $arr;

        return $this;
    }

    /**
     * Optional. Number of projects that encountered internal errors during
     * validation and are automatically retried.
     *
     * Generated from protobuf field <code>optional int64 internal_error_count = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getInternalErrorCount()
    {
        return isset($this->internal_error_count) ? $this->internal_error_count : 0;
    }

    public function hasInternalErrorCount()
    {
        return isset($this->internal_error_count);
    }

    public function clearInternalErrorCount()
    {
        unset($this->internal_error_count);
    }

    /**
     * Optional. Number of projects that encountered internal errors during
     * validation and are automatically retried.
     *
     * Generated from protobuf field <code>optional int64 internal_error_count = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setInternalErrorCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->internal_error_count = $var;

        return $this;
    }

    /**
     * Optional. Indicates if the destination project resides within the same
     * organization as the source project.
     *
     * Generated from protobuf field <code>bool destination_project_org_error = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDestinationProjectOrgError()
    {
        return $this->readOneof(5);
    }

    public function hasDestinationProjectOrgError()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. Indicates if the destination project resides within the same
     * organization as the source project.
     *
     * Generated from protobuf field <code>bool destination_project_org_error = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDestinationProjectOrgError($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. Indicates whether the destination project check failed due to
     * an internal error. If `true`, the system automatically retries the
     * check.
     *
     * Generated from protobuf field <code>bool destination_project_check_has_internal_error = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDestinationProjectCheckHasInternalError()
    {
        return $this->readOneof(6);
    }

    public function hasDestinationProjectCheckHasInternalError()
    {
        return $this->hasOneof(6);
    }

    /**
     * Optional. Indicates whether the destination project check failed due to
     * an internal error. If `true`, the system automatically retries the
     * check.
     *
     * Generated from protobuf field <code>bool destination_project_check_has_internal_error = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDestinationProjectCheckHasInternalError($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationProjectCheckResult()
    {
        return $this->whichOneof("destination_project_check_result");
    }

}


