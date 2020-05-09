<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponse\data;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponse\data\customerInvoiceList\customerInvoice;

class customerInvoiceList extends Model {
    protected $_name = [
        'customerInvoice' => 'CustomerInvoice',
    ];
    public function validate() {
        Model::validateRequired('customerInvoice', $this->customerInvoice, true);
    }
    public function toMap() {
        $res = [];
        $res['CustomerInvoice'] = [];
        if(null !== $this->customerInvoice && is_array($this->customerInvoice)){
            $n = 0;
            foreach($this->customerInvoice as $item){
                $res['CustomerInvoice'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return customerInvoiceList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CustomerInvoice'])){
            if(!empty($map['CustomerInvoice'])){
                $model->customerInvoice = [];
                $n = 0;
                foreach($map['CustomerInvoice'] as $item) {
                    $model->customerInvoice[$n++] = null !== $item ? customerInvoice::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description CustomerInvoice
     * @var array
     */
    public $customerInvoice;

}
