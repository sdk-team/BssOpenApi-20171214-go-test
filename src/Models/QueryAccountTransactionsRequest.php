<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryAccountTransactionsRequest extends Model {
    protected $_name = [
        'transactionNumber' => 'TransactionNumber',
        'recordID' => 'RecordID',
        'transactionChannelSN' => 'TransactionChannelSN',
        'createTimeStart' => 'CreateTimeStart',
        'createTimeEnd' => 'CreateTimeEnd',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['TransactionNumber'] = $this->transactionNumber;
        $res['RecordID'] = $this->recordID;
        $res['TransactionChannelSN'] = $this->transactionChannelSN;
        $res['CreateTimeStart'] = $this->createTimeStart;
        $res['CreateTimeEnd'] = $this->createTimeEnd;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryAccountTransactionsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TransactionNumber'])){
            $model->transactionNumber = $map['TransactionNumber'];
        }
        if(isset($map['RecordID'])){
            $model->recordID = $map['RecordID'];
        }
        if(isset($map['TransactionChannelSN'])){
            $model->transactionChannelSN = $map['TransactionChannelSN'];
        }
        if(isset($map['CreateTimeStart'])){
            $model->createTimeStart = $map['CreateTimeStart'];
        }
        if(isset($map['CreateTimeEnd'])){
            $model->createTimeEnd = $map['CreateTimeEnd'];
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
     * @description transactionNumber
     * @var string
     */
    public $transactionNumber;

    /**
     * @description recordID
     * @var string
     */
    public $recordID;

    /**
     * @description transactionChannelSN
     * @var string
     */
    public $transactionChannelSN;

    /**
     * @description createTimeStart
     * @var string
     */
    public $createTimeStart;

    /**
     * @description createTimeEnd
     * @var string
     */
    public $createTimeEnd;

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
