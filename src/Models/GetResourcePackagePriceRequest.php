<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class GetResourcePackagePriceRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'productCode' => 'ProductCode',
        'packageType' => 'PackageType',
        'effectiveDate' => 'EffectiveDate',
        'specification' => 'Specification',
        'duration' => 'Duration',
        'pricingCycle' => 'PricingCycle',
        'orderType' => 'OrderType',
        'instanceId' => 'InstanceId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ProductCode'] = $this->productCode;
        $res['PackageType'] = $this->packageType;
        $res['EffectiveDate'] = $this->effectiveDate;
        $res['Specification'] = $this->specification;
        $res['Duration'] = $this->duration;
        $res['PricingCycle'] = $this->pricingCycle;
        $res['OrderType'] = $this->orderType;
        $res['InstanceId'] = $this->instanceId;
        return $res;
    }
    /**
     * @param array $map
     * @return GetResourcePackagePriceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ProductCode'])){
            $model->productCode = $map['ProductCode'];
        }
        if(isset($map['PackageType'])){
            $model->packageType = $map['PackageType'];
        }
        if(isset($map['EffectiveDate'])){
            $model->effectiveDate = $map['EffectiveDate'];
        }
        if(isset($map['Specification'])){
            $model->specification = $map['Specification'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['PricingCycle'])){
            $model->pricingCycle = $map['PricingCycle'];
        }
        if(isset($map['OrderType'])){
            $model->orderType = $map['OrderType'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        return $model;
    }
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
     * @description packageType
     * @var string
     */
    public $packageType;

    /**
     * @description effectiveDate
     * @var string
     */
    public $effectiveDate;

    /**
     * @description specification
     * @var string
     */
    public $specification;

    /**
     * @description duration
     * @var integer
     */
    public $duration;

    /**
     * @description pricingCycle
     * @var string
     */
    public $pricingCycle;

    /**
     * @description orderType
     * @var string
     */
    public $orderType;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

}
