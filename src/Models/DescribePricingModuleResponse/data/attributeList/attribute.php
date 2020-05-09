<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data\attributeList;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\attribute\values;

class attribute extends Model {
    protected $_name = [
        'code' => 'Code',
        'name' => 'Name',
        'unit' => 'Unit',
        'values' => 'Values',
    ];
    public function validate() {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('unit', $this->unit, true);
        Model::validateRequired('values', $this->values, true);
    }
    public function toMap() {
        $res = [];
        $res['Code'] = $this->code;
        $res['Name'] = $this->name;
        $res['Unit'] = $this->unit;
        $res['Values'] = null !== $this->values ? $this->values->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return attribute
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Unit'])){
            $model->unit = $map['Unit'];
        }
        if(isset($map['Values'])){
            $model->values = values::fromMap($map['Values']);
        }
        return $model;
    }
    /**
     * @description code
     * @var string
     */
    public $code;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description unit
     * @var string
     */
    public $unit;

    /**
     * @description values
     * @var attribute.values
     */
    public $values;

}
