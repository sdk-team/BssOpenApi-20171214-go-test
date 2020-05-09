<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\costUnit;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\costUnitStatisInfo;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponse\data\resourceInstanceDtoList;

class data extends Model {
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'resourceInstanceDtoList' => 'ResourceInstanceDtoList',
        'costUnit' => 'CostUnit',
        'costUnitStatisInfo' => 'CostUnitStatisInfo',
    ];
    public function validate() {
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('resourceInstanceDtoList', $this->resourceInstanceDtoList, true);
        Model::validateRequired('costUnit', $this->costUnit, true);
        Model::validateRequired('costUnitStatisInfo', $this->costUnitStatisInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['TotalCount'] = $this->totalCount;
        $res['ResourceInstanceDtoList'] = [];
        if(null !== $this->resourceInstanceDtoList && is_array($this->resourceInstanceDtoList)){
            $n = 0;
            foreach($this->resourceInstanceDtoList as $item){
                $res['ResourceInstanceDtoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['CostUnit'] = null !== $this->costUnit ? $this->costUnit->toMap() : null;
        $res['CostUnitStatisInfo'] = null !== $this->costUnitStatisInfo ? $this->costUnitStatisInfo->toMap() : null;
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
        if(isset($map['ResourceInstanceDtoList'])){
            if(!empty($map['ResourceInstanceDtoList'])){
                $model->resourceInstanceDtoList = [];
                $n = 0;
                foreach($map['ResourceInstanceDtoList'] as $item) {
                    $model->resourceInstanceDtoList[$n++] = null !== $item ? resourceInstanceDtoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['CostUnit'])){
            $model->costUnit = costUnit::fromMap($map['CostUnit']);
        }
        if(isset($map['CostUnitStatisInfo'])){
            $model->costUnitStatisInfo = costUnitStatisInfo::fromMap($map['CostUnitStatisInfo']);
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
     * @description resourceInstanceDtoList
     * @var array
     */
    public $resourceInstanceDtoList;

    /**
     * @description costUnit
     * @var data.costUnit
     */
    public $costUnit;

    /**
     * @description costUnitStatisInfo
     * @var data.costUnitStatisInfo
     */
    public $costUnitStatisInfo;

}
