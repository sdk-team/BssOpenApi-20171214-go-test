<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryAccountBillRequest extends Model {
    protected $_name = [
        'billingCycle' => 'BillingCycle',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'ownerID' => 'OwnerID',
        'isGroupByProduct' => 'IsGroupByProduct',
        'productCode' => 'ProductCode',
    ];
    public function validate() {
        Model::validateRequired('billingCycle', $this->billingCycle, true);
    }
    public function toMap() {
        $res = [];
        $res['BillingCycle'] = $this->billingCycle;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['OwnerID'] = $this->ownerID;
        $res['IsGroupByProduct'] = $this->isGroupByProduct;
        $res['ProductCode'] = $this->productCode;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryAccountBillRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['BillingCycle'])){
            $model->billingCycle = $map['BillingCycle'];
        }
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['OwnerID'])){
            $model->ownerID = $map['OwnerID'];
        }
        if(isset($map['IsGroupByProduct'])){
            $model->isGroupByProduct = $map['IsGroupByProduct'];
        }
        if(isset($map['ProductCode'])){
            $model->productCode = $map['ProductCode'];
        }
        return $model;
    }
    /**
     * @description billingCycle
     * @var string
     */
    public $billingCycle;

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
     * @description resourceOwnerId
     * @var integer
     */
    public $ownerID;

    /**
     * @description isGroupByProduct
     * @var bool
     */
    public $isGroupByProduct;

    /**
     * @description productCode
     * @var string
     */
    public $productCode;

}
