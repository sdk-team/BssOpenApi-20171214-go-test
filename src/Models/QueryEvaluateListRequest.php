<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryEvaluateListRequest extends Model {
    protected $_name = [
        'type' => 'Type',
        'outBizId' => 'OutBizId',
        'ownerId' => 'OwnerId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'startAmount' => 'StartAmount',
        'endAmount' => 'EndAmount',
        'startBizTime' => 'StartBizTime',
        'endBizTime' => 'EndBizTime',
        'sortType' => 'SortType',
        'startSearchTime' => 'StartSearchTime',
        'endSearchTime' => 'EndSearchTime',
        'billCycle' => 'BillCycle',
        'bizTypeList' => 'BizTypeList',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Type'] = $this->type;
        $res['OutBizId'] = $this->outBizId;
        $res['OwnerId'] = $this->ownerId;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['StartAmount'] = $this->startAmount;
        $res['EndAmount'] = $this->endAmount;
        $res['StartBizTime'] = $this->startBizTime;
        $res['EndBizTime'] = $this->endBizTime;
        $res['SortType'] = $this->sortType;
        $res['StartSearchTime'] = $this->startSearchTime;
        $res['EndSearchTime'] = $this->endSearchTime;
        $res['BillCycle'] = $this->billCycle;
        $res['BizTypeList'] = [];
        if(null !== $this->bizTypeList){
            $res['BizTypeList'] = $this->bizTypeList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryEvaluateListRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['OutBizId'])){
            $model->outBizId = $map['OutBizId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['StartAmount'])){
            $model->startAmount = $map['StartAmount'];
        }
        if(isset($map['EndAmount'])){
            $model->endAmount = $map['EndAmount'];
        }
        if(isset($map['StartBizTime'])){
            $model->startBizTime = $map['StartBizTime'];
        }
        if(isset($map['EndBizTime'])){
            $model->endBizTime = $map['EndBizTime'];
        }
        if(isset($map['SortType'])){
            $model->sortType = $map['SortType'];
        }
        if(isset($map['StartSearchTime'])){
            $model->startSearchTime = $map['StartSearchTime'];
        }
        if(isset($map['EndSearchTime'])){
            $model->endSearchTime = $map['EndSearchTime'];
        }
        if(isset($map['BillCycle'])){
            $model->billCycle = $map['BillCycle'];
        }
        if(isset($map['BizTypeList'])){
            if(!empty($map['BizTypeList'])){
                $model->bizTypeList = [];
                $model->bizTypeList = $map['BizTypeList'];
            }
        }
        return $model;
    }
    /**
     * @description type
     * @var integer
     */
    public $type;

    /**
     * @description outBizId
     * @var string
     */
    public $outBizId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

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
     * @description startAmount
     * @var integer
     */
    public $startAmount;

    /**
     * @description endAmount
     * @var integer
     */
    public $endAmount;

    /**
     * @description startBizTime
     * @var string
     */
    public $startBizTime;

    /**
     * @description endBizTime
     * @var string
     */
    public $endBizTime;

    /**
     * @description sortType
     * @var integer
     */
    public $sortType;

    /**
     * @description startSearchTime
     * @var string
     */
    public $startSearchTime;

    /**
     * @description endSearchTime
     * @var string
     */
    public $endSearchTime;

    /**
     * @description billCycle
     * @var string
     */
    public $billCycle;

    /**
     * @description bizTypeList
     * @var array
     */
    public $bizTypeList;

}
