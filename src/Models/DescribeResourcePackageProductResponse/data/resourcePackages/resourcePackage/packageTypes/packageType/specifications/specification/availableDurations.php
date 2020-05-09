<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification\availableDurations\availableDuration;

class availableDurations extends Model {
    protected $_name = [
        'availableDuration' => 'AvailableDuration',
    ];
    public function validate() {
        Model::validateRequired('availableDuration', $this->availableDuration, true);
    }
    public function toMap() {
        $res = [];
        $res['AvailableDuration'] = [];
        if(null !== $this->availableDuration && is_array($this->availableDuration)){
            $n = 0;
            foreach($this->availableDuration as $item){
                $res['AvailableDuration'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return availableDurations
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AvailableDuration'])){
            if(!empty($map['AvailableDuration'])){
                $model->availableDuration = [];
                $n = 0;
                foreach($map['AvailableDuration'] as $item) {
                    $model->availableDuration[$n++] = null !== $item ? availableDuration::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AvailableDuration
     * @var array
     */
    public $availableDuration;

}
