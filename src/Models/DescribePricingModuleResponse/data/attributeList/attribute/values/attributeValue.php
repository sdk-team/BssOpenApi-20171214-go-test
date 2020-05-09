<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data\attributeList\attribute\values;

use AlibabaCloud\Tea\Model;

class attributeValue extends Model {
    protected $_name = [
        'type' => 'Type',
        'name' => 'Name',
        'value' => 'Value',
        'remark' => 'Remark',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('remark', $this->remark, true);
    }
    public function toMap() {
        $res = [];
        $res['Type'] = $this->type;
        $res['Name'] = $this->name;
        $res['Value'] = $this->value;
        $res['Remark'] = $this->remark;
        return $res;
    }
    /**
     * @param array $map
     * @return attributeValue
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['Remark'])){
            $model->remark = $map['Remark'];
        }
        return $model;
    }
    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description value
     * @var string
     */
    public $value;

    /**
     * @description remark
     * @var string
     */
    public $remark;

}
