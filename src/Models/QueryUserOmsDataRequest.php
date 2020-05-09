<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryUserOmsDataRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'table' => 'Table',
        'dataType' => 'DataType',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'marker' => 'Marker',
        'pageSize' => 'PageSize',
    ];
    public function validate() {
        Model::validateRequired('table', $this->table, true);
        Model::validateRequired('dataType', $this->dataType, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['Table'] = $this->table;
        $res['DataType'] = $this->dataType;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['Marker'] = $this->marker;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryUserOmsDataRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['Table'])){
            $model->table = $map['Table'];
        }
        if(isset($map['DataType'])){
            $model->dataType = $map['DataType'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['Marker'])){
            $model->marker = $map['Marker'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description table
     * @var string
     */
    public $table;

    /**
     * @description dataType
     * @var string
     */
    public $dataType;

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
     * @description marker
     * @var string
     */
    public $marker;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

}
