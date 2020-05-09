<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyInstanceConsumptionResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\items;

class data extends Model {
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'billingCycle' => 'BillingCycle',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('billingCycle', $this->billingCycle, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['TotalCount'] = $this->totalCount;
        $res['BillingCycle'] = $this->billingCycle;
        $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
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
        if(isset($map['BillingCycle'])){
            $model->billingCycle = $map['BillingCycle'];
        }
        if(isset($map['Items'])){
            $model->items = items::fromMap($map['Items']);
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
     * @description billingCycle
     * @var string
     */
    public $billingCycle;

    /**
     * @description items
     * @var data.items
     */
    public $items;

}
