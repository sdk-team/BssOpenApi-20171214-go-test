<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\moduleDetails;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\promotionDetails;

class data extends Model {
    protected $_name = [
        'currency' => 'Currency',
        'moduleDetails' => 'ModuleDetails',
        'promotionDetails' => 'PromotionDetails',
    ];
    public function validate() {
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('moduleDetails', $this->moduleDetails, true);
        Model::validateRequired('promotionDetails', $this->promotionDetails, true);
    }
    public function toMap() {
        $res = [];
        $res['Currency'] = $this->currency;
        $res['ModuleDetails'] = null !== $this->moduleDetails ? $this->moduleDetails->toMap() : null;
        $res['PromotionDetails'] = null !== $this->promotionDetails ? $this->promotionDetails->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Currency'])){
            $model->currency = $map['Currency'];
        }
        if(isset($map['ModuleDetails'])){
            $model->moduleDetails = moduleDetails::fromMap($map['ModuleDetails']);
        }
        if(isset($map['PromotionDetails'])){
            $model->promotionDetails = promotionDetails::fromMap($map['PromotionDetails']);
        }
        return $model;
    }
    /**
     * @description currency
     * @var string
     */
    public $currency;

    /**
     * @description moduleDetails
     * @var data.moduleDetails
     */
    public $moduleDetails;

    /**
     * @description promotionDetails
     * @var data.promotionDetails
     */
    public $promotionDetails;

}
