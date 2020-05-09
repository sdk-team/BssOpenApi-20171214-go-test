<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse\data;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse\data\promotionDetails\promotionDetail;

class promotionDetails extends Model {
    protected $_name = [
        'promotionDetail' => 'PromotionDetail',
    ];
    public function validate() {
        Model::validateRequired('promotionDetail', $this->promotionDetail, true);
    }
    public function toMap() {
        $res = [];
        $res['PromotionDetail'] = [];
        if(null !== $this->promotionDetail && is_array($this->promotionDetail)){
            $n = 0;
            foreach($this->promotionDetail as $item){
                $res['PromotionDetail'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return promotionDetails
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PromotionDetail'])){
            if(!empty($map['PromotionDetail'])){
                $model->promotionDetail = [];
                $n = 0;
                foreach($map['PromotionDetail'] as $item) {
                    $model->promotionDetail[$n++] = null !== $item ? promotionDetail::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PromotionDetail
     * @var array
     */
    public $promotionDetail;

}
