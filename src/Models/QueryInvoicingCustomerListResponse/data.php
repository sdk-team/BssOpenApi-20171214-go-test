<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\customerInvoiceList;

class data extends Model {
    protected $_name = [
        'customerInvoiceList' => 'CustomerInvoiceList',
    ];
    public function validate() {
        Model::validateRequired('customerInvoiceList', $this->customerInvoiceList, true);
    }
    public function toMap() {
        $res = [];
        $res['CustomerInvoiceList'] = null !== $this->customerInvoiceList ? $this->customerInvoiceList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CustomerInvoiceList'])){
            $model->customerInvoiceList = customerInvoiceList::fromMap($map['CustomerInvoiceList']);
        }
        return $model;
    }
    /**
     * @description customerInvoiceList
     * @var data.customerInvoiceList
     */
    public $customerInvoiceList;

}
