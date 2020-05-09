<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesResponse\data;

use AlibabaCloud\Tea\Model;

class instanceList extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'sellerId' => 'SellerId',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'instanceID' => 'InstanceID',
        'region' => 'Region',
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'stopTime' => 'StopTime',
        'releaseTime' => 'ReleaseTime',
        'expectedReleaseTime' => 'ExpectedReleaseTime',
        'status' => 'Status',
        'subStatus' => 'SubStatus',
        'renewStatus' => 'RenewStatus',
        'renewalDuration' => 'RenewalDuration',
        'renewalDurationUnit' => 'RenewalDurationUnit',
        'seller' => 'Seller',
    ];
    public function validate() {
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('sellerId', $this->sellerId, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productType', $this->productType, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('instanceID', $this->instanceID, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('stopTime', $this->stopTime, true);
        Model::validateRequired('releaseTime', $this->releaseTime, true);
        Model::validateRequired('expectedReleaseTime', $this->expectedReleaseTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('subStatus', $this->subStatus, true);
        Model::validateRequired('renewStatus', $this->renewStatus, true);
        Model::validateRequired('renewalDuration', $this->renewalDuration, true);
        Model::validateRequired('renewalDurationUnit', $this->renewalDurationUnit, true);
        Model::validateRequired('seller', $this->seller, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['SellerId'] = $this->sellerId;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['InstanceID'] = $this->instanceID;
        $res['Region'] = $this->region;
        $res['CreateTime'] = $this->createTime;
        $res['EndTime'] = $this->endTime;
        $res['StopTime'] = $this->stopTime;
        $res['ReleaseTime'] = $this->releaseTime;
        $res['ExpectedReleaseTime'] = $this->expectedReleaseTime;
        $res['Status'] = $this->status;
        $res['SubStatus'] = $this->subStatus;
        $res['RenewStatus'] = $this->renewStatus;
        $res['RenewalDuration'] = $this->renewalDuration;
        $res['RenewalDurationUnit'] = $this->renewalDurationUnit;
        $res['Seller'] = $this->seller;
        return $res;
    }
    /**
     * @param array $map
     * @return instanceList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['SellerId'])){
            $model->sellerId = $map['SellerId'];
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
        if(isset($map['InstanceID'])){
            $model->instanceID = $map['InstanceID'];
        }
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['StopTime'])){
            $model->stopTime = $map['StopTime'];
        }
        if(isset($map['ReleaseTime'])){
            $model->releaseTime = $map['ReleaseTime'];
        }
        if(isset($map['ExpectedReleaseTime'])){
            $model->expectedReleaseTime = $map['ExpectedReleaseTime'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['SubStatus'])){
            $model->subStatus = $map['SubStatus'];
        }
        if(isset($map['RenewStatus'])){
            $model->renewStatus = $map['RenewStatus'];
        }
        if(isset($map['RenewalDuration'])){
            $model->renewalDuration = $map['RenewalDuration'];
        }
        if(isset($map['RenewalDurationUnit'])){
            $model->renewalDurationUnit = $map['RenewalDurationUnit'];
        }
        if(isset($map['Seller'])){
            $model->seller = $map['Seller'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description sellerId
     * @var integer
     */
    public $sellerId;

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
     * @description instanceID
     * @var string
     */
    public $instanceID;

    /**
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description stopTime
     * @var string
     */
    public $stopTime;

    /**
     * @description releaseTime
     * @var string
     */
    public $releaseTime;

    /**
     * @description expectedReleaseTime
     * @var string
     */
    public $expectedReleaseTime;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description subStatus
     * @var string
     */
    public $subStatus;

    /**
     * @description renewStatus
     * @var string
     */
    public $renewStatus;

    /**
     * @description renewalDuration
     * @var integer
     */
    public $renewalDuration;

    /**
     * @description renewalDurationUnit
     * @var string
     */
    public $renewalDurationUnit;

    /**
     * @description seller
     * @var string
     */
    public $seller;

}
