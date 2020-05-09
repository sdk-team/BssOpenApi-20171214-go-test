<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryPrepaidCardsRequest extends Model {
    protected $_name = [
        'expiryTimeEnd' => 'ExpiryTimeEnd',
        'expiryTimeStart' => 'ExpiryTimeStart',
        'effectiveOrNot' => 'EffectiveOrNot',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['ExpiryTimeEnd'] = $this->expiryTimeEnd;
        $res['ExpiryTimeStart'] = $this->expiryTimeStart;
        $res['EffectiveOrNot'] = $this->effectiveOrNot;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryPrepaidCardsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ExpiryTimeEnd'])){
            $model->expiryTimeEnd = $map['ExpiryTimeEnd'];
        }
        if(isset($map['ExpiryTimeStart'])){
            $model->expiryTimeStart = $map['ExpiryTimeStart'];
        }
        if(isset($map['EffectiveOrNot'])){
            $model->effectiveOrNot = $map['EffectiveOrNot'];
        }
        return $model;
    }
    /**
     * @description expiryTimeEnd
     * @var string
     */
    public $expiryTimeEnd;

    /**
     * @description expiryTimeStart
     * @var string
     */
    public $expiryTimeStart;

    /**
     * @description effectiveOrNot
     * @var bool
     */
    public $effectiveOrNot;

}
