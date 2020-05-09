<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetResellerUserAlarmThresholdRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'alarmType' => 'AlarmType',
        'alarmThresholds' => 'AlarmThresholds',
    ];
    public function validate() {
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('alarmType', $this->alarmType, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['AlarmType'] = $this->alarmType;
        $res['AlarmThresholds'] = $this->alarmThresholds;
        return $res;
    }
    /**
     * @param array $map
     * @return SetResellerUserAlarmThresholdRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['AlarmType'])){
            $model->alarmType = $map['AlarmType'];
        }
        if(isset($map['AlarmThresholds'])){
            $model->alarmThresholds = $map['AlarmThresholds'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description alarmType
     * @var string
     */
    public $alarmType;

    /**
     * @description alarmThresholds
     * @var string
     */
    public $alarmThresholds;

}
