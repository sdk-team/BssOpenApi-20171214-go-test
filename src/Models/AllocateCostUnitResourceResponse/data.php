<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'toUnitUserId' => 'ToUnitUserId',
        'toUnitId' => 'ToUnitId',
        'isSuccess' => 'IsSuccess',
    ];
    public function validate() {
        Model::validateRequired('toUnitUserId', $this->toUnitUserId, true);
        Model::validateRequired('toUnitId', $this->toUnitId, true);
        Model::validateRequired('isSuccess', $this->isSuccess, true);
    }
    public function toMap() {
        $res = [];
        $res['ToUnitUserId'] = $this->toUnitUserId;
        $res['ToUnitId'] = $this->toUnitId;
        $res['IsSuccess'] = $this->isSuccess;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ToUnitUserId'])){
            $model->toUnitUserId = $map['ToUnitUserId'];
        }
        if(isset($map['ToUnitId'])){
            $model->toUnitId = $map['ToUnitId'];
        }
        if(isset($map['IsSuccess'])){
            $model->isSuccess = $map['IsSuccess'];
        }
        return $model;
    }
    /**
     * @description ownerUid
     * @var integer
     */
    public $toUnitUserId;

    /**
     * @description unitId
     * @var integer
     */
    public $toUnitId;

    /**
     * @description isSuccess
     * @var bool
     */
    public $isSuccess;

}
