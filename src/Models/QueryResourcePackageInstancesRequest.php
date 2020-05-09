<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryResourcePackageInstancesRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'productCode' => 'ProductCode',
        'expiryTimeStart' => 'ExpiryTimeStart',
        'expiryTimeEnd' => 'ExpiryTimeEnd',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ProductCode'] = $this->productCode;
        $res['ExpiryTimeStart'] = $this->expiryTimeStart;
        $res['ExpiryTimeEnd'] = $this->expiryTimeEnd;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryResourcePackageInstancesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ProductCode'])){
            $model->productCode = $map['ProductCode'];
        }
        if(isset($map['ExpiryTimeStart'])){
            $model->expiryTimeStart = $map['ExpiryTimeStart'];
        }
        if(isset($map['ExpiryTimeEnd'])){
            $model->expiryTimeEnd = $map['ExpiryTimeEnd'];
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
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description productCode
     * @var string
     */
    public $productCode;

    /**
     * @description expiryTimeStart
     * @var string
     */
    public $expiryTimeStart;

    /**
     * @description expiryTimeEnd
     * @var string
     */
    public $expiryTimeEnd;

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
