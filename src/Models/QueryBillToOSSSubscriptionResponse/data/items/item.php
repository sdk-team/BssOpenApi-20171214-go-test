<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionResponse\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model {
    protected $_name = [
        'subscribeType' => 'SubscribeType',
        'subscribeBucket' => 'SubscribeBucket',
        'bucketOwnerId' => 'BucketOwnerId',
        'subscribeTime' => 'SubscribeTime',
        'subscribeLanguage' => 'SubscribeLanguage',
        'multAccountRelSubscribe' => 'MultAccountRelSubscribe',
    ];
    public function validate() {
        Model::validateRequired('subscribeType', $this->subscribeType, true);
        Model::validateRequired('subscribeBucket', $this->subscribeBucket, true);
        Model::validateRequired('bucketOwnerId', $this->bucketOwnerId, true);
        Model::validateRequired('subscribeTime', $this->subscribeTime, true);
        Model::validateRequired('subscribeLanguage', $this->subscribeLanguage, true);
        Model::validateRequired('multAccountRelSubscribe', $this->multAccountRelSubscribe, true);
    }
    public function toMap() {
        $res = [];
        $res['SubscribeType'] = $this->subscribeType;
        $res['SubscribeBucket'] = $this->subscribeBucket;
        $res['BucketOwnerId'] = $this->bucketOwnerId;
        $res['SubscribeTime'] = $this->subscribeTime;
        $res['SubscribeLanguage'] = $this->subscribeLanguage;
        $res['MultAccountRelSubscribe'] = $this->multAccountRelSubscribe;
        return $res;
    }
    /**
     * @param array $map
     * @return item
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SubscribeType'])){
            $model->subscribeType = $map['SubscribeType'];
        }
        if(isset($map['SubscribeBucket'])){
            $model->subscribeBucket = $map['SubscribeBucket'];
        }
        if(isset($map['BucketOwnerId'])){
            $model->bucketOwnerId = $map['BucketOwnerId'];
        }
        if(isset($map['SubscribeTime'])){
            $model->subscribeTime = $map['SubscribeTime'];
        }
        if(isset($map['SubscribeLanguage'])){
            $model->subscribeLanguage = $map['SubscribeLanguage'];
        }
        if(isset($map['MultAccountRelSubscribe'])){
            $model->multAccountRelSubscribe = $map['MultAccountRelSubscribe'];
        }
        return $model;
    }
    /**
     * @description subscribeType
     * @var string
     */
    public $subscribeType;

    /**
     * @description subscribeBucket
     * @var string
     */
    public $subscribeBucket;

    /**
     * @description bucketOwnerId
     * @var integer
     */
    public $bucketOwnerId;

    /**
     * @description subscribeTime
     * @var string
     */
    public $subscribeTime;

    /**
     * @description subscribeLanguage
     * @var string
     */
    public $subscribeLanguage;

    /**
     * @description multAccountRelSubscribe
     * @var string
     */
    public $multAccountRelSubscribe;

}
