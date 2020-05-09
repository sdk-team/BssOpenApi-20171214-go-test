<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryInstanceGaapCostRequest extends Model {
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'billingCycle' => 'BillingCycle',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
    ];
    public function validate() {
        Model::validateRequired('billingCycle', $this->billingCycle, true);
    }
    public function toMap() {
        $res = [];
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['BillingCycle'] = $this->billingCycle;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryInstanceGaapCostRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
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
        return $model;
    }
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

}
