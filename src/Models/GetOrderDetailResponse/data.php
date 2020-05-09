<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\orderList;

class data extends Model {
    protected $_name = [
        'hostName' => 'HostName',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'orderList' => 'OrderList',
    ];
    public function validate() {
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('orderList', $this->orderList, true);
    }
    public function toMap() {
        $res = [];
        $res['HostName'] = $this->hostName;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['TotalCount'] = $this->totalCount;
        $res['OrderList'] = null !== $this->orderList ? $this->orderList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['HostName'])){
            $model->hostName = $map['HostName'];
        }
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['OrderList'])){
            $model->orderList = orderList::fromMap($map['OrderList']);
        }
        return $model;
    }
    /**
     * @description hostName
     * @var string
     */
    public $hostName;

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
     * @description orderList
     * @var data.orderList
     */
    public $orderList;

}
