<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitRequest;

use AlibabaCloud\Tea\Model;

class unitEntityList extends Model {
    protected $_name = [
        'ownerUid' => 'OwnerUid',
        'unitId' => 'UnitId',
        'newUnitName' => 'NewUnitName',
    ];
    public function validate() {
        Model::validateRequired('ownerUid', $this->ownerUid, true);
        Model::validateRequired('unitId', $this->unitId, true);
        Model::validateRequired('newUnitName', $this->newUnitName, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerUid'] = $this->ownerUid;
        $res['UnitId'] = $this->unitId;
        $res['NewUnitName'] = $this->newUnitName;
        return $res;
    }
    /**
     * @param array $map
     * @return unitEntityList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerUid'])){
            $model->ownerUid = $map['OwnerUid'];
        }
        if(isset($map['UnitId'])){
            $model->unitId = $map['UnitId'];
        }
        if(isset($map['NewUnitName'])){
            $model->newUnitName = $map['NewUnitName'];
        }
        return $model;
    }
    /**
     * @description ownerUid
     * @var integer
     */
    public $ownerUid;

    /**
     * @description unitId
     * @var integer
     */
    public $unitId;

    /**
     * @description unitName
     * @var string
     */
    public $newUnitName;

}
