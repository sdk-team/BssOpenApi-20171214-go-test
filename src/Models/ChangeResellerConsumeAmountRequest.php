<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ChangeResellerConsumeAmountRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'adjustType' => 'AdjustType',
        'amount' => 'Amount',
        'currency' => 'Currency',
        'businessType' => 'BusinessType',
        'source' => 'Source',
        'outBizId' => 'OutBizId',
        'extendMap' => 'ExtendMap',
    ];
    public function validate() {
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('adjustType', $this->adjustType, true);
        Model::validateRequired('amount', $this->amount, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('businessType', $this->businessType, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('outBizId', $this->outBizId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['AdjustType'] = $this->adjustType;
        $res['Amount'] = $this->amount;
        $res['Currency'] = $this->currency;
        $res['BusinessType'] = $this->businessType;
        $res['Source'] = $this->source;
        $res['OutBizId'] = $this->outBizId;
        $res['ExtendMap'] = $this->extendMap;
        return $res;
    }
    /**
     * @param array $map
     * @return ChangeResellerConsumeAmountRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['AdjustType'])){
            $model->adjustType = $map['AdjustType'];
        }
        if(isset($map['Amount'])){
            $model->amount = $map['Amount'];
        }
        if(isset($map['Currency'])){
            $model->currency = $map['Currency'];
        }
        if(isset($map['BusinessType'])){
            $model->businessType = $map['BusinessType'];
        }
        if(isset($map['Source'])){
            $model->source = $map['Source'];
        }
        if(isset($map['OutBizId'])){
            $model->outBizId = $map['OutBizId'];
        }
        if(isset($map['ExtendMap'])){
            $model->extendMap = $map['ExtendMap'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description adjustType
     * @var string
     */
    public $adjustType;

    /**
     * @description amount
     * @var string
     */
    public $amount;

    /**
     * @description currency
     * @var string
     */
    public $currency;

    /**
     * @description businessType
     * @var string
     */
    public $businessType;

    /**
     * @description source
     * @var string
     */
    public $source;

    /**
     * @description outBizId
     * @var string
     */
    public $outBizId;

    /**
     * @description extendMap
     * @var string
     */
    public $extendMap;

}
