<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UpgradeResourcePackageResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'orderId' => 'OrderId',
        'instanceId' => 'InstanceId',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['OrderId'] = $this->orderId;
        $res['InstanceId'] = $this->instanceId;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        return $model;
    }
    /**
     * @description orderId
     * @var integer
     */
    public $orderId;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

}
