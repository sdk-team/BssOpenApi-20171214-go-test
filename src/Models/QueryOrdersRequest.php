<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryOrdersRequest extends Model {
    protected $_name = [
        'createTimeEnd' => 'CreateTimeEnd',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'orderType' => 'OrderType',
        'paymentStatus' => 'PaymentStatus',
        'createTimeStart' => 'CreateTimeStart',
        'ownerId' => 'OwnerId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['CreateTimeEnd'] = $this->createTimeEnd;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['OrderType'] = $this->orderType;
        $res['PaymentStatus'] = $this->paymentStatus;
        $res['CreateTimeStart'] = $this->createTimeStart;
        $res['OwnerId'] = $this->ownerId;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOrdersRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CreateTimeEnd'])){
            $model->createTimeEnd = $map['CreateTimeEnd'];
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
        if(isset($map['OrderType'])){
            $model->orderType = $map['OrderType'];
        }
        if(isset($map['PaymentStatus'])){
            $model->paymentStatus = $map['PaymentStatus'];
        }
        if(isset($map['CreateTimeStart'])){
            $model->createTimeStart = $map['CreateTimeStart'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        return $model;
    }
    /**
     * @description createTimeEnd
     * @var string
     */
    public $createTimeEnd;

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
     * @description orderType
     * @var string
     */
    public $orderType;

    /**
     * @description paymentStatus
     * @var string
     */
    public $paymentStatus;

    /**
     * @description createTimeStart
     * @var string
     */
    public $createTimeStart;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

}
