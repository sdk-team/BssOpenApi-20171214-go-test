<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillResponse\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model {
    protected $_name = [
        'instanceID' => 'InstanceID',
        'billingType' => 'BillingType',
        'costUnit' => 'CostUnit',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'productName' => 'ProductName',
        'productDetail' => 'ProductDetail',
        'ownerID' => 'OwnerID',
        'billingItem' => 'BillingItem',
        'listPrice' => 'ListPrice',
        'listPriceUnit' => 'ListPriceUnit',
        'usage' => 'Usage',
        'usageUnit' => 'UsageUnit',
        'deductedByResourcePackage' => 'DeductedByResourcePackage',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'invoiceDiscount' => 'InvoiceDiscount',
        'deductedByCoupons' => 'DeductedByCoupons',
        'pretaxAmount' => 'PretaxAmount',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'paymentAmount' => 'PaymentAmount',
        'outstandingAmount' => 'OutstandingAmount',
        'currency' => 'Currency',
        'nickName' => 'NickName',
        'resourceGroup' => 'ResourceGroup',
        'tag' => 'Tag',
        'instanceConfig' => 'InstanceConfig',
        'instanceSpec' => 'InstanceSpec',
        'internetIP' => 'InternetIP',
        'intranetIP' => 'IntranetIP',
        'region' => 'Region',
        'zone' => 'Zone',
        'item' => 'Item',
        'servicePeriod' => 'ServicePeriod',
        'billingDate' => 'BillingDate',
    ];
    public function validate() {
        Model::validateRequired('instanceID', $this->instanceID, true);
        Model::validateRequired('billingType', $this->billingType, true);
        Model::validateRequired('costUnit', $this->costUnit, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productType', $this->productType, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('productDetail', $this->productDetail, true);
        Model::validateRequired('ownerID', $this->ownerID, true);
        Model::validateRequired('billingItem', $this->billingItem, true);
        Model::validateRequired('listPrice', $this->listPrice, true);
        Model::validateRequired('listPriceUnit', $this->listPriceUnit, true);
        Model::validateRequired('usage', $this->usage, true);
        Model::validateRequired('usageUnit', $this->usageUnit, true);
        Model::validateRequired('deductedByResourcePackage', $this->deductedByResourcePackage, true);
        Model::validateRequired('pretaxGrossAmount', $this->pretaxGrossAmount, true);
        Model::validateRequired('invoiceDiscount', $this->invoiceDiscount, true);
        Model::validateRequired('deductedByCoupons', $this->deductedByCoupons, true);
        Model::validateRequired('pretaxAmount', $this->pretaxAmount, true);
        Model::validateRequired('deductedByCashCoupons', $this->deductedByCashCoupons, true);
        Model::validateRequired('deductedByPrepaidCard', $this->deductedByPrepaidCard, true);
        Model::validateRequired('paymentAmount', $this->paymentAmount, true);
        Model::validateRequired('outstandingAmount', $this->outstandingAmount, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('nickName', $this->nickName, true);
        Model::validateRequired('resourceGroup', $this->resourceGroup, true);
        Model::validateRequired('tag', $this->tag, true);
        Model::validateRequired('instanceConfig', $this->instanceConfig, true);
        Model::validateRequired('instanceSpec', $this->instanceSpec, true);
        Model::validateRequired('internetIP', $this->internetIP, true);
        Model::validateRequired('intranetIP', $this->intranetIP, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('zone', $this->zone, true);
        Model::validateRequired('item', $this->item, true);
        Model::validateRequired('servicePeriod', $this->servicePeriod, true);
        Model::validateRequired('billingDate', $this->billingDate, true);
    }
    public function toMap() {
        $res = [];
        $res['InstanceID'] = $this->instanceID;
        $res['BillingType'] = $this->billingType;
        $res['CostUnit'] = $this->costUnit;
        $res['ProductCode'] = $this->productCode;
        $res['ProductType'] = $this->productType;
        $res['SubscriptionType'] = $this->subscriptionType;
        $res['ProductName'] = $this->productName;
        $res['ProductDetail'] = $this->productDetail;
        $res['OwnerID'] = $this->ownerID;
        $res['BillingItem'] = $this->billingItem;
        $res['ListPrice'] = $this->listPrice;
        $res['ListPriceUnit'] = $this->listPriceUnit;
        $res['Usage'] = $this->usage;
        $res['UsageUnit'] = $this->usageUnit;
        $res['DeductedByResourcePackage'] = $this->deductedByResourcePackage;
        $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        $res['InvoiceDiscount'] = $this->invoiceDiscount;
        $res['DeductedByCoupons'] = $this->deductedByCoupons;
        $res['PretaxAmount'] = $this->pretaxAmount;
        $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        $res['PaymentAmount'] = $this->paymentAmount;
        $res['OutstandingAmount'] = $this->outstandingAmount;
        $res['Currency'] = $this->currency;
        $res['NickName'] = $this->nickName;
        $res['ResourceGroup'] = $this->resourceGroup;
        $res['Tag'] = $this->tag;
        $res['InstanceConfig'] = $this->instanceConfig;
        $res['InstanceSpec'] = $this->instanceSpec;
        $res['InternetIP'] = $this->internetIP;
        $res['IntranetIP'] = $this->intranetIP;
        $res['Region'] = $this->region;
        $res['Zone'] = $this->zone;
        $res['Item'] = $this->item;
        $res['ServicePeriod'] = $this->servicePeriod;
        $res['BillingDate'] = $this->billingDate;
        return $res;
    }
    /**
     * @param array $map
     * @return item
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InstanceID'])){
            $model->instanceID = $map['InstanceID'];
        }
        if(isset($map['BillingType'])){
            $model->billingType = $map['BillingType'];
        }
        if(isset($map['CostUnit'])){
            $model->costUnit = $map['CostUnit'];
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
        if(isset($map['OwnerID'])){
            $model->ownerID = $map['OwnerID'];
        }
        if(isset($map['BillingItem'])){
            $model->billingItem = $map['BillingItem'];
        }
        if(isset($map['ListPrice'])){
            $model->listPrice = $map['ListPrice'];
        }
        if(isset($map['ListPriceUnit'])){
            $model->listPriceUnit = $map['ListPriceUnit'];
        }
        if(isset($map['Usage'])){
            $model->usage = $map['Usage'];
        }
        if(isset($map['UsageUnit'])){
            $model->usageUnit = $map['UsageUnit'];
        }
        if(isset($map['DeductedByResourcePackage'])){
            $model->deductedByResourcePackage = $map['DeductedByResourcePackage'];
        }
        if(isset($map['PretaxGrossAmount'])){
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if(isset($map['InvoiceDiscount'])){
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if(isset($map['DeductedByCoupons'])){
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if(isset($map['PretaxAmount'])){
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if(isset($map['DeductedByCashCoupons'])){
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if(isset($map['DeductedByPrepaidCard'])){
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if(isset($map['PaymentAmount'])){
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if(isset($map['OutstandingAmount'])){
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if(isset($map['Currency'])){
            $model->currency = $map['Currency'];
        }
        if(isset($map['NickName'])){
            $model->nickName = $map['NickName'];
        }
        if(isset($map['ResourceGroup'])){
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if(isset($map['Tag'])){
            $model->tag = $map['Tag'];
        }
        if(isset($map['InstanceConfig'])){
            $model->instanceConfig = $map['InstanceConfig'];
        }
        if(isset($map['InstanceSpec'])){
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if(isset($map['InternetIP'])){
            $model->internetIP = $map['InternetIP'];
        }
        if(isset($map['IntranetIP'])){
            $model->intranetIP = $map['IntranetIP'];
        }
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['Zone'])){
            $model->zone = $map['Zone'];
        }
        if(isset($map['Item'])){
            $model->item = $map['Item'];
        }
        if(isset($map['ServicePeriod'])){
            $model->servicePeriod = $map['ServicePeriod'];
        }
        if(isset($map['BillingDate'])){
            $model->billingDate = $map['BillingDate'];
        }
        return $model;
    }
    /**
     * @description instanceID
     * @var string
     */
    public $instanceID;

    /**
     * @description billingType
     * @var string
     */
    public $billingType;

    /**
     * @description costUnit
     * @var string
     */
    public $costUnit;

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
     * @description ownerID
     * @var string
     */
    public $ownerID;

    /**
     * @description billingItem
     * @var string
     */
    public $billingItem;

    /**
     * @description listPrice
     * @var string
     */
    public $listPrice;

    /**
     * @description listPriceUnit
     * @var string
     */
    public $listPriceUnit;

    /**
     * @description usage
     * @var string
     */
    public $usage;

    /**
     * @description usageUnit
     * @var string
     */
    public $usageUnit;

    /**
     * @description deductedByResourcePackage
     * @var string
     */
    public $deductedByResourcePackage;

    /**
     * @description pretaxGrossAmount
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @description invoiceDiscount
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @description deductedByCoupons
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @description pretaxAmount
     * @var float
     */
    public $pretaxAmount;

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
     * @description paymentAmount
     * @var float
     */
    public $paymentAmount;

    /**
     * @description outstandingAmount
     * @var float
     */
    public $outstandingAmount;

    /**
     * @description currency
     * @var string
     */
    public $currency;

    /**
     * @description nickName
     * @var string
     */
    public $nickName;

    /**
     * @description resourceGroup
     * @var string
     */
    public $resourceGroup;

    /**
     * @description tag
     * @var string
     */
    public $tag;

    /**
     * @description instanceConfig
     * @var string
     */
    public $instanceConfig;

    /**
     * @description instanceSpec
     * @var string
     */
    public $instanceSpec;

    /**
     * @description internetIP
     * @var string
     */
    public $internetIP;

    /**
     * @description intranetIP
     * @var string
     */
    public $intranetIP;

    /**
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description zone
     * @var string
     */
    public $zone;

    /**
     * @description item
     * @var string
     */
    public $item;

    /**
     * @description servicePeriod
     * @var string
     */
    public $servicePeriod;

    /**
     * @description billingDate
     * @var string
     */
    public $billingDate;

}
