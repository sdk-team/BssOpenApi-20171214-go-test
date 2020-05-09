<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ApplyInvoiceRequest extends Model {
    protected $_name = [
        'invoiceAmount' => 'InvoiceAmount',
        'ownerId' => 'OwnerId',
        'customerId' => 'CustomerId',
        'addressId' => 'AddressId',
        'invoicingType' => 'InvoicingType',
        'processWay' => 'ProcessWay',
        'applyUserNick' => 'ApplyUserNick',
        'selectedIds' => 'SelectedIds',
        'invoiceByAmount' => 'InvoiceByAmount',
    ];
    public function validate() {
        Model::validateRequired('invoiceAmount', $this->invoiceAmount, true);
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('addressId', $this->addressId, true);
        Model::validateRequired('applyUserNick', $this->applyUserNick, true);
        Model::validateRequired('selectedIds', $this->selectedIds, true);
    }
    public function toMap() {
        $res = [];
        $res['InvoiceAmount'] = $this->invoiceAmount;
        $res['OwnerId'] = $this->ownerId;
        $res['CustomerId'] = $this->customerId;
        $res['AddressId'] = $this->addressId;
        $res['InvoicingType'] = $this->invoicingType;
        $res['ProcessWay'] = $this->processWay;
        $res['ApplyUserNick'] = $this->applyUserNick;
        $res['SelectedIds'] = [];
        if(null !== $this->selectedIds){
            $res['SelectedIds'] = $this->selectedIds;
        }
        $res['InvoiceByAmount'] = $this->invoiceByAmount;
        return $res;
    }
    /**
     * @param array $map
     * @return ApplyInvoiceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InvoiceAmount'])){
            $model->invoiceAmount = $map['InvoiceAmount'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        if(isset($map['AddressId'])){
            $model->addressId = $map['AddressId'];
        }
        if(isset($map['InvoicingType'])){
            $model->invoicingType = $map['InvoicingType'];
        }
        if(isset($map['ProcessWay'])){
            $model->processWay = $map['ProcessWay'];
        }
        if(isset($map['ApplyUserNick'])){
            $model->applyUserNick = $map['ApplyUserNick'];
        }
        if(isset($map['SelectedIds'])){
            if(!empty($map['SelectedIds'])){
                $model->selectedIds = [];
                $model->selectedIds = $map['SelectedIds'];
            }
        }
        if(isset($map['InvoiceByAmount'])){
            $model->invoiceByAmount = $map['InvoiceByAmount'];
        }
        return $model;
    }
    /**
     * @description invoiceAmount
     * @var integer
     */
    public $invoiceAmount;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description customerId
     * @var integer
     */
    public $customerId;

    /**
     * @description addressId
     * @var integer
     */
    public $addressId;

    /**
     * @description invoicingType
     * @var integer
     */
    public $invoicingType;

    /**
     * @description processWay
     * @var integer
     */
    public $processWay;

    /**
     * @description applyUserNick
     * @var string
     */
    public $applyUserNick;

    /**
     * @description selectedIds
     * @var array
     */
    public $selectedIds;

    /**
     * @description invoiceByAmount
     * @var bool
     */
    public $invoiceByAmount;

}
