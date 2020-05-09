<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesResponse\data\instanceList;

class data extends Model {
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'instanceList' => 'InstanceList',
    ];
    public function validate() {
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('instanceList', $this->instanceList, true);
    }
    public function toMap() {
        $res = [];
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['TotalCount'] = $this->totalCount;
        $res['InstanceList'] = [];
        if(null !== $this->instanceList && is_array($this->instanceList)){
            $n = 0;
            foreach($this->instanceList as $item){
                $res['InstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['InstanceList'])){
            if(!empty($map['InstanceList'])){
                $model->instanceList = [];
                $n = 0;
                foreach($map['InstanceList'] as $item) {
                    $model->instanceList[$n++] = null !== $item ? instanceList::fromMap($item) : $item;
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
     * @description instanceList
     * @var array
     */
    public $instanceList;

}
