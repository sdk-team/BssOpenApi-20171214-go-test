<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillOverviewResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\data\items;

class data extends Model {
    protected $_name = [
        'billingCycle' => 'BillingCycle',
        'accountID' => 'AccountID',
        'accountName' => 'AccountName',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('billingCycle', $this->billingCycle, true);
        Model::validateRequired('accountID', $this->accountID, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['BillingCycle'] = $this->billingCycle;
        $res['AccountID'] = $this->accountID;
        $res['AccountName'] = $this->accountName;
        $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['BillingCycle'])){
            $model->billingCycle = $map['BillingCycle'];
        }
        if(isset($map['AccountID'])){
            $model->accountID = $map['AccountID'];
        }
        if(isset($map['AccountName'])){
            $model->accountName = $map['AccountName'];
        }
        if(isset($map['Items'])){
            $model->items = items::fromMap($map['Items']);
        }
        return $model;
    }
    /**
     * @description billingCycle
     * @var string
     */
    public $billingCycle;

    /**
     * @description accountID
     * @var string
     */
    public $accountID;

    /**
     * @description accountName
     * @var string
     */
    public $accountName;

    /**
     * @description items
     * @var data.items
     */
    public $items;

}
