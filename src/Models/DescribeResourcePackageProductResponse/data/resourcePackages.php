<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage;

class resourcePackages extends Model {
    protected $_name = [
        'resourcePackage' => 'ResourcePackage',
    ];
    public function validate() {
        Model::validateRequired('resourcePackage', $this->resourcePackage, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourcePackage'] = [];
        if(null !== $this->resourcePackage && is_array($this->resourcePackage)){
            $n = 0;
            foreach($this->resourcePackage as $item){
                $res['ResourcePackage'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return resourcePackages
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourcePackage'])){
            if(!empty($map['ResourcePackage'])){
                $model->resourcePackage = [];
                $n = 0;
                foreach($map['ResourcePackage'] as $item) {
                    $model->resourcePackage[$n++] = null !== $item ? resourcePackage::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description ResourcePackage
     * @var array
     */
    public $resourcePackage;

}
