<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video annotation progress. Included in the `metadata`
 * field of the `Operation` returned by the `GetOperation`
 * call of the `google::longrunning::Operations` service.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1beta1.AnnotateVideoProgress</code>
 */
class AnnotateVideoProgress extends \Google\Protobuf\Internal\Message
{
    /**
     * Progress metadata for all videos specified in `AnnotateVideoRequest`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.VideoAnnotationProgress annotation_progress = 1;</code>
     */
    private $annotation_progress;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * Progress metadata for all videos specified in `AnnotateVideoRequest`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.VideoAnnotationProgress annotation_progress = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnnotationProgress()
    {
        return $this->annotation_progress;
    }

    /**
     * Progress metadata for all videos specified in `AnnotateVideoRequest`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.VideoAnnotationProgress annotation_progress = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta1\VideoAnnotationProgress[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnnotationProgress($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta1\VideoAnnotationProgress::class);
        $this->annotation_progress = $arr;

        return $this;
    }

}
