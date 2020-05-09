<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryProductListRequest extends Model {
    protected $_name = [
        'queryTotalCount' => 'QueryTotalCount',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];
    public function validate() {
        Model::validateRequired('pageNum', $this->pageNum, true);
    }
    public function toMap() {
        $res = [];
        $res['QueryTotalCount'] = $this->queryTotalCount;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryProductListRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['QueryTotalCount'])){
            $model->queryTotalCount = $map['QueryTotalCount'];
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
     * @description queryTotalCount
     * @var bool
     */
    public $queryTotalCount;

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
