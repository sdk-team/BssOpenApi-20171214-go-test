<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponse\data\costUnitDtoList;

class data extends Model {
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'costUnitDtoList' => 'CostUnitDtoList',
    ];
    public function validate() {
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('costUnitDtoList', $this->costUnitDtoList, true);
    }
    public function toMap() {
        $res = [];
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['TotalCount'] = $this->totalCount;
        $res['CostUnitDtoList'] = [];
        if(null !== $this->costUnitDtoList && is_array($this->costUnitDtoList)){
            $n = 0;
            foreach($this->costUnitDtoList as $item){
                $res['CostUnitDtoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['CostUnitDtoList'])){
            if(!empty($map['CostUnitDtoList'])){
                $model->costUnitDtoList = [];
                $n = 0;
                foreach($map['CostUnitDtoList'] as $item) {
                    $model->costUnitDtoList[$n++] = null !== $item ? costUnitDtoList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
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

    /**
     * @description totalCount
     * @var integer
     */
    public $totalCount;

    /**
     * @description costUnitDtoList
     * @var array
     */
    public $costUnitDtoList;

}
