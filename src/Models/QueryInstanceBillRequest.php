<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryInstanceBillRequest extends Model {
    protected $_name = [
        'billingCycle' => 'BillingCycle',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'ownerId' => 'OwnerId',
        'isBillingItem' => 'IsBillingItem',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'isHideZeroCharge' => 'IsHideZeroCharge',
        'billingDate' => 'BillingDate',
        'granularity' => 'Granularity',
    ];
    public function validate() {
        Model::validateRequired('billingCycle', $this->billingCycle, true);
    }
    public function toMap() {
        $res = [];
        $res['BillingCycle'] = $this->billingCycle;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['OwnerId'] = $this->ownerId;
        $res['IsBillingItem'] = $this->isBillingItem;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['IsHideZeroCharge'] = $this->isHideZeroCharge;
        $res['BillingDate'] = $this->billingDate;
        $res['Granularity'] = $this->granularity;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryInstanceBillRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['BillingCycle'])){
            $model->billingCycle = $map['BillingCycle'];
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
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['IsBillingItem'])){
            $model->isBillingItem = $map['IsBillingItem'];
        }
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['IsHideZeroCharge'])){
            $model->isHideZeroCharge = $map['IsHideZeroCharge'];
        }
        if(isset($map['BillingDate'])){
            $model->billingDate = $map['BillingDate'];
        }
        if(isset($map['Granularity'])){
            $model->granularity = $map['Granularity'];
        }
        return $model;
    }
    /**
     * @description billingCycle
     * @var string
     */
    public $billingCycle;

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
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description isBillingItem
     * @var bool
     */
    public $isBillingItem;

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
     * @description isHideZeroCharge
     * @var bool
     */
    public $isHideZeroCharge;

    /**
     * @description billingDate
     * @var string
     */
    public $billingDate;

    /**
     * @description granularity
     * @var string
     */
    public $granularity;

}
