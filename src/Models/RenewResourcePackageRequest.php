<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class RenewResourcePackageRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'instanceId' => 'InstanceId',
        'effectiveDate' => 'EffectiveDate',
        'duration' => 'Duration',
        'pricingCycle' => 'PricingCycle',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('pricingCycle', $this->pricingCycle, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['InstanceId'] = $this->instanceId;
        $res['EffectiveDate'] = $this->effectiveDate;
        $res['Duration'] = $this->duration;
        $res['PricingCycle'] = $this->pricingCycle;
        return $res;
    }
    /**
     * @param array $map
     * @return RenewResourcePackageRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['EffectiveDate'])){
            $model->effectiveDate = $map['EffectiveDate'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['PricingCycle'])){
            $model->pricingCycle = $map['PricingCycle'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description effectiveDate
     * @var string
     */
    public $effectiveDate;

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

}
