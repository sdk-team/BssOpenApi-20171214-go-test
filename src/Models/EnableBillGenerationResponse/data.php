<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'boolean' => 'Boolean',
    ];
    public function validate() {
        Model::validateRequired('boolean', $this->boolean, true);
    }
    public function toMap() {
        $res = [];
        $res['Boolean'] = $this->boolean;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Boolean'])){
            $model->boolean = $map['Boolean'];
        }
        return $model;
    }
    /**
     * @description isSuccess
     * @var bool
     */
    public $boolean;

}
