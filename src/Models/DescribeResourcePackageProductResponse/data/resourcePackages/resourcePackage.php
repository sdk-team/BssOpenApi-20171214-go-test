<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\resourcePackage\packageTypes;

class resourcePackage extends Model {
    protected $_name = [
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'name' => 'Name',
        'packageTypes' => 'PackageTypes',
    ];
    public function validate() {
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productType', $this->productType, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('packageTypes', $this->packageTypes, true);
    }
    public function toMap() {
        $res = [];
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['Name'] = $this->name;
        $res['PackageTypes'] = null !== $this->packageTypes ? $this->packageTypes->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return resourcePackage
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ProductCode'])){
            $model->productCode = $map['ProductCode'];
        }
        if(isset($map['ProductType'])){
            $model->productType = $map['ProductType'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['PackageTypes'])){
            $model->packageTypes = packageTypes::fromMap($map['PackageTypes']);
        }
        return $model;
    }
    /**
     * @description productCode
     * @var string
     */
    public $productCode;

    /**
     * @description productType
     * @var string
     */
    public $productType;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description packageTypes
     * @var resourcePackage.packageTypes
     */
    public $packageTypes;

}
