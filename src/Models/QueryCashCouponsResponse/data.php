<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponse\data\cashCoupon;

class data extends Model {
    protected $_name = [
        'cashCoupon' => 'CashCoupon',
    ];
    public function validate() {
        Model::validateRequired('cashCoupon', $this->cashCoupon, true);
    }
    public function toMap() {
        $res = [];
        $res['CashCoupon'] = [];
        if(null !== $this->cashCoupon && is_array($this->cashCoupon)){
            $n = 0;
            foreach($this->cashCoupon as $item){
                $res['CashCoupon'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['CashCoupon'])){
            if(!empty($map['CashCoupon'])){
                $model->cashCoupon = [];
                $n = 0;
                foreach($map['CashCoupon'] as $item) {
                    $model->cashCoupon[$n++] = null !== $item ? cashCoupon::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description CashCoupon
     * @var array
     */
    public $cashCoupon;

}
