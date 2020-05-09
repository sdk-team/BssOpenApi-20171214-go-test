<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QuerySettlementBillRequest extends Model {
    protected $_name = [
        'pageSize' => 'PageSize',
        'ownerId' => 'OwnerId',
        'pageNum' => 'PageNum',
        'billingCycle' => 'BillingCycle',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'type' => 'Type',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'isHideZeroCharge' => 'IsHideZeroCharge',
    ];
    public function validate() {
        Model::validateRequired('billingCycle', $this->billingCycle, true);
    }
    public function toMap() {
        $res = [];
        $res['PageSize'] = $this->pageSize;
        $res['OwnerId'] = $this->ownerId;
        $res['PageNum'] = $this->pageNum;
        $res['BillingCycle'] = $this->billingCycle;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['Type'] = $this->type;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['IsHideZeroCharge'] = $this->isHideZeroCharge;
        return $res;
    }
    /**
     * @param array $map
     * @return QuerySettlementBillRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['BillingCycle'])){
            $model->billingCycle = $map['BillingCycle'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
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
        if(isset($map['IsHideZeroCharge'])){
            $model->isHideZeroCharge = $map['IsHideZeroCharge'];
        }
        return $model;
    }
    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

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
     * @description billingCycle
     * @var string
     */
    public $billingCycle;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description type
     * @var string
     */
    public $type;

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
     * @description isHideZeroCharge
     * @var bool
     */
    public $isHideZeroCharge;

}
