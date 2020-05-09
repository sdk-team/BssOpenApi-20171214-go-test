<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\accountTransactionsList;

class data extends Model {
    protected $_name = [
        'accountName' => 'AccountName',
        'totalCount' => 'TotalCount',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'accountTransactionsList' => 'AccountTransactionsList',
    ];
    public function validate() {
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('accountTransactionsList', $this->accountTransactionsList, true);
    }
    public function toMap() {
        $res = [];
        $res['AccountName'] = $this->accountName;
        $res['TotalCount'] = $this->totalCount;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['AccountTransactionsList'] = null !== $this->accountTransactionsList ? $this->accountTransactionsList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccountName'])){
            $model->accountName = $map['AccountName'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['AccountTransactionsList'])){
            $model->accountTransactionsList = accountTransactionsList::fromMap($map['AccountTransactionsList']);
        }
        return $model;
    }
    /**
     * @description accountName
     * @var string
     */
    public $accountName;

    /**
     * @description totalCount
     * @var integer
     */
    public $totalCount;

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

    /**
     * @description accountTransactionsList
     * @var data.accountTransactionsList
     */
    public $accountTransactionsList;

}
