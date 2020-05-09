<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification\availableDurations;

use AlibabaCloud\Tea\Model;

class availableDuration extends Model {
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
        'unit' => 'Unit',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('unit', $this->unit, true);
    }
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        $res['Value'] = $this->value;
        $res['Unit'] = $this->unit;
        return $res;
    }
    /**
     * @param array $map
     * @return availableDuration
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['Unit'])){
            $model->unit = $map['Unit'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description value
     * @var integer
     */
    public $value;

    /**
     * @description unit
     * @var string
     */
    public $unit;

}
