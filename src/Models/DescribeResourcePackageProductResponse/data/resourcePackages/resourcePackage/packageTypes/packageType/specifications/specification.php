<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\specification\availableDurations;

class specification extends Model {
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
        'availableDurations' => 'AvailableDurations',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('availableDurations', $this->availableDurations, true);
    }
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        $res['Value'] = $this->value;
        $res['AvailableDurations'] = null !== $this->availableDurations ? $this->availableDurations->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return specification
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['AvailableDurations'])){
            $model->availableDurations = availableDurations::fromMap($map['AvailableDurations']);
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
     * @var string
     */
    public $value;

    /**
     * @description availableDurations
     * @var specification.availableDurations
     */
    public $availableDurations;

}
