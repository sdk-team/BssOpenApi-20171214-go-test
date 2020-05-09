<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryAvailableInstancesRequest extends Model {
    protected $_name = [
        'region' => 'Region',
        'ownerId' => 'OwnerId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'instanceIDs' => 'InstanceIDs',
        'endTimeStart' => 'EndTimeStart',
        'endTimeEnd' => 'EndTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'createTimeEnd' => 'CreateTimeEnd',
        'renewStatus' => 'RenewStatus',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Region'] = $this->region;
        $res['OwnerId'] = $this->ownerId;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['InstanceIDs'] = $this->instanceIDs;
        $res['EndTimeStart'] = $this->endTimeStart;
        $res['EndTimeEnd'] = $this->endTimeEnd;
        $res['CreateTimeStart'] = $this->createTimeStart;
        $res['CreateTimeEnd'] = $this->createTimeEnd;
        $res['RenewStatus'] = $this->renewStatus;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryAvailableInstancesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['ProductCode'])){
            $model->productCode = $map['ProductCode'];
        }
        if(isset($map['ProductType'])){
            $model->productType = $map['ProductType'];
        }
        if(isset($map['SubscriptionType'])){
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if(isset($map['InstanceIDs'])){
            $model->instanceIDs = $map['InstanceIDs'];
        }
        if(isset($map['EndTimeStart'])){
            $model->endTimeStart = $map['EndTimeStart'];
        }
        if(isset($map['EndTimeEnd'])){
            $model->endTimeEnd = $map['EndTimeEnd'];
        }
        if(isset($map['CreateTimeStart'])){
            $model->createTimeStart = $map['CreateTimeStart'];
        }
        if(isset($map['CreateTimeEnd'])){
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }
        if(isset($map['RenewStatus'])){
            $model->renewStatus = $map['RenewStatus'];
        }
        return $model;
    }
    /**
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description pageNum
     * @var integer
     */
    public $pageNum;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description productCode
     * @var string
     */
    public $productCode;

    /**
     * @description productType
     * @var string
     */
    public $productType;

    /**
     * @description subscriptionType
     * @var string
     */
    public $subscriptionType;

    /**
     * @description instanceIDs
     * @var string
     */
    public $instanceIDs;

    /**
     * @description endTimeStart
     * @var string
     */
    public $endTimeStart;

    /**
     * @description endTimeEnd
     * @var string
     */
    public $endTimeEnd;

    /**
     * @description createTimeStart
     * @var string
     */
    public $createTimeStart;

    /**
     * @description createTimeEnd
     * @var string
     */
    public $createTimeEnd;

    /**
     * @description renewStatus
     * @var string
     */
    public $renewStatus;

}
