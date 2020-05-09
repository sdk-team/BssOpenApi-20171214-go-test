<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponse\data\promotionDetails;

use AlibabaCloud\Tea\Model;

class promotionDetail extends Model {
    protected $_name = [
        'promotionName' => 'PromotionName',
        'promotionDesc' => 'PromotionDesc',
        'promotionId' => 'PromotionId',
    ];
    public function validate() {
        Model::validateRequired('promotionName', $this->promotionName, true);
        Model::validateRequired('promotionDesc', $this->promotionDesc, true);
        Model::validateRequired('promotionId', $this->promotionId, true);
    }
    public function toMap() {
        $res = [];
        $res['PromotionName'] = $this->promotionName;
        $res['PromotionDesc'] = $this->promotionDesc;
        $res['PromotionId'] = $this->promotionId;
        return $res;
    }
    /**
     * @param array $map
     * @return promotionDetail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PromotionName'])){
            $model->promotionName = $map['PromotionName'];
        }
        if(isset($map['PromotionDesc'])){
            $model->promotionDesc = $map['PromotionDesc'];
        }
        if(isset($map['PromotionId'])){
            $model->promotionId = $map['PromotionId'];
        }
        return $model;
    }
    /**
     * @description promotionName
     * @var string
     */
    public $promotionName;

    /**
     * @description promotionDesc
     * @var string
     */
    public $promotionDesc;

    /**
     * @description promotionId
     * @var integer
     */
    public $promotionId;

}
