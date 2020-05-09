<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data\attributeList\attribute;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data\attributeList\attribute\values\attributeValue;

class values extends Model {
    protected $_name = [
        'attributeValue' => 'AttributeValue',
    ];
    public function validate() {
        Model::validateRequired('attributeValue', $this->attributeValue, true);
    }
    public function toMap() {
        $res = [];
        $res['AttributeValue'] = [];
        if(null !== $this->attributeValue && is_array($this->attributeValue)){
            $n = 0;
            foreach($this->attributeValue as $item){
                $res['AttributeValue'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return values
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AttributeValue'])){
            if(!empty($map['AttributeValue'])){
                $model->attributeValue = [];
                $n = 0;
                foreach($map['AttributeValue'] as $item) {
                    $model->attributeValue[$n++] = null !== $item ? attributeValue::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AttributeValue
     * @var array
     */
    public $attributeValue;

}
