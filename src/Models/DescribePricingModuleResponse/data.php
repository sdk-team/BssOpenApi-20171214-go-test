<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\moduleList;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\attributeList;

class data extends Model {
    protected $_name = [
        'moduleList' => 'ModuleList',
        'attributeList' => 'AttributeList',
    ];
    public function validate() {
        Model::validateRequired('moduleList', $this->moduleList, true);
        Model::validateRequired('attributeList', $this->attributeList, true);
    }
    public function toMap() {
        $res = [];
        $res['ModuleList'] = null !== $this->moduleList ? $this->moduleList->toMap() : null;
        $res['AttributeList'] = null !== $this->attributeList ? $this->attributeList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ModuleList'])){
            $model->moduleList = moduleList::fromMap($map['ModuleList']);
        }
        if(isset($map['AttributeList'])){
            $model->attributeList = attributeList::fromMap($map['AttributeList']);
        }
        return $model;
    }
    /**
     * @description moduleList
     * @var data.moduleList
     */
    public $moduleList;

    /**
     * @description attributeList
     * @var data.attributeList
     */
    public $attributeList;

}
