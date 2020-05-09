<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\productList;

class data extends Model {
    protected $_name = [
        'totalCount' => 'TotalCount',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'productList' => 'ProductList',
    ];
    public function validate() {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('productList', $this->productList, true);
    }
    public function toMap() {
        $res = [];
        $res['TotalCount'] = $this->totalCount;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['ProductList'] = null !== $this->productList ? $this->productList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['ProductList'])){
            $model->productList = productList::fromMap($map['ProductList']);
        }
        return $model;
    }
    /**
     * @description totalCount
     * @var integer
     */
    public $totalCount;

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
     * @description productList
     * @var data.productList
     */
    public $productList;

}
