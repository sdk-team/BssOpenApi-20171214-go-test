<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse\data\detailList;

use AlibabaCloud\Tea\Model;

class detailList extends Model {
    protected $_name = [
        'RIInstanceId' => 'RIInstanceId',
        'instanceSpec' => 'InstanceSpec',
        'deductedInstanceId' => 'DeductedInstanceId',
        'deductedCommodityCode' => 'DeductedCommodityCode',
        'deductDate' => 'DeductDate',
        'deductHours' => 'DeductHours',
        'deductedProductDetail' => 'DeductedProductDetail',
        'deductQuantity' => 'DeductQuantity',
        'deductFactorTotal' => 'DeductFactorTotal',
    ];
    public function validate() {
        Model::validateRequired('RIInstanceId', $this->RIInstanceId, true);
        Model::validateRequired('instanceSpec', $this->instanceSpec, true);
        Model::validateRequired('deductedInstanceId', $this->deductedInstanceId, true);
        Model::validateRequired('deductedCommodityCode', $this->deductedCommodityCode, true);
        Model::validateRequired('deductDate', $this->deductDate, true);
        Model::validateRequired('deductHours', $this->deductHours, true);
        Model::validateRequired('deductedProductDetail', $this->deductedProductDetail, true);
        Model::validateRequired('deductQuantity', $this->deductQuantity, true);
        Model::validateRequired('deductFactorTotal', $this->deductFactorTotal, true);
    }
    public function toMap() {
        $res = [];
        $res['RIInstanceId'] = $this->RIInstanceId;
        $res['InstanceSpec'] = $this->instanceSpec;
        $res['DeductedInstanceId'] = $this->deductedInstanceId;
        $res['DeductedCommodityCode'] = $this->deductedCommodityCode;
        $res['DeductDate'] = $this->deductDate;
        $res['DeductHours'] = $this->deductHours;
        $res['DeductedProductDetail'] = $this->deductedProductDetail;
        $res['DeductQuantity'] = $this->deductQuantity;
        $res['DeductFactorTotal'] = $this->deductFactorTotal;
        return $res;
    }
    /**
     * @param array $map
     * @return detailList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RIInstanceId'])){
            $model->RIInstanceId = $map['RIInstanceId'];
        }
        if(isset($map['InstanceSpec'])){
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if(isset($map['DeductedInstanceId'])){
            $model->deductedInstanceId = $map['DeductedInstanceId'];
        }
        if(isset($map['DeductedCommodityCode'])){
            $model->deductedCommodityCode = $map['DeductedCommodityCode'];
        }
        if(isset($map['DeductDate'])){
            $model->deductDate = $map['DeductDate'];
        }
        if(isset($map['DeductHours'])){
            $model->deductHours = $map['DeductHours'];
        }
        if(isset($map['DeductedProductDetail'])){
            $model->deductedProductDetail = $map['DeductedProductDetail'];
        }
        if(isset($map['DeductQuantity'])){
            $model->deductQuantity = $map['DeductQuantity'];
        }
        if(isset($map['DeductFactorTotal'])){
            $model->deductFactorTotal = $map['DeductFactorTotal'];
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
     * @description deductedInstanceId
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @description deductedCommodityCode
     * @var string
     */
    public $deductedCommodityCode;

    /**
     * @description deductDate
     * @var string
     */
    public $deductDate;

    /**
     * @description deductHours
     * @var string
     */
    public $deductHours;

    /**
     * @description deductedCommodityName
     * @var string
     */
    public $deductedProductDetail;

    /**
     * @description deductQuantity
     * @var float
     */
    public $deductQuantity;

    /**
     * @description deductFactorTotal
     * @var float
     */
    public $deductFactorTotal;

}
