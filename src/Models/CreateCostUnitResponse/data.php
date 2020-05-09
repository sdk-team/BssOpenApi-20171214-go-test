<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitResponse\data\costUnitDtoList;

class data extends Model {
    protected $_name = [
        'costUnitDtoList' => 'CostUnitDtoList',
    ];
    public function validate() {
        Model::validateRequired('costUnitDtoList', $this->costUnitDtoList, true);
    }
    public function toMap() {
        $res = [];
        $res['CostUnitDtoList'] = [];
        if(null !== $this->costUnitDtoList && is_array($this->costUnitDtoList)){
            $n = 0;
            foreach($this->costUnitDtoList as $item){
                $res['CostUnitDtoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CostUnitDtoList'])){
            if(!empty($map['CostUnitDtoList'])){
                $model->costUnitDtoList = [];
                $n = 0;
                foreach($map['CostUnitDtoList'] as $item) {
                    $model->costUnitDtoList[$n++] = null !== $item ? costUnitDtoList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description costUnitDtoList
     * @var array
     */
    public $costUnitDtoList;

}
