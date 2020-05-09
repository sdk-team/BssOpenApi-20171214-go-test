<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponse\data;

use AlibabaCloud\Tea\Model;

class costUnitStatisInfo extends Model {
    protected $_name = [
        'resourceCount' => 'ResourceCount',
        'resourceGroupCount' => 'ResourceGroupCount',
        'subUnitCount' => 'SubUnitCount',
        'userCount' => 'UserCount',
        'totalResourceCount' => 'TotalResourceCount',
        'totalUserCount' => 'TotalUserCount',
        'totalResourceGroupCount' => 'TotalResourceGroupCount',
    ];
    public function validate() {
        Model::validateRequired('resourceCount', $this->resourceCount, true);
        Model::validateRequired('resourceGroupCount', $this->resourceGroupCount, true);
        Model::validateRequired('subUnitCount', $this->subUnitCount, true);
        Model::validateRequired('userCount', $this->userCount, true);
        Model::validateRequired('totalResourceCount', $this->totalResourceCount, true);
        Model::validateRequired('totalUserCount', $this->totalUserCount, true);
        Model::validateRequired('totalResourceGroupCount', $this->totalResourceGroupCount, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceCount'] = $this->resourceCount;
        $res['ResourceGroupCount'] = $this->resourceGroupCount;
        $res['SubUnitCount'] = $this->subUnitCount;
        $res['UserCount'] = $this->userCount;
        $res['TotalResourceCount'] = $this->totalResourceCount;
        $res['TotalUserCount'] = $this->totalUserCount;
        $res['TotalResourceGroupCount'] = $this->totalResourceGroupCount;
        return $res;
    }
    /**
     * @param array $map
     * @return costUnitStatisInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceCount'])){
            $model->resourceCount = $map['ResourceCount'];
        }
        if(isset($map['ResourceGroupCount'])){
            $model->resourceGroupCount = $map['ResourceGroupCount'];
        }
        if(isset($map['SubUnitCount'])){
            $model->subUnitCount = $map['SubUnitCount'];
        }
        if(isset($map['UserCount'])){
            $model->userCount = $map['UserCount'];
        }
        if(isset($map['TotalResourceCount'])){
            $model->totalResourceCount = $map['TotalResourceCount'];
        }
        if(isset($map['TotalUserCount'])){
            $model->totalUserCount = $map['TotalUserCount'];
        }
        if(isset($map['TotalResourceGroupCount'])){
            $model->totalResourceGroupCount = $map['TotalResourceGroupCount'];
        }
        return $model;
    }
    /**
     * @description resourceCount
     * @var integer
     */
    public $resourceCount;

    /**
     * @description resourceGroupCount
     * @var integer
     */
    public $resourceGroupCount;

    /**
     * @description subUnitCount
     * @var integer
     */
    public $subUnitCount;

    /**
     * @description userCount
     * @var integer
     */
    public $userCount;

    /**
     * @description totalResourceCount
     * @var integer
     */
    public $totalResourceCount;

    /**
     * @description totalUserCount
     * @var integer
     */
    public $totalUserCount;

    /**
     * @description totalResourceGroupCount
     * @var integer
     */
    public $totalResourceGroupCount;

}
