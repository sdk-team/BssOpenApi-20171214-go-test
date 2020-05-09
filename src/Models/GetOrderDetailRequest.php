<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class GetOrderDetailRequest extends Model {
    protected $_name = [
        'orderId' => 'OrderId',
        'ownerId' => 'OwnerId',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
    }
    public function toMap() {
        $res = [];
        $res['OrderId'] = $this->orderId;
        $res['OwnerId'] = $this->ownerId;
        return $res;
    }
    /**
     * @param array $map
     * @return GetOrderDetailRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        return $model;
    }
    /**
     * @description orderId
     * @var string
     */
    public $orderId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

}
