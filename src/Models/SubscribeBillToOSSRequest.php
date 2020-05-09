<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SubscribeBillToOSSRequest extends Model {
    protected $_name = [
        'subscribeBucket' => 'SubscribeBucket',
        'subscribeType' => 'SubscribeType',
        'multAccountRelSubscribe' => 'MultAccountRelSubscribe',
        'bucketOwnerId' => 'BucketOwnerId',
    ];
    public function validate() {
        Model::validateRequired('subscribeBucket', $this->subscribeBucket, true);
    }
    public function toMap() {
        $res = [];
        $res['SubscribeBucket'] = $this->subscribeBucket;
        $res['SubscribeType'] = $this->subscribeType;
        $res['MultAccountRelSubscribe'] = $this->multAccountRelSubscribe;
        $res['BucketOwnerId'] = $this->bucketOwnerId;
        return $res;
    }
    /**
     * @param array $map
     * @return SubscribeBillToOSSRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SubscribeBucket'])){
            $model->subscribeBucket = $map['SubscribeBucket'];
        }
        if(isset($map['SubscribeType'])){
            $model->subscribeType = $map['SubscribeType'];
        }
        if(isset($map['MultAccountRelSubscribe'])){
            $model->multAccountRelSubscribe = $map['MultAccountRelSubscribe'];
        }
        if(isset($map['BucketOwnerId'])){
            $model->bucketOwnerId = $map['BucketOwnerId'];
        }
        return $model;
    }
    /**
     * @description subscribeBucket
     * @var string
     */
    public $subscribeBucket;

    /**
     * @description subscribeType
     * @var string
     */
    public $subscribeType;

    /**
     * @description multAccountRelSubscribe
     * @var string
     */
    public $multAccountRelSubscribe;

    /**
     * @description bucketOwnerId
     * @var integer
     */
    public $bucketOwnerId;

}
