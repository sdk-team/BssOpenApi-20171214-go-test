<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponse\data\customerInvoiceAddressList;

use AlibabaCloud\Tea\Model;

class customerInvoiceAddress extends Model {
    protected $_name = [
        'id' => 'Id',
        'userId' => 'UserId',
        'userNick' => 'UserNick',
        'addressee' => 'Addressee',
        'province' => 'Province',
        'city' => 'City',
        'county' => 'County',
        'street' => 'Street',
        'postalCode' => 'PostalCode',
        'phone' => 'Phone',
        'bizType' => 'BizType',
        'deliveryAddress' => 'DeliveryAddress',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('userNick', $this->userNick, true);
        Model::validateRequired('addressee', $this->addressee, true);
        Model::validateRequired('province', $this->province, true);
        Model::validateRequired('city', $this->city, true);
        Model::validateRequired('county', $this->county, true);
        Model::validateRequired('street', $this->street, true);
        Model::validateRequired('postalCode', $this->postalCode, true);
        Model::validateRequired('phone', $this->phone, true);
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('deliveryAddress', $this->deliveryAddress, true);
    }
    public function toMap() {
        $res = [];
        $res['Id'] = $this->id;
        $res['UserId'] = $this->userId;
        $res['UserNick'] = $this->userNick;
        $res['Addressee'] = $this->addressee;
        $res['Province'] = $this->province;
        $res['City'] = $this->city;
        $res['County'] = $this->county;
        $res['Street'] = $this->street;
        $res['PostalCode'] = $this->postalCode;
        $res['Phone'] = $this->phone;
        $res['BizType'] = $this->bizType;
        $res['DeliveryAddress'] = $this->deliveryAddress;
        return $res;
    }
    /**
     * @param array $map
     * @return customerInvoiceAddress
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
        if(isset($map['Addressee'])){
            $model->addressee = $map['Addressee'];
        }
        if(isset($map['Province'])){
            $model->province = $map['Province'];
        }
        if(isset($map['City'])){
            $model->city = $map['City'];
        }
        if(isset($map['County'])){
            $model->county = $map['County'];
        }
        if(isset($map['Street'])){
            $model->street = $map['Street'];
        }
        if(isset($map['PostalCode'])){
            $model->postalCode = $map['PostalCode'];
        }
        if(isset($map['Phone'])){
            $model->phone = $map['Phone'];
        }
        if(isset($map['BizType'])){
            $model->bizType = $map['BizType'];
        }
        if(isset($map['DeliveryAddress'])){
            $model->deliveryAddress = $map['DeliveryAddress'];
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
     * @description addressee
     * @var string
     */
    public $addressee;

    /**
     * @description province
     * @var string
     */
    public $province;

    /**
     * @description city
     * @var string
     */
    public $city;

    /**
     * @description county
     * @var string
     */
    public $county;

    /**
     * @description street
     * @var string
     */
    public $street;

    /**
     * @description postalCode
     * @var string
     */
    public $postalCode;

    /**
     * @description phone
     * @var string
     */
    public $phone;

    /**
     * @description bizType
     * @var string
     */
    public $bizType;

    /**
     * @description deliveryAddress
     * @var string
     */
    public $deliveryAddress;

}
