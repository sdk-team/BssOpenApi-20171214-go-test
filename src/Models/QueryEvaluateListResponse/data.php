<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\evaluateList;

class data extends Model {
    protected $_name = [
        'hostId' => 'HostId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'totalInvoiceAmount' => 'TotalInvoiceAmount',
        'totalUnAppliedInvoiceAmount' => 'TotalUnAppliedInvoiceAmount',
        'evaluateList' => 'EvaluateList',
    ];
    public function validate() {
        Model::validateRequired('hostId', $this->hostId, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('totalInvoiceAmount', $this->totalInvoiceAmount, true);
        Model::validateRequired('totalUnAppliedInvoiceAmount', $this->totalUnAppliedInvoiceAmount, true);
        Model::validateRequired('evaluateList', $this->evaluateList, true);
    }
    public function toMap() {
        $res = [];
        $res['HostId'] = $this->hostId;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['TotalCount'] = $this->totalCount;
        $res['TotalInvoiceAmount'] = $this->totalInvoiceAmount;
        $res['TotalUnAppliedInvoiceAmount'] = $this->totalUnAppliedInvoiceAmount;
        $res['EvaluateList'] = null !== $this->evaluateList ? $this->evaluateList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['HostId'])){
            $model->hostId = $map['HostId'];
        }
        if(isset($map['PageNum'])){
            $model->pageNum = $map['PageNum'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['TotalInvoiceAmount'])){
            $model->totalInvoiceAmount = $map['TotalInvoiceAmount'];
        }
        if(isset($map['TotalUnAppliedInvoiceAmount'])){
            $model->totalUnAppliedInvoiceAmount = $map['TotalUnAppliedInvoiceAmount'];
        }
        if(isset($map['EvaluateList'])){
            $model->evaluateList = evaluateList::fromMap($map['EvaluateList']);
        }
        return $model;
    }
    /**
     * @description hostId
     * @var string
     */
    public $hostId;

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
     * @description totalCount
     * @var integer
     */
    public $totalCount;

    /**
     * @description totalInvoiceAmount
     * @var integer
     */
    public $totalInvoiceAmount;

    /**
     * @description totalUnAppliedInvoiceAmount
     * @var integer
     */
    public $totalUnAppliedInvoiceAmount;

    /**
     * @description evaluateList
     * @var data.evaluateList
     */
    public $evaluateList;

}
