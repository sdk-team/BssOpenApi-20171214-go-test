<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryRIUtilizationDetailRequest extends Model {
    protected $_name = [
        'RIInstanceId' => 'RIInstanceId',
        'instanceSpec' => 'InstanceSpec',
        'RICommodityCode' => 'RICommodityCode',
        'deductedInstanceId' => 'DeductedInstanceId',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];
    public function validate() {
        Model::validateRequired('RICommodityCode', $this->RICommodityCode, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }
    public function toMap() {
        $res = [];
        $res['RIInstanceId'] = $this->RIInstanceId;
        $res['InstanceSpec'] = $this->instanceSpec;
        $res['RICommodityCode'] = $this->RICommodityCode;
        $res['DeductedInstanceId'] = $this->deductedInstanceId;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryRIUtilizationDetailRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RIInstanceId'])){
            $model->RIInstanceId = $map['RIInstanceId'];
        }
        if(isset($map['InstanceSpec'])){
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if(isset($map['RICommodityCode'])){
            $model->RICommodityCode = $map['RICommodityCode'];
        }
        if(isset($map['DeductedInstanceId'])){
            $model->deductedInstanceId = $map['DeductedInstanceId'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
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
     * @description riInstanceId
     * @var string
     */
    public $RIInstanceId;

    /**
     * @description instanceSpec
     * @var string
     */
    public $instanceSpec;

    /**
     * @description riCommodityCode
     * @var string
     */
    public $RICommodityCode;

    /**
     * @description deductInstanceId
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

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
