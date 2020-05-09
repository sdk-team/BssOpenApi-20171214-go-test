<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersResponse\data;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersResponse\data\orderList\order;

class orderList extends Model {
    protected $_name = [
        'order' => 'Order',
    ];
    public function validate() {
        Model::validateRequired('order', $this->order, true);
    }
    public function toMap() {
        $res = [];
        $res['Order'] = [];
        if(null !== $this->order && is_array($this->order)){
            $n = 0;
            foreach($this->order as $item){
                $res['Order'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return orderList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Order'])){
            if(!empty($map['Order'])){
                $model->order = [];
                $n = 0;
                foreach($map['Order'] as $item) {
                    $model->order[$n++] = null !== $item ? order::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Order
     * @var array
     */
    public $order;

}
