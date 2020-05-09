<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponse\data\accountTransactionsList;

use AlibabaCloud\Tea\Model;

class accountTransactionsList extends Model {
    protected $_name = [
        'transactionNumber' => 'TransactionNumber',
        'transactionTime' => 'TransactionTime',
        'transactionFlow' => 'TransactionFlow',
        'transactionType' => 'TransactionType',
        'transactionChannel' => 'TransactionChannel',
        'transactionChannelSN' => 'TransactionChannelSN',
        'fundType' => 'FundType',
        'recordID' => 'RecordID',
        'remarks' => 'Remarks',
        'billingCycle' => 'BillingCycle',
        'amount' => 'Amount',
        'balance' => 'Balance',
        'transactionAccount' => 'TransactionAccount',
    ];
    public function validate() {
        Model::validateRequired('transactionNumber', $this->transactionNumber, true);
        Model::validateRequired('transactionTime', $this->transactionTime, true);
        Model::validateRequired('transactionFlow', $this->transactionFlow, true);
        Model::validateRequired('transactionType', $this->transactionType, true);
        Model::validateRequired('transactionChannel', $this->transactionChannel, true);
        Model::validateRequired('transactionChannelSN', $this->transactionChannelSN, true);
        Model::validateRequired('fundType', $this->fundType, true);
        Model::validateRequired('recordID', $this->recordID, true);
        Model::validateRequired('remarks', $this->remarks, true);
        Model::validateRequired('billingCycle', $this->billingCycle, true);
        Model::validateRequired('amount', $this->amount, true);
        Model::validateRequired('balance', $this->balance, true);
        Model::validateRequired('transactionAccount', $this->transactionAccount, true);
    }
    public function toMap() {
        $res = [];
        $res['TransactionNumber'] = $this->transactionNumber;
        $res['TransactionTime'] = $this->transactionTime;
        $res['TransactionFlow'] = $this->transactionFlow;
        $res['TransactionType'] = $this->transactionType;
        $res['TransactionChannel'] = $this->transactionChannel;
        $res['TransactionChannelSN'] = $this->transactionChannelSN;
        $res['FundType'] = $this->fundType;
        $res['RecordID'] = $this->recordID;
        $res['Remarks'] = $this->remarks;
        $res['BillingCycle'] = $this->billingCycle;
        $res['Amount'] = $this->amount;
        $res['Balance'] = $this->balance;
        $res['TransactionAccount'] = $this->transactionAccount;
        return $res;
    }
    /**
     * @param array $map
     * @return accountTransactionsList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TransactionNumber'])){
            $model->transactionNumber = $map['TransactionNumber'];
        }
        if(isset($map['TransactionTime'])){
            $model->transactionTime = $map['TransactionTime'];
        }
        if(isset($map['TransactionFlow'])){
            $model->transactionFlow = $map['TransactionFlow'];
        }
        if(isset($map['TransactionType'])){
            $model->transactionType = $map['TransactionType'];
        }
        if(isset($map['TransactionChannel'])){
            $model->transactionChannel = $map['TransactionChannel'];
        }
        if(isset($map['TransactionChannelSN'])){
            $model->transactionChannelSN = $map['TransactionChannelSN'];
        }
        if(isset($map['FundType'])){
            $model->fundType = $map['FundType'];
        }
        if(isset($map['RecordID'])){
            $model->recordID = $map['RecordID'];
        }
        if(isset($map['Remarks'])){
            $model->remarks = $map['Remarks'];
        }
        if(isset($map['BillingCycle'])){
            $model->billingCycle = $map['BillingCycle'];
        }
        if(isset($map['Amount'])){
            $model->amount = $map['Amount'];
        }
        if(isset($map['Balance'])){
            $model->balance = $map['Balance'];
        }
        if(isset($map['TransactionAccount'])){
            $model->transactionAccount = $map['TransactionAccount'];
        }
        return $model;
    }
    /**
     * @description transactionNumber
     * @var string
     */
    public $transactionNumber;

    /**
     * @description transactionTime
     * @var string
     */
    public $transactionTime;

    /**
     * @description transactionFlow
     * @var string
     */
    public $transactionFlow;

    /**
     * @description transactionType
     * @var string
     */
    public $transactionType;

    /**
     * @description transactionChannel
     * @var string
     */
    public $transactionChannel;

    /**
     * @description transactionChannelSN
     * @var string
     */
    public $transactionChannelSN;

    /**
     * @description fundType
     * @var string
     */
    public $fundType;

    /**
     * @description recordID
     * @var string
     */
    public $recordID;

    /**
     * @description remarks
     * @var string
     */
    public $remarks;

    /**
     * @description billingCycle
     * @var string
     */
    public $billingCycle;

    /**
     * @description amount
     * @var string
     */
    public $amount;

    /**
     * @description balance
     * @var string
     */
    public $balance;

    /**
     * @description transactionAccount
     * @var string
     */
    public $transactionAccount;

}
