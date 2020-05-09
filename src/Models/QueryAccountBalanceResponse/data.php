<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'availableAmount' => 'AvailableAmount',
        'availableCashAmount' => 'AvailableCashAmount',
        'creditAmount' => 'CreditAmount',
        'mybankCreditAmount' => 'MybankCreditAmount',
        'currency' => 'Currency',
    ];
    public function validate() {
        Model::validateRequired('availableAmount', $this->availableAmount, true);
        Model::validateRequired('availableCashAmount', $this->availableCashAmount, true);
        Model::validateRequired('creditAmount', $this->creditAmount, true);
        Model::validateRequired('mybankCreditAmount', $this->mybankCreditAmount, true);
        Model::validateRequired('currency', $this->currency, true);
    }
    public function toMap() {
        $res = [];
        $res['AvailableAmount'] = $this->availableAmount;
        $res['AvailableCashAmount'] = $this->availableCashAmount;
        $res['CreditAmount'] = $this->creditAmount;
        $res['MybankCreditAmount'] = $this->mybankCreditAmount;
        $res['Currency'] = $this->currency;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AvailableAmount'])){
            $model->availableAmount = $map['AvailableAmount'];
        }
        if(isset($map['AvailableCashAmount'])){
            $model->availableCashAmount = $map['AvailableCashAmount'];
        }
        if(isset($map['CreditAmount'])){
            $model->creditAmount = $map['CreditAmount'];
        }
        if(isset($map['MybankCreditAmount'])){
            $model->mybankCreditAmount = $map['MybankCreditAmount'];
        }
        if(isset($map['Currency'])){
            $model->currency = $map['Currency'];
        }
        return $model;
    }
    /**
     * @description availableAmount
     * @var string
     */
    public $availableAmount;

    /**
     * @description availableCashAmount
     * @var string
     */
    public $availableCashAmount;

    /**
     * @description creditAmount
     * @var string
     */
    public $creditAmount;

    /**
     * @description mybankCreditAmount
     * @var string
     */
    public $mybankCreditAmount;

    /**
     * @description currency
     * @var string
     */
    public $currency;

}
