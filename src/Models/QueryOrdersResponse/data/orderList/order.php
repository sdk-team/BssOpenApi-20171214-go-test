<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersResponse\data\orderList;

use AlibabaCloud\Tea\Model;

class order extends Model {
    protected $_name = [
        'orderId' => 'OrderId',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'orderType' => 'OrderType',
        'createTime' => 'CreateTime',
        'paymentTime' => 'PaymentTime',
        'paymentStatus' => 'PaymentStatus',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'pretaxAmount' => 'PretaxAmount',
        'currency' => 'Currency',
        'pretaxAmountLocal' => 'PretaxAmountLocal',
        'tax' => 'Tax',
        'afterTaxAmount' => 'AfterTaxAmount',
        'paymentCurrency' => 'PaymentCurrency',
        'relatedOrderId' => 'RelatedOrderId',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productType', $this->productType, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('orderType', $this->orderType, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('paymentTime', $this->paymentTime, true);
        Model::validateRequired('paymentStatus', $this->paymentStatus, true);
        Model::validateRequired('pretaxGrossAmount', $this->pretaxGrossAmount, true);
        Model::validateRequired('pretaxAmount', $this->pretaxAmount, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('pretaxAmountLocal', $this->pretaxAmountLocal, true);
        Model::validateRequired('tax', $this->tax, true);
        Model::validateRequired('afterTaxAmount', $this->afterTaxAmount, true);
        Model::validateRequired('paymentCurrency', $this->paymentCurrency, true);
        Model::validateRequired('relatedOrderId', $this->relatedOrderId, true);
    }
    public function toMap() {
        $res = [];
        $res['OrderId'] = $this->orderId;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['OrderType'] = $this->orderType;
        $res['CreateTime'] = $this->createTime;
        $res['PaymentTime'] = $this->paymentTime;
        $res['PaymentStatus'] = $this->paymentStatus;
        $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        $res['PretaxAmount'] = $this->pretaxAmount;
        $res['Currency'] = $this->currency;
        $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        $res['Tax'] = $this->tax;
        $res['AfterTaxAmount'] = $this->afterTaxAmount;
        $res['PaymentCurrency'] = $this->paymentCurrency;
        $res['RelatedOrderId'] = $this->relatedOrderId;
        return $res;
    }
    /**
     * @param array $map
     * @return order
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
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
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['PaymentTime'])){
            $model->paymentTime = $map['PaymentTime'];
        }
        if(isset($map['PaymentStatus'])){
            $model->paymentStatus = $map['PaymentStatus'];
        }
        if(isset($map['PretaxGrossAmount'])){
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if(isset($map['PretaxAmount'])){
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if(isset($map['Currency'])){
            $model->currency = $map['Currency'];
        }
        if(isset($map['PretaxAmountLocal'])){
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if(isset($map['Tax'])){
            $model->tax = $map['Tax'];
        }
        if(isset($map['AfterTaxAmount'])){
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if(isset($map['PaymentCurrency'])){
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if(isset($map['RelatedOrderId'])){
            $model->relatedOrderId = $map['RelatedOrderId'];
        }
        return $model;
    }
    /**
     * @description orderId
     * @var string
     */
    public $orderId;

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
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description paymentTime
     * @var string
     */
    public $paymentTime;

    /**
     * @description paymentStatus
     * @var string
     */
    public $paymentStatus;

    /**
     * @description pretaxGrossAmount
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @description pretaxAmount
     * @var string
     */
    public $pretaxAmount;

    /**
     * @description currency
     * @var string
     */
    public $currency;

    /**
     * @description pretaxAmountLocal
     * @var string
     */
    public $pretaxAmountLocal;

    /**
     * @description tax
     * @var string
     */
    public $tax;

    /**
     * @description afterTaxAmount
     * @var string
     */
    public $afterTaxAmount;

    /**
     * @description paymentCurrency
     * @var string
     */
    public $paymentCurrency;

    /**
     * @description relatedOrderId
     * @var string
     */
    public $relatedOrderId;

}
