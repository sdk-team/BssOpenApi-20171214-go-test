<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'hostId' => 'HostId',
        'orderId' => 'OrderId',
    ];
    public function validate() {
        Model::validateRequired('hostId', $this->hostId, true);
        Model::validateRequired('orderId', $this->orderId, true);
    }
    public function toMap() {
        $res = [];
        $res['HostId'] = $this->hostId;
        $res['OrderId'] = $this->orderId;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['HostId'])){
            $model->hostId = $map['HostId'];
        }
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
        }
        return $model;
    }
    /**
     * @description hostId
     * @var string
     */
    public $hostId;

    /**
     * @description orderId
     * @var string
     */
    public $orderId;

}
