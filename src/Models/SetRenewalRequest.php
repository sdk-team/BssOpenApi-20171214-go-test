<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetRenewalRequest extends Model {
    protected $_name = [
        'renewalPeriod' => 'RenewalPeriod',
        'instanceIDs' => 'InstanceIDs',
        'ownerId' => 'OwnerId',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'renewalPeriodUnit' => 'RenewalPeriodUnit',
        'renewalStatus' => 'RenewalStatus',
    ];
    public function validate() {
        Model::validateRequired('instanceIDs', $this->instanceIDs, true);
        Model::validateRequired('renewalStatus', $this->renewalStatus, true);
    }
    public function toMap() {
        $res = [];
        $res['RenewalPeriod'] = $this->renewalPeriod;
        $res['InstanceIDs'] = $this->instanceIDs;
        $res['OwnerId'] = $this->ownerId;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['RenewalPeriodUnit'] = $this->renewalPeriodUnit;
        $res['RenewalStatus'] = $this->renewalStatus;
        return $res;
    }
    /**
     * @param array $map
     * @return SetRenewalRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RenewalPeriod'])){
            $model->renewalPeriod = $map['RenewalPeriod'];
        }
        if(isset($map['InstanceIDs'])){
            $model->instanceIDs = $map['InstanceIDs'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
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
        if(isset($map['RenewalPeriodUnit'])){
            $model->renewalPeriodUnit = $map['RenewalPeriodUnit'];
        }
        if(isset($map['RenewalStatus'])){
            $model->renewalStatus = $map['RenewalStatus'];
        }
        return $model;
    }
    /**
     * @description renewalPeriod
     * @var integer
     */
    public $renewalPeriod;

    /**
     * @description instanceIDs
     * @var string
     */
    public $instanceIDs;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

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
     * @description renewalPeriodUnit
     * @var string
     */
    public $renewalPeriodUnit;

    /**
     * @description renewalStatus
     * @var string
     */
    public $renewalStatus;

}
