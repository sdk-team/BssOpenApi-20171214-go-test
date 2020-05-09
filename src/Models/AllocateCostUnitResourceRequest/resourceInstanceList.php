<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest;

use AlibabaCloud\Tea\Model;

class resourceInstanceList extends Model {
    protected $_name = [
        'resourceUserId' => 'ResourceUserId',
        'resourceId' => 'ResourceId',
        'commodityCode' => 'CommodityCode',
    ];
    public function validate() {
        Model::validateRequired('resourceUserId', $this->resourceUserId, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('commodityCode', $this->commodityCode, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceUserId'] = $this->resourceUserId;
        $res['ResourceId'] = $this->resourceId;
        $res['CommodityCode'] = $this->commodityCode;
        return $res;
    }
    /**
     * @param array $map
     * @return resourceInstanceList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceUserId'])){
            $model->resourceUserId = $map['ResourceUserId'];
        }
        if(isset($map['ResourceId'])){
            $model->resourceId = $map['ResourceId'];
        }
        if(isset($map['CommodityCode'])){
            $model->commodityCode = $map['CommodityCode'];
        }
        return $model;
    }
    /**
     * @description resourceUserId
     * @var integer
     */
    public $resourceUserId;

    /**
     * @description resourceId
     * @var string
     */
    public $resourceId;

    /**
     * @description commodityCode
     * @var string
     */
    public $commodityCode;

}
