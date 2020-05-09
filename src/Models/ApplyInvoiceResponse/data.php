<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ApplyInvoiceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'invoiceApplyId' => 'InvoiceApplyId',
    ];
    public function validate() {
        Model::validateRequired('invoiceApplyId', $this->invoiceApplyId, true);
    }
    public function toMap() {
        $res = [];
        $res['InvoiceApplyId'] = $this->invoiceApplyId;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InvoiceApplyId'])){
            $model->invoiceApplyId = $map['InvoiceApplyId'];
        }
        return $model;
    }
    /**
     * @description invoiceApplyId
     * @var integer
     */
    public $invoiceApplyId;

}
