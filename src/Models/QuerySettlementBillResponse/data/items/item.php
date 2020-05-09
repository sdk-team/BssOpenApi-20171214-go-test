<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettlementBillResponse\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model {
    protected $_name = [
        'recordID' => 'RecordID',
        'item' => 'Item',
        'payerAccount' => 'PayerAccount',
        'ownerID' => 'OwnerID',
        'createTime' => 'CreateTime',
        'usageStartTime' => 'UsageStartTime',
        'usageEndTime' => 'UsageEndTime',
        'suborderID' => 'SuborderID',
        'orderID' => 'OrderID',
        'orderType' => 'OrderType',
        'linkedCustomerOrderID' => 'LinkedCustomerOrderID',
        'originalOrderID' => 'OriginalOrderID',
        'paymentTime' => 'PaymentTime',
        'solutionID' => 'SolutionID',
        'solutionName' => 'SolutionName',
        'billID' => 'BillID',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'region' => 'Region',
        'config' => 'Config',
        'quantity' => 'Quantity',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'chargeDiscount' => 'ChargeDiscount',
        'deductedByCoupons' => 'DeductedByCoupons',
        'accountDiscount' => 'AccountDiscount',
        'promotion' => 'Promotion',
        'pretaxAmount' => 'PretaxAmount',
        'currency' => 'Currency',
        'pretaxAmountLocal' => 'PretaxAmountLocal',
        'previousBillingCycleBalance' => 'PreviousBillingCycleBalance',
        'tax' => 'Tax',
        'afterTaxAmount' => 'AfterTaxAmount',
        'status' => 'Status',
        'clearedTime' => 'ClearedTime',
        'outstandingAmount' => 'OutstandingAmount',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'mybankPaymentAmount' => 'MybankPaymentAmount',
        'paymentAmount' => 'PaymentAmount',
        'paymentCurrency' => 'PaymentCurrency',
        'seller' => 'Seller',
        'invoiceNo' => 'InvoiceNo',
    ];
    public function validate() {
        Model::validateRequired('recordID', $this->recordID, true);
        Model::validateRequired('item', $this->item, true);
        Model::validateRequired('payerAccount', $this->payerAccount, true);
        Model::validateRequired('ownerID', $this->ownerID, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('usageStartTime', $this->usageStartTime, true);
        Model::validateRequired('usageEndTime', $this->usageEndTime, true);
        Model::validateRequired('suborderID', $this->suborderID, true);
        Model::validateRequired('orderID', $this->orderID, true);
        Model::validateRequired('orderType', $this->orderType, true);
        Model::validateRequired('linkedCustomerOrderID', $this->linkedCustomerOrderID, true);
        Model::validateRequired('originalOrderID', $this->originalOrderID, true);
        Model::validateRequired('paymentTime', $this->paymentTime, true);
        Model::validateRequired('solutionID', $this->solutionID, true);
        Model::validateRequired('solutionName', $this->solutionName, true);
        Model::validateRequired('billID', $this->billID, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productType', $this->productType, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('config', $this->config, true);
        Model::validateRequired('quantity', $this->quantity, true);
        Model::validateRequired('pretaxGrossAmount', $this->pretaxGrossAmount, true);
        Model::validateRequired('chargeDiscount', $this->chargeDiscount, true);
        Model::validateRequired('deductedByCoupons', $this->deductedByCoupons, true);
        Model::validateRequired('accountDiscount', $this->accountDiscount, true);
        Model::validateRequired('promotion', $this->promotion, true);
        Model::validateRequired('pretaxAmount', $this->pretaxAmount, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('pretaxAmountLocal', $this->pretaxAmountLocal, true);
        Model::validateRequired('previousBillingCycleBalance', $this->previousBillingCycleBalance, true);
        Model::validateRequired('tax', $this->tax, true);
        Model::validateRequired('afterTaxAmount', $this->afterTaxAmount, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('clearedTime', $this->clearedTime, true);
        Model::validateRequired('outstandingAmount', $this->outstandingAmount, true);
        Model::validateRequired('deductedByCashCoupons', $this->deductedByCashCoupons, true);
        Model::validateRequired('deductedByPrepaidCard', $this->deductedByPrepaidCard, true);
        Model::validateRequired('mybankPaymentAmount', $this->mybankPaymentAmount, true);
        Model::validateRequired('paymentAmount', $this->paymentAmount, true);
        Model::validateRequired('paymentCurrency', $this->paymentCurrency, true);
        Model::validateRequired('seller', $this->seller, true);
        Model::validateRequired('invoiceNo', $this->invoiceNo, true);
    }
    public function toMap() {
        $res = [];
        $res['RecordID'] = $this->recordID;
        $res['Item'] = $this->item;
        $res['PayerAccount'] = $this->payerAccount;
        $res['OwnerID'] = $this->ownerID;
        $res['CreateTime'] = $this->createTime;
        $res['UsageStartTime'] = $this->usageStartTime;
        $res['UsageEndTime'] = $this->usageEndTime;
        $res['SuborderID'] = $this->suborderID;
        $res['OrderID'] = $this->orderID;
        $res['OrderType'] = $this->orderType;
        $res['LinkedCustomerOrderID'] = $this->linkedCustomerOrderID;
        $res['OriginalOrderID'] = $this->originalOrderID;
        $res['PaymentTime'] = $this->paymentTime;
        $res['SolutionID'] = $this->solutionID;
        $res['SolutionName'] = $this->solutionName;
        $res['BillID'] = $this->billID;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['Region'] = $this->region;
        $res['Config'] = $this->config;
        $res['Quantity'] = $this->quantity;
        $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        $res['ChargeDiscount'] = $this->chargeDiscount;
        $res['DeductedByCoupons'] = $this->deductedByCoupons;
        $res['AccountDiscount'] = $this->accountDiscount;
        $res['Promotion'] = $this->promotion;
        $res['PretaxAmount'] = $this->pretaxAmount;
        $res['Currency'] = $this->currency;
        $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        $res['PreviousBillingCycleBalance'] = $this->previousBillingCycleBalance;
        $res['Tax'] = $this->tax;
        $res['AfterTaxAmount'] = $this->afterTaxAmount;
        $res['Status'] = $this->status;
        $res['ClearedTime'] = $this->clearedTime;
        $res['OutstandingAmount'] = $this->outstandingAmount;
        $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        $res['MybankPaymentAmount'] = $this->mybankPaymentAmount;
        $res['PaymentAmount'] = $this->paymentAmount;
        $res['PaymentCurrency'] = $this->paymentCurrency;
        $res['Seller'] = $this->seller;
        $res['InvoiceNo'] = $this->invoiceNo;
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
        if(isset($map['PayerAccount'])){
            $model->payerAccount = $map['PayerAccount'];
        }
        if(isset($map['OwnerID'])){
            $model->ownerID = $map['OwnerID'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['UsageStartTime'])){
            $model->usageStartTime = $map['UsageStartTime'];
        }
        if(isset($map['UsageEndTime'])){
            $model->usageEndTime = $map['UsageEndTime'];
        }
        if(isset($map['SuborderID'])){
            $model->suborderID = $map['SuborderID'];
        }
        if(isset($map['OrderID'])){
            $model->orderID = $map['OrderID'];
        }
        if(isset($map['OrderType'])){
            $model->orderType = $map['OrderType'];
        }
        if(isset($map['LinkedCustomerOrderID'])){
            $model->linkedCustomerOrderID = $map['LinkedCustomerOrderID'];
        }
        if(isset($map['OriginalOrderID'])){
            $model->originalOrderID = $map['OriginalOrderID'];
        }
        if(isset($map['PaymentTime'])){
            $model->paymentTime = $map['PaymentTime'];
        }
        if(isset($map['SolutionID'])){
            $model->solutionID = $map['SolutionID'];
        }
        if(isset($map['SolutionName'])){
            $model->solutionName = $map['SolutionName'];
        }
        if(isset($map['BillID'])){
            $model->billID = $map['BillID'];
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
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['Config'])){
            $model->config = $map['Config'];
        }
        if(isset($map['Quantity'])){
            $model->quantity = $map['Quantity'];
        }
        if(isset($map['PretaxGrossAmount'])){
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if(isset($map['ChargeDiscount'])){
            $model->chargeDiscount = $map['ChargeDiscount'];
        }
        if(isset($map['DeductedByCoupons'])){
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if(isset($map['AccountDiscount'])){
            $model->accountDiscount = $map['AccountDiscount'];
        }
        if(isset($map['Promotion'])){
            $model->promotion = $map['Promotion'];
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
        if(isset($map['PreviousBillingCycleBalance'])){
            $model->previousBillingCycleBalance = $map['PreviousBillingCycleBalance'];
        }
        if(isset($map['Tax'])){
            $model->tax = $map['Tax'];
        }
        if(isset($map['AfterTaxAmount'])){
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['ClearedTime'])){
            $model->clearedTime = $map['ClearedTime'];
        }
        if(isset($map['OutstandingAmount'])){
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if(isset($map['DeductedByCashCoupons'])){
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if(isset($map['DeductedByPrepaidCard'])){
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if(isset($map['MybankPaymentAmount'])){
            $model->mybankPaymentAmount = $map['MybankPaymentAmount'];
        }
        if(isset($map['PaymentAmount'])){
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if(isset($map['PaymentCurrency'])){
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if(isset($map['Seller'])){
            $model->seller = $map['Seller'];
        }
        if(isset($map['InvoiceNo'])){
            $model->invoiceNo = $map['InvoiceNo'];
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
     * @description payerAccount
     * @var string
     */
    public $payerAccount;

    /**
     * @description ownerId
     * @var string
     */
    public $ownerID;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

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
     * @description suborderId
     * @var string
     */
    public $suborderID;

    /**
     * @description orderId
     * @var string
     */
    public $orderID;

    /**
     * @description orderType
     * @var string
     */
    public $orderType;

    /**
     * @description linkedCustomerOrderId
     * @var string
     */
    public $linkedCustomerOrderID;

    /**
     * @description originalOrderId
     * @var string
     */
    public $originalOrderID;

    /**
     * @description paymentTime
     * @var string
     */
    public $paymentTime;

    /**
     * @description solutionId
     * @var string
     */
    public $solutionID;

    /**
     * @description solutionName
     * @var string
     */
    public $solutionName;

    /**
     * @description billId
     * @var string
     */
    public $billID;

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
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description config
     * @var string
     */
    public $config;

    /**
     * @description quantity
     * @var string
     */
    public $quantity;

    /**
     * @description pretaxGrossAmount
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @description chargeDiscount
     * @var float
     */
    public $chargeDiscount;

    /**
     * @description deductedByCoupons
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @description accountDiscount
     * @var float
     */
    public $accountDiscount;

    /**
     * @description promotion
     * @var string
     */
    public $promotion;

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
     * @description previousBillingCycleBalance
     * @var float
     */
    public $previousBillingCycleBalance;

    /**
     * @description tax
     * @var float
     */
    public $tax;

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
     * @description clearedTime
     * @var string
     */
    public $clearedTime;

    /**
     * @description outstandingAmount
     * @var float
     */
    public $outstandingAmount;

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
     * @description mybankPaymentAmount
     * @var float
     */
    public $mybankPaymentAmount;

    /**
     * @description paymentAmount
     * @var float
     */
    public $paymentAmount;

    /**
     * @description paymentCurrency
     * @var string
     */
    public $paymentCurrency;

    /**
     * @description seller
     * @var string
     */
    public $seller;

    /**
     * @description invoiceNo
     * @var string
     */
    public $invoiceNo;

}
