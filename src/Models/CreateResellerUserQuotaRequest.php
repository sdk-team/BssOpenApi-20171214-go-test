<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class CreateResellerUserQuotaRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'amount' => 'Amount',
        'currency' => 'Currency',
        'outBizId' => 'OutBizId',
    ];
    public function validate() {
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('amount', $this->amount, true);
        Model::validateRequired('currency', $this->currency, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['Amount'] = $this->amount;
        $res['Currency'] = $this->currency;
        $res['OutBizId'] = $this->outBizId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateResellerUserQuotaRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['Amount'])){
            $model->amount = $map['Amount'];
        }
        if(isset($map['Currency'])){
            $model->currency = $map['Currency'];
        }
        if(isset($map['OutBizId'])){
            $model->outBizId = $map['OutBizId'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

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
     * @description outBizId
     * @var string
     */
    public $outBizId;

}
