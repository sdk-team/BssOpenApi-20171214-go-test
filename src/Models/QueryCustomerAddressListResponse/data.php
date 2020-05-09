<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\customerInvoiceAddressList;

class data extends Model {
    protected $_name = [
        'customerInvoiceAddressList' => 'CustomerInvoiceAddressList',
    ];
    public function validate() {
        Model::validateRequired('customerInvoiceAddressList', $this->customerInvoiceAddressList, true);
    }
    public function toMap() {
        $res = [];
        $res['CustomerInvoiceAddressList'] = null !== $this->customerInvoiceAddressList ? $this->customerInvoiceAddressList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CustomerInvoiceAddressList'])){
            $model->customerInvoiceAddressList = customerInvoiceAddressList::fromMap($map['CustomerInvoiceAddressList']);
        }
        return $model;
    }
    /**
     * @description customerInvoiceAddressList
     * @var data.customerInvoiceAddressList
     */
    public $customerInvoiceAddressList;

}
