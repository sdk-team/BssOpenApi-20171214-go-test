<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponse\data;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponse\data\moduleDetails\moduleDetail;

class moduleDetails extends Model {
    protected $_name = [
        'moduleDetail' => 'ModuleDetail',
    ];
    public function validate() {
        Model::validateRequired('moduleDetail', $this->moduleDetail, true);
    }
    public function toMap() {
        $res = [];
        $res['ModuleDetail'] = [];
        if(null !== $this->moduleDetail && is_array($this->moduleDetail)){
            $n = 0;
            foreach($this->moduleDetail as $item){
                $res['ModuleDetail'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return moduleDetails
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ModuleDetail'])){
            if(!empty($map['ModuleDetail'])){
                $model->moduleDetail = [];
                $n = 0;
                foreach($map['ModuleDetail'] as $item) {
                    $model->moduleDetail[$n++] = null !== $item ? moduleDetail::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description ModuleDetail
     * @var array
     */
    public $moduleDetail;

}
