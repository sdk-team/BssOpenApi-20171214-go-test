<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryCostUnitResourceRequest extends Model {
    protected $_name = [
        'ownerUid' => 'OwnerUid',
        'unitId' => 'UnitId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];
    public function validate() {
        Model::validateRequired('ownerUid', $this->ownerUid, true);
        Model::validateRequired('unitId', $this->unitId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerUid'] = $this->ownerUid;
        $res['UnitId'] = $this->unitId;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryCostUnitResourceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerUid'])){
            $model->ownerUid = $map['OwnerUid'];
        }
        if(isset($map['UnitId'])){
            $model->unitId = $map['UnitId'];
        }
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
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
     * @description pageNum
     * @var integer
     */
    public $pageNum;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

}
