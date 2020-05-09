<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateInstanceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'instanceId' => 'InstanceId',
        'orderId' => 'OrderId',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('orderId', $this->orderId, true);
    }
    public function toMap() {
        $res = [];
        $res['InstanceId'] = $this->instanceId;
        $res['OrderId'] = $this->orderId;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
        }
        return $model;
    }
    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description orderId
     * @var string
     */
    public $orderId;

}
