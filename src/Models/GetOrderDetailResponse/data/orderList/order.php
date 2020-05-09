<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponse\data\orderList;

use AlibabaCloud\Tea\Model;

class order extends Model {
    protected $_name = [
        'orderId' => 'OrderId',
        'subOrderId' => 'SubOrderId',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'orderType' => 'OrderType',
        'createTime' => 'CreateTime',
        'paymentTime' => 'PaymentTime',
        'paymentStatus' => 'PaymentStatus',
        'region' => 'Region',
        'config' => 'Config',
        'quantity' => 'Quantity',
        'usageStartTime' => 'UsageStartTime',
        'usageEndTime' => 'UsageEndTime',
        'instanceIDs' => 'InstanceIDs',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'pretaxAmount' => 'PretaxAmount',
        'currency' => 'Currency',
        'pretaxAmountLocal' => 'PretaxAmountLocal',
        'tax' => 'Tax',
        'afterTaxAmount' => 'AfterTaxAmount',
        'paymentCurrency' => 'PaymentCurrency',
        'operator' => 'Operator',
        'relatedOrderId' => 'RelatedOrderId',
        'orderSubType' => 'OrderSubType',
        'originalConfig' => 'OriginalConfig',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('subOrderId', $this->subOrderId, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productType', $this->productType, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('orderType', $this->orderType, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('paymentTime', $this->paymentTime, true);
        Model::validateRequired('paymentStatus', $this->paymentStatus, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('config', $this->config, true);
        Model::validateRequired('quantity', $this->quantity, true);
        Model::validateRequired('usageStartTime', $this->usageStartTime, true);
        Model::validateRequired('usageEndTime', $this->usageEndTime, true);
        Model::validateRequired('instanceIDs', $this->instanceIDs, true);
        Model::validateRequired('pretaxGrossAmount', $this->pretaxGrossAmount, true);
        Model::validateRequired('pretaxAmount', $this->pretaxAmount, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('pretaxAmountLocal', $this->pretaxAmountLocal, true);
        Model::validateRequired('tax', $this->tax, true);
        Model::validateRequired('afterTaxAmount', $this->afterTaxAmount, true);
        Model::validateRequired('paymentCurrency', $this->paymentCurrency, true);
        Model::validateRequired('operator', $this->operator, true);
        Model::validateRequired('relatedOrderId', $this->relatedOrderId, true);
        Model::validateRequired('orderSubType', $this->orderSubType, true);
        Model::validateRequired('originalConfig', $this->originalConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['OrderId'] = $this->orderId;
        $res['SubOrderId'] = $this->subOrderId;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['OrderType'] = $this->orderType;
        $res['CreateTime'] = $this->createTime;
        $res['PaymentTime'] = $this->paymentTime;
        $res['PaymentStatus'] = $this->paymentStatus;
        $res['Region'] = $this->region;
        $res['Config'] = $this->config;
        $res['Quantity'] = $this->quantity;
        $res['UsageStartTime'] = $this->usageStartTime;
        $res['UsageEndTime'] = $this->usageEndTime;
        $res['InstanceIDs'] = $this->instanceIDs;
        $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        $res['PretaxAmount'] = $this->pretaxAmount;
        $res['Currency'] = $this->currency;
        $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        $res['Tax'] = $this->tax;
        $res['AfterTaxAmount'] = $this->afterTaxAmount;
        $res['PaymentCurrency'] = $this->paymentCurrency;
        $res['Operator'] = $this->operator;
        $res['RelatedOrderId'] = $this->relatedOrderId;
        $res['OrderSubType'] = $this->orderSubType;
        $res['OriginalConfig'] = $this->originalConfig;
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
        if(isset($map['SubOrderId'])){
            $model->subOrderId = $map['SubOrderId'];
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
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['Config'])){
            $model->config = $map['Config'];
        }
        if(isset($map['Quantity'])){
            $model->quantity = $map['Quantity'];
        }
        if(isset($map['UsageStartTime'])){
            $model->usageStartTime = $map['UsageStartTime'];
        }
        if(isset($map['UsageEndTime'])){
            $model->usageEndTime = $map['UsageEndTime'];
        }
        if(isset($map['InstanceIDs'])){
            $model->instanceIDs = $map['InstanceIDs'];
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
        if(isset($map['Operator'])){
            $model->operator = $map['Operator'];
        }
        if(isset($map['RelatedOrderId'])){
            $model->relatedOrderId = $map['RelatedOrderId'];
        }
        if(isset($map['OrderSubType'])){
            $model->orderSubType = $map['OrderSubType'];
        }
        if(isset($map['OriginalConfig'])){
            $model->originalConfig = $map['OriginalConfig'];
        }
        return $model;
    }
    /**
     * @description orderId
     * @var string
     */
    public $orderId;

    /**
     * @description subOrderId
     * @var string
     */
    public $subOrderId;

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
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description config
     * @var string
     */
    public $config;

    /**
     * @description quantity
     * @var string
     */
    public $quantity;

    /**
     * @description usageStartTime
     * @var string
     */
    public $usageStartTime;

    /**
     * @description usageEndTime
     * @var string
     */
    public $usageEndTime;

    /**
     * @description instanceIDs
     * @var string
     */
    public $instanceIDs;

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
     * @description operator
     * @var string
     */
    public $operator;

    /**
     * @description relatedOrderId
     * @var string
     */
    public $relatedOrderId;

    /**
     * @description orderSubType
     * @var string
     */
    public $orderSubType;

    /**
     * @description originalConfig
     * @var string
     */
    public $originalConfig;

}
