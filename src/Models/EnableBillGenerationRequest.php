<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class EnableBillGenerationRequest extends Model {
    protected $_name = [
        'productCode' => 'ProductCode',
        'ownerId' => 'OwnerId',
    ];
    public function validate() {
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
    }
    public function toMap() {
        $res = [];
        $res['ProductCode'] = $this->productCode;
        $res['OwnerId'] = $this->ownerId;
        return $res;
    }
    /**
     * @param array $map
     * @return EnableBillGenerationRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ProductCode'])){
            $model->productCode = $map['ProductCode'];
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
     * @description ownerId
     * @var integer
     */
    public $ownerId;

}
