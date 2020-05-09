<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceRequest extends Model {
    protected $_name = [
        'productCode' => 'ProductCode',
        'instanceId' => 'InstanceId',
        'renewPeriod' => 'RenewPeriod',
        'clientToken' => 'ClientToken',
        'productType' => 'ProductType',
        'ownerId' => 'OwnerId',
    ];
    public function validate() {
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('renewPeriod', $this->renewPeriod, true);
    }
    public function toMap() {
        $res = [];
        $res['ProductCode'] = $this->productCode;
        $res['InstanceId'] = $this->instanceId;
        $res['RenewPeriod'] = $this->renewPeriod;
        $res['ClientToken'] = $this->clientToken;
        $res['ProductType'] = $this->productType;
        $res['OwnerId'] = $this->ownerId;
        return $res;
    }
    /**
     * @param array $map
     * @return RenewInstanceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ProductCode'])){
            $model->productCode = $map['ProductCode'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['RenewPeriod'])){
            $model->renewPeriod = $map['RenewPeriod'];
        }
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['ProductType'])){
            $model->productType = $map['ProductType'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        return $model;
    }
    /**
     * @description productCode
     * @var string
     */
    public $productCode;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description renewPeriod
     * @var integer
     */
    public $renewPeriod;

    /**
     * @description clientToken
     * @var string
     */
    public $clientToken;

    /**
     * @description productType
     * @var string
     */
    public $productType;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

}
