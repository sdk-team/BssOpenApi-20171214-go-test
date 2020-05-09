<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryResellerAvailableQuotaRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'itemCodes' => 'ItemCodes',
    ];
    public function validate() {
        Model::validateRequired('ownerId', $this->ownerId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ItemCodes'] = $this->itemCodes;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryResellerAvailableQuotaRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ItemCodes'])){
            $model->itemCodes = $map['ItemCodes'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description itemCodes
     * @var string
     */
    public $itemCodes;

}
