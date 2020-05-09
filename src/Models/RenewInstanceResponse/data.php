<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'orderId' => 'OrderId',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
    }
    public function toMap() {
        $res = [];
        $res['OrderId'] = $this->orderId;
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
        return $model;
    }
    /**
     * @description orderId
     * @var string
     */
    public $orderId;

}
