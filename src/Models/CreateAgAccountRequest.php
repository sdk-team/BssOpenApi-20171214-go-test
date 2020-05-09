<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class CreateAgAccountRequest extends Model {
    protected $_name = [
        'loginEmail' => 'LoginEmail',
        'accountAttr' => 'AccountAttr',
        'enterpriseName' => 'EnterpriseName',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'nationCode' => 'NationCode',
        'provinceName' => 'ProvinceName',
        'cityName' => 'CityName',
        'postcode' => 'Postcode',
    ];
    public function validate() {
        Model::validateRequired('loginEmail', $this->loginEmail, true);
    }
    public function toMap() {
        $res = [];
        $res['LoginEmail'] = $this->loginEmail;
        $res['AccountAttr'] = $this->accountAttr;
        $res['EnterpriseName'] = $this->enterpriseName;
        $res['FirstName'] = $this->firstName;
        $res['LastName'] = $this->lastName;
        $res['NationCode'] = $this->nationCode;
        $res['ProvinceName'] = $this->provinceName;
        $res['CityName'] = $this->cityName;
        $res['Postcode'] = $this->postcode;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateAgAccountRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LoginEmail'])){
            $model->loginEmail = $map['LoginEmail'];
        }
        if(isset($map['AccountAttr'])){
            $model->accountAttr = $map['AccountAttr'];
        }
        if(isset($map['EnterpriseName'])){
            $model->enterpriseName = $map['EnterpriseName'];
        }
        if(isset($map['FirstName'])){
            $model->firstName = $map['FirstName'];
        }
        if(isset($map['LastName'])){
            $model->lastName = $map['LastName'];
        }
        if(isset($map['NationCode'])){
            $model->nationCode = $map['NationCode'];
        }
        if(isset($map['ProvinceName'])){
            $model->provinceName = $map['ProvinceName'];
        }
        if(isset($map['CityName'])){
            $model->cityName = $map['CityName'];
        }
        if(isset($map['Postcode'])){
            $model->postcode = $map['Postcode'];
        }
        return $model;
    }
    /**
     * @description loginEmail
     * @var string
     */
    public $loginEmail;

    /**
     * @description accountAttr
     * @var string
     */
    public $accountAttr;

    /**
     * @description enterpriseName
     * @var string
     */
    public $enterpriseName;

    /**
     * @description firstName
     * @var string
     */
    public $firstName;

    /**
     * @description lastName
     * @var string
     */
    public $lastName;

    /**
     * @description nationCode
     * @var string
     */
    public $nationCode;

    /**
     * @description provinceName
     * @var string
     */
    public $provinceName;

    /**
     * @description cityName
     * @var string
     */
    public $cityName;

    /**
     * @description postcode
     * @var string
     */
    public $postcode;

}
