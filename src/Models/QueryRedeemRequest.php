<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryRedeemRequest extends Model {
    protected $_name = [
        'expiryTimeStart' => 'ExpiryTimeStart',
        'expiryTimeEnd' => 'ExpiryTimeEnd',
        'effectiveOrNot' => 'EffectiveOrNot',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['ExpiryTimeStart'] = $this->expiryTimeStart;
        $res['ExpiryTimeEnd'] = $this->expiryTimeEnd;
        $res['EffectiveOrNot'] = $this->effectiveOrNot;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryRedeemRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ExpiryTimeStart'])){
            $model->expiryTimeStart = $map['ExpiryTimeStart'];
        }
        if(isset($map['ExpiryTimeEnd'])){
            $model->expiryTimeEnd = $map['ExpiryTimeEnd'];
        }
        if(isset($map['EffectiveOrNot'])){
            $model->effectiveOrNot = $map['EffectiveOrNot'];
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
     * @description effectiveOrNot
     * @var bool
     */
    public $effectiveOrNot;

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
