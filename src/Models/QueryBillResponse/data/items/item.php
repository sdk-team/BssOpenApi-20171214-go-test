<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillResponse\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model {
    protected $_name = [
        'recordID' => 'RecordID',
        'item' => 'Item',
        'ownerID' => 'OwnerID',
        'usageStartTime' => 'UsageStartTime',
        'usageEndTime' => 'UsageEndTime',
        'paymentTime' => 'PaymentTime',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'productName' => 'ProductName',
        'productDetail' => 'ProductDetail',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'deductedByCoupons' => 'DeductedByCoupons',
        'invoiceDiscount' => 'InvoiceDiscount',
        'pretaxAmount' => 'PretaxAmount',
        'currency' => 'Currency',
        'pretaxAmountLocal' => 'PretaxAmountLocal',
        'tax' => 'Tax',
        'paymentAmount' => 'PaymentAmount',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'outstandingAmount' => 'OutstandingAmount',
        'afterTaxAmount' => 'AfterTaxAmount',
        'status' => 'Status',
        'paymentCurrency' => 'PaymentCurrency',
        'paymentTransactionID' => 'PaymentTransactionID',
        'roundDownDiscount' => 'RoundDownDiscount',
        'subOrderId' => 'SubOrderId',
    ];
    public function validate() {
        Model::validateRequired('recordID', $this->recordID, true);
        Model::validateRequired('item', $this->item, true);
        Model::validateRequired('ownerID', $this->ownerID, true);
        Model::validateRequired('usageStartTime', $this->usageStartTime, true);
        Model::validateRequired('usageEndTime', $this->usageEndTime, true);
        Model::validateRequired('paymentTime', $this->paymentTime, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productType', $this->productType, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('productDetail', $this->productDetail, true);
        Model::validateRequired('pretaxGrossAmount', $this->pretaxGrossAmount, true);
        Model::validateRequired('deductedByCoupons', $this->deductedByCoupons, true);
        Model::validateRequired('invoiceDiscount', $this->invoiceDiscount, true);
        Model::validateRequired('pretaxAmount', $this->pretaxAmount, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('pretaxAmountLocal', $this->pretaxAmountLocal, true);
        Model::validateRequired('tax', $this->tax, true);
        Model::validateRequired('paymentAmount', $this->paymentAmount, true);
        Model::validateRequired('deductedByCashCoupons', $this->deductedByCashCoupons, true);
        Model::validateRequired('deductedByPrepaidCard', $this->deductedByPrepaidCard, true);
        Model::validateRequired('outstandingAmount', $this->outstandingAmount, true);
        Model::validateRequired('afterTaxAmount', $this->afterTaxAmount, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('paymentCurrency', $this->paymentCurrency, true);
        Model::validateRequired('paymentTransactionID', $this->paymentTransactionID, true);
        Model::validateRequired('roundDownDiscount', $this->roundDownDiscount, true);
        Model::validateRequired('subOrderId', $this->subOrderId, true);
    }
    public function toMap() {
        $res = [];
        $res['RecordID'] = $this->recordID;
        $res['Item'] = $this->item;
        $res['OwnerID'] = $this->ownerID;
        $res['UsageStartTime'] = $this->usageStartTime;
        $res['UsageEndTime'] = $this->usageEndTime;
        $res['PaymentTime'] = $this->paymentTime;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['ProductName'] = $this->productName;
        $res['ProductDetail'] = $this->productDetail;
        $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        $res['DeductedByCoupons'] = $this->deductedByCoupons;
        $res['InvoiceDiscount'] = $this->invoiceDiscount;
        $res['PretaxAmount'] = $this->pretaxAmount;
        $res['Currency'] = $this->currency;
        $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        $res['Tax'] = $this->tax;
        $res['PaymentAmount'] = $this->paymentAmount;
        $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        $res['OutstandingAmount'] = $this->outstandingAmount;
        $res['AfterTaxAmount'] = $this->afterTaxAmount;
        $res['Status'] = $this->status;
        $res['PaymentCurrency'] = $this->paymentCurrency;
        $res['PaymentTransactionID'] = $this->paymentTransactionID;
        $res['RoundDownDiscount'] = $this->roundDownDiscount;
        $res['SubOrderId'] = $this->subOrderId;
        return $res;
    }
    /**
     * @param array $map
     * @return item
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RecordID'])){
            $model->recordID = $map['RecordID'];
        }
        if(isset($map['Item'])){
            $model->item = $map['Item'];
        }
        if(isset($map['OwnerID'])){
            $model->ownerID = $map['OwnerID'];
        }
        if(isset($map['UsageStartTime'])){
            $model->usageStartTime = $map['UsageStartTime'];
        }
        if(isset($map['UsageEndTime'])){
            $model->usageEndTime = $map['UsageEndTime'];
        }
        if(isset($map['PaymentTime'])){
            $model->paymentTime = $map['PaymentTime'];
        }
        if(isset($map['ProductCode'])){
            $model->productCode = $map['ProductCode'];
        }
        if(isset($map['ProductType'])){
            $model->productType = $map['ProductType'];
        }
        if(isset($map['SubscriptionType'])){
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if(isset($map['ProductName'])){
            $model->productName = $map['ProductName'];
        }
        if(isset($map['ProductDetail'])){
            $model->productDetail = $map['ProductDetail'];
        }
        if(isset($map['PretaxGrossAmount'])){
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if(isset($map['DeductedByCoupons'])){
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if(isset($map['InvoiceDiscount'])){
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if(isset($map['PretaxAmount'])){
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if(isset($map['Currency'])){
            $model->currency = $map['Currency'];
        }
        if(isset($map['PretaxAmountLocal'])){
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if(isset($map['Tax'])){
            $model->tax = $map['Tax'];
        }
        if(isset($map['PaymentAmount'])){
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if(isset($map['DeductedByCashCoupons'])){
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if(isset($map['DeductedByPrepaidCard'])){
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if(isset($map['OutstandingAmount'])){
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if(isset($map['AfterTaxAmount'])){
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['PaymentCurrency'])){
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if(isset($map['PaymentTransactionID'])){
            $model->paymentTransactionID = $map['PaymentTransactionID'];
        }
        if(isset($map['RoundDownDiscount'])){
            $model->roundDownDiscount = $map['RoundDownDiscount'];
        }
        if(isset($map['SubOrderId'])){
            $model->subOrderId = $map['SubOrderId'];
        }
        return $model;
    }
    /**
     * @description recordId
     * @var string
     */
    public $recordID;

    /**
     * @description item
     * @var string
     */
    public $item;

    /**
     * @description ownerId
     * @var string
     */
    public $ownerID;

    /**
     * @description usageStartTime
     * @var string
     */
    public $usageStartTime;

    /**
     * @description usageEndTime
     * @var string
     */
    public $usageEndTime;

    /**
     * @description paymentTime
     * @var string
     */
    public $paymentTime;

    /**
     * @description productCode
     * @var string
     */
    public $productCode;

    /**
     * @description productType
     * @var string
     */
    public $productType;

    /**
     * @description subscriptionType
     * @var string
     */
    public $subscriptionType;

    /**
     * @description productName
     * @var string
     */
    public $productName;

    /**
     * @description productDetail
     * @var string
     */
    public $productDetail;

    /**
     * @description pretaxGrossAmount
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @description deductedByCoupons
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @description invoiceDiscount
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @description pretaxAmount
     * @var float
     */
    public $pretaxAmount;

    /**
     * @description currency
     * @var string
     */
    public $currency;

    /**
     * @description pretaxAmountLocal
     * @var float
     */
    public $pretaxAmountLocal;

    /**
     * @description tax
     * @var float
     */
    public $tax;

    /**
     * @description paymentAmount
     * @var float
     */
    public $paymentAmount;

    /**
     * @description deductedByCashCoupons
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @description deductedByPrepaidCard
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @description outstandingAmount
     * @var float
     */
    public $outstandingAmount;

    /**
     * @description afterTaxAmount
     * @var float
     */
    public $afterTaxAmount;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description paymentCurrency
     * @var string
     */
    public $paymentCurrency;

    /**
     * @description paymentTransactionID
     * @var string
     */
    public $paymentTransactionID;

    /**
     * @description roundDownDiscount
     * @var string
     */
    public $roundDownDiscount;

    /**
     * @description subOrderId
     * @var string
     */
    public $subOrderId;

}
