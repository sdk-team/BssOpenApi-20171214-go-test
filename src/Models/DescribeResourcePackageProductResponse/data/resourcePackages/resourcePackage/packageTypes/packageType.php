<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\packageType\properties;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\packageType\specifications;

class packageType extends Model {
    protected $_name = [
        'name' => 'Name',
        'code' => 'Code',
        'properties' => 'Properties',
        'specifications' => 'Specifications',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('properties', $this->properties, true);
        Model::validateRequired('specifications', $this->specifications, true);
    }
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        $res['Code'] = $this->code;
        $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        $res['Specifications'] = null !== $this->specifications ? $this->specifications->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return packageType
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['Properties'])){
            $model->properties = properties::fromMap($map['Properties']);
        }
        if(isset($map['Specifications'])){
            $model->specifications = specifications::fromMap($map['Specifications']);
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description code
     * @var string
     */
    public $code;

    /**
     * @description properties
     * @var packageType.properties
     */
    public $properties;

    /**
     * @description specifications
     * @var packageType.specifications
     */
    public $specifications;

}
