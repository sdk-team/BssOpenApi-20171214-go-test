<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryBillRequest extends Model {
    protected $_name = [
        'billingCycle' => 'BillingCycle',
        'type' => 'Type',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'isHideZeroCharge' => 'IsHideZeroCharge',
        'isDisplayLocalCurrency' => 'IsDisplayLocalCurrency',
        'ownerId' => 'OwnerId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];
    public function validate() {
        Model::validateRequired('billingCycle', $this->billingCycle, true);
    }
    public function toMap() {
        $res = [];
        $res['BillingCycle'] = $this->billingCycle;
        $res['Type'] = $this->type;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['IsHideZeroCharge'] = $this->isHideZeroCharge;
        $res['IsDisplayLocalCurrency'] = $this->isDisplayLocalCurrency;
        $res['OwnerId'] = $this->ownerId;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryBillRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['BillingCycle'])){
            $model->billingCycle = $map['BillingCycle'];
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
        if(isset($map['IsDisplayLocalCurrency'])){
            $model->isDisplayLocalCurrency = $map['IsDisplayLocalCurrency'];
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
        return $model;
    }
    /**
     * @description billingCycle
     * @var string
     */
    public $billingCycle;

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

    /**
     * @description isDisplayLocalCurrency
     * @var bool
     */
    public $isDisplayLocalCurrency;

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

}
