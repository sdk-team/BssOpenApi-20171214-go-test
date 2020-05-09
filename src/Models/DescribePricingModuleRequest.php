<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribePricingModuleRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
    ];
    public function validate() {
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribePricingModuleRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
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
