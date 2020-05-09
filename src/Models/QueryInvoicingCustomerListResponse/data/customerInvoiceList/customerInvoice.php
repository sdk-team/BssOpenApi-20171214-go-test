<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponse\data\customerInvoiceList;

use AlibabaCloud\Tea\Model;

class customerInvoice extends Model {
    protected $_name = [
        'id' => 'Id',
        'userId' => 'UserId',
        'userNick' => 'UserNick',
        'invoiceTitle' => 'InvoiceTitle',
        'customerType' => 'CustomerType',
        'taxpayerType' => 'TaxpayerType',
        'bank' => 'Bank',
        'bankNo' => 'BankNo',
        'operatingLicenseAddress' => 'OperatingLicenseAddress',
        'operatingLicensePhone' => 'OperatingLicensePhone',
        'registerNo' => 'RegisterNo',
        'startCycle' => 'StartCycle',
        'status' => 'Status',
        'gmtCreate' => 'GmtCreate',
        'taxationLicense' => 'TaxationLicense',
        'adjustType' => 'AdjustType',
        'endCycle' => 'EndCycle',
        'titleChangeInstructions' => 'TitleChangeInstructions',
        'issueType' => 'IssueType',
        'type' => 'Type',
        'defaultRemark' => 'DefaultRemark',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('userNick', $this->userNick, true);
        Model::validateRequired('invoiceTitle', $this->invoiceTitle, true);
        Model::validateRequired('customerType', $this->customerType, true);
        Model::validateRequired('taxpayerType', $this->taxpayerType, true);
        Model::validateRequired('bank', $this->bank, true);
        Model::validateRequired('bankNo', $this->bankNo, true);
        Model::validateRequired('operatingLicenseAddress', $this->operatingLicenseAddress, true);
        Model::validateRequired('operatingLicensePhone', $this->operatingLicensePhone, true);
        Model::validateRequired('registerNo', $this->registerNo, true);
        Model::validateRequired('startCycle', $this->startCycle, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('taxationLicense', $this->taxationLicense, true);
        Model::validateRequired('adjustType', $this->adjustType, true);
        Model::validateRequired('endCycle', $this->endCycle, true);
        Model::validateRequired('titleChangeInstructions', $this->titleChangeInstructions, true);
        Model::validateRequired('issueType', $this->issueType, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('defaultRemark', $this->defaultRemark, true);
    }
    public function toMap() {
        $res = [];
        $res['Id'] = $this->id;
        $res['UserId'] = $this->userId;
        $res['UserNick'] = $this->userNick;
        $res['InvoiceTitle'] = $this->invoiceTitle;
        $res['CustomerType'] = $this->customerType;
        $res['TaxpayerType'] = $this->taxpayerType;
        $res['Bank'] = $this->bank;
        $res['BankNo'] = $this->bankNo;
        $res['OperatingLicenseAddress'] = $this->operatingLicenseAddress;
        $res['OperatingLicensePhone'] = $this->operatingLicensePhone;
        $res['RegisterNo'] = $this->registerNo;
        $res['StartCycle'] = $this->startCycle;
        $res['Status'] = $this->status;
        $res['GmtCreate'] = $this->gmtCreate;
        $res['TaxationLicense'] = $this->taxationLicense;
        $res['AdjustType'] = $this->adjustType;
        $res['EndCycle'] = $this->endCycle;
        $res['TitleChangeInstructions'] = $this->titleChangeInstructions;
        $res['IssueType'] = $this->issueType;
        $res['Type'] = $this->type;
        $res['DefaultRemark'] = $this->defaultRemark;
        return $res;
    }
    /**
     * @param array $map
     * @return customerInvoice
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['UserId'])){
            $model->userId = $map['UserId'];
        }
        if(isset($map['UserNick'])){
            $model->userNick = $map['UserNick'];
        }
        if(isset($map['InvoiceTitle'])){
            $model->invoiceTitle = $map['InvoiceTitle'];
        }
        if(isset($map['CustomerType'])){
            $model->customerType = $map['CustomerType'];
        }
        if(isset($map['TaxpayerType'])){
            $model->taxpayerType = $map['TaxpayerType'];
        }
        if(isset($map['Bank'])){
            $model->bank = $map['Bank'];
        }
        if(isset($map['BankNo'])){
            $model->bankNo = $map['BankNo'];
        }
        if(isset($map['OperatingLicenseAddress'])){
            $model->operatingLicenseAddress = $map['OperatingLicenseAddress'];
        }
        if(isset($map['OperatingLicensePhone'])){
            $model->operatingLicensePhone = $map['OperatingLicensePhone'];
        }
        if(isset($map['RegisterNo'])){
            $model->registerNo = $map['RegisterNo'];
        }
        if(isset($map['StartCycle'])){
            $model->startCycle = $map['StartCycle'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['GmtCreate'])){
            $model->gmtCreate = $map['GmtCreate'];
        }
        if(isset($map['TaxationLicense'])){
            $model->taxationLicense = $map['TaxationLicense'];
        }
        if(isset($map['AdjustType'])){
            $model->adjustType = $map['AdjustType'];
        }
        if(isset($map['EndCycle'])){
            $model->endCycle = $map['EndCycle'];
        }
        if(isset($map['TitleChangeInstructions'])){
            $model->titleChangeInstructions = $map['TitleChangeInstructions'];
        }
        if(isset($map['IssueType'])){
            $model->issueType = $map['IssueType'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['DefaultRemark'])){
            $model->defaultRemark = $map['DefaultRemark'];
        }
        return $model;
    }
    /**
     * @description id
     * @var integer
     */
    public $id;

    /**
     * @description userId
     * @var integer
     */
    public $userId;

    /**
     * @description userNick
     * @var string
     */
    public $userNick;

    /**
     * @description invoiceTitle
     * @var string
     */
    public $invoiceTitle;

    /**
     * @description customerType
     * @var integer
     */
    public $customerType;

    /**
     * @description taxpayerType
     * @var integer
     */
    public $taxpayerType;

    /**
     * @description bank
     * @var string
     */
    public $bank;

    /**
     * @description bankNo
     * @var string
     */
    public $bankNo;

    /**
     * @description operatingLicenseAddress
     * @var string
     */
    public $operatingLicenseAddress;

    /**
     * @description operatingLicensePhone
     * @var string
     */
    public $operatingLicensePhone;

    /**
     * @description registerNo
     * @var string
     */
    public $registerNo;

    /**
     * @description startCycle
     * @var integer
     */
    public $startCycle;

    /**
     * @description status
     * @var integer
     */
    public $status;

    /**
     * @description gmtCreate
     * @var string
     */
    public $gmtCreate;

    /**
     * @description taxationLicense
     * @var string
     */
    public $taxationLicense;

    /**
     * @description adjustType
     * @var integer
     */
    public $adjustType;

    /**
     * @description endCycle
     * @var integer
     */
    public $endCycle;

    /**
     * @description titleChangeInstructions
     * @var string
     */
    public $titleChangeInstructions;

    /**
     * @description issueType
     * @var integer
     */
    public $issueType;

    /**
     * @description type
     * @var integer
     */
    public $type;

    /**
     * @description defaultRemark
     * @var string
     */
    public $defaultRemark;

}
