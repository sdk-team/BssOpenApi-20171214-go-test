<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceRequest\moduleList;

class GetPayAsYouGoPriceRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'region' => 'Region',
        'moduleList' => 'ModuleList',
    ];
    public function validate() {
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('moduleList', $this->moduleList, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['Region'] = $this->region;
        $res['ModuleList'] = [];
        if(null !== $this->moduleList && is_array($this->moduleList)){
            $n = 0;
            foreach($this->moduleList as $item){
                $res['ModuleList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetPayAsYouGoPriceRequest
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
        if(isset($map['Region'])){
            $model->region = $map['Region'];
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

    /**
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description moduleList
     * @var array
     */
    public $moduleList;

}
