<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponse\data;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponse\data\customerInvoiceAddressList\customerInvoiceAddress;

class customerInvoiceAddressList extends Model {
    protected $_name = [
        'customerInvoiceAddress' => 'CustomerInvoiceAddress',
    ];
    public function validate() {
        Model::validateRequired('customerInvoiceAddress', $this->customerInvoiceAddress, true);
    }
    public function toMap() {
        $res = [];
        $res['CustomerInvoiceAddress'] = [];
        if(null !== $this->customerInvoiceAddress && is_array($this->customerInvoiceAddress)){
            $n = 0;
            foreach($this->customerInvoiceAddress as $item){
                $res['CustomerInvoiceAddress'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return customerInvoiceAddressList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CustomerInvoiceAddress'])){
            if(!empty($map['CustomerInvoiceAddress'])){
                $model->customerInvoiceAddress = [];
                $n = 0;
                foreach($map['CustomerInvoiceAddress'] as $item) {
                    $model->customerInvoiceAddress[$n++] = null !== $item ? customerInvoiceAddress::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description CustomerInvoiceAddress
     * @var array
     */
    public $customerInvoiceAddress;

}
