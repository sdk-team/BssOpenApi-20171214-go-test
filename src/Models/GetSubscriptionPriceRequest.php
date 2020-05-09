<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceRequest\moduleList;

class GetSubscriptionPriceRequest extends Model {
    protected $_name = [
        'servicePeriodUnit' => 'ServicePeriodUnit',
        'subscriptionType' => 'SubscriptionType',
        'ownerId' => 'OwnerId',
        'productCode' => 'ProductCode',
        'orderType' => 'OrderType',
        'servicePeriodQuantity' => 'ServicePeriodQuantity',
        'productType' => 'ProductType',
        'region' => 'Region',
        'instanceId' => 'InstanceId',
        'moduleList' => 'ModuleList',
        'quantity' => 'Quantity',
    ];
    public function validate() {
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('orderType', $this->orderType, true);
        Model::validateRequired('moduleList', $this->moduleList, true);
    }
    public function toMap() {
        $res = [];
        $res['ServicePeriodUnit'] = $this->servicePeriodUnit;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['OwnerId'] = $this->ownerId;
        $res['ProductCode'] = $this->productCode;
        $res['OrderType'] = $this->orderType;
        $res['ServicePeriodQuantity'] = $this->servicePeriodQuantity;
        $res['ProductType'] = $this->productType;
        $res['Region'] = $this->region;
        $res['InstanceId'] = $this->instanceId;
        $res['ModuleList'] = [];
        if(null !== $this->moduleList && is_array($this->moduleList)){
            $n = 0;
            foreach($this->moduleList as $item){
                $res['ModuleList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Quantity'] = $this->quantity;
        return $res;
    }
    /**
     * @param array $map
     * @return GetSubscriptionPriceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ServicePeriodUnit'])){
            $model->servicePeriodUnit = $map['ServicePeriodUnit'];
        }
        if(isset($map['SubscriptionType'])){
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ProductCode'])){
            $model->productCode = $map['ProductCode'];
        }
        if(isset($map['OrderType'])){
            $model->orderType = $map['OrderType'];
        }
        if(isset($map['ServicePeriodQuantity'])){
            $model->servicePeriodQuantity = $map['ServicePeriodQuantity'];
        }
        if(isset($map['ProductType'])){
            $model->productType = $map['ProductType'];
        }
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['ModuleList'])){
            if(!empty($map['ModuleList'])){
                $model->moduleList = [];
                $n = 0;
                foreach($map['ModuleList'] as $item) {
                    $model->moduleList[$n++] = null !== $item ? moduleList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['Quantity'])){
            $model->quantity = $map['Quantity'];
        }
        return $model;
    }
    /**
     * @description servicePeriodUnit
     * @var string
     */
    public $servicePeriodUnit;

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
     * @description productCode
     * @var string
     */
    public $productCode;

    /**
     * @description orderType
     * @var string
     */
    public $orderType;

    /**
     * @description servicePeriodQuantity
     * @var integer
     */
    public $servicePeriodQuantity;

    /**
     * @description productType
     * @var string
     */
    public $productType;

    /**
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description moduleList
     * @var array
     */
    public $moduleList;

    /**
     * @description quantity
     * @var integer
     */
    public $quantity;

}
