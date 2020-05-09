<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryCostUnitRequest extends Model {
    protected $_name = [
        'ownerUid' => 'OwnerUid',
        'parentUnitId' => 'ParentUnitId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];
    public function validate() {
        Model::validateRequired('ownerUid', $this->ownerUid, true);
        Model::validateRequired('parentUnitId', $this->parentUnitId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerUid'] = $this->ownerUid;
        $res['ParentUnitId'] = $this->parentUnitId;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryCostUnitRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerUid'])){
            $model->ownerUid = $map['OwnerUid'];
        }
        if(isset($map['ParentUnitId'])){
            $model->parentUnitId = $map['ParentUnitId'];
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
    public $parentUnitId;

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
