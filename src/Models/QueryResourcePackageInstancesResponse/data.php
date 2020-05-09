<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\instances;

class data extends Model {
    protected $_name = [
        'hostId' => 'HostId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'instances' => 'Instances',
    ];
    public function validate() {
        Model::validateRequired('hostId', $this->hostId, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('instances', $this->instances, true);
    }
    public function toMap() {
        $res = [];
        $res['HostId'] = $this->hostId;
        $res['PageNum'] = $this->pageNum;
        $res['PageSize'] = $this->pageSize;
        $res['TotalCount'] = $this->totalCount;
        $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
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
        if(isset($map['Instances'])){
            $model->instances = instances::fromMap($map['Instances']);
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
     * @var string
     */
    public $pageNum;

    /**
     * @description pageSize
     * @var string
     */
    public $pageSize;

    /**
     * @description totalCount
     * @var string
     */
    public $totalCount;

    /**
     * @description instances
     * @var data.instances
     */
    public $instances;

}
