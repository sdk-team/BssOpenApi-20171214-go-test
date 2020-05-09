<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponse\data;

use AlibabaCloud\Tea\Model;

class resourceInstanceDtoList extends Model {
    protected $_name = [
        'resourceUserId' => 'ResourceUserId',
        'resourceId' => 'ResourceId',
        'commodityCode' => 'CommodityCode',
        'resourceUserName' => 'ResourceUserName',
        'commodityName' => 'CommodityName',
        'resourceGroup' => 'ResourceGroup',
        'resourceTag' => 'ResourceTag',
        'resourceNick' => 'ResourceNick',
        'resourceType' => 'ResourceType',
        'resourceStatus' => 'ResourceStatus',
        'relatedResources' => 'RelatedResources',
        'apportionCode' => 'ApportionCode',
        'apportionName' => 'ApportionName',
    ];
    public function validate() {
        Model::validateRequired('resourceUserId', $this->resourceUserId, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('commodityCode', $this->commodityCode, true);
        Model::validateRequired('resourceUserName', $this->resourceUserName, true);
        Model::validateRequired('commodityName', $this->commodityName, true);
        Model::validateRequired('resourceGroup', $this->resourceGroup, true);
        Model::validateRequired('resourceTag', $this->resourceTag, true);
        Model::validateRequired('resourceNick', $this->resourceNick, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceStatus', $this->resourceStatus, true);
        Model::validateRequired('relatedResources', $this->relatedResources, true);
        Model::validateRequired('apportionCode', $this->apportionCode, true);
        Model::validateRequired('apportionName', $this->apportionName, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceUserId'] = $this->resourceUserId;
        $res['ResourceId'] = $this->resourceId;
        $res['CommodityCode'] = $this->commodityCode;
        $res['ResourceUserName'] = $this->resourceUserName;
        $res['CommodityName'] = $this->commodityName;
        $res['ResourceGroup'] = $this->resourceGroup;
        $res['ResourceTag'] = $this->resourceTag;
        $res['ResourceNick'] = $this->resourceNick;
        $res['ResourceType'] = $this->resourceType;
        $res['ResourceStatus'] = $this->resourceStatus;
        $res['RelatedResources'] = $this->relatedResources;
        $res['ApportionCode'] = $this->apportionCode;
        $res['ApportionName'] = $this->apportionName;
        return $res;
    }
    /**
     * @param array $map
     * @return resourceInstanceDtoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceUserId'])){
            $model->resourceUserId = $map['ResourceUserId'];
        }
        if(isset($map['ResourceId'])){
            $model->resourceId = $map['ResourceId'];
        }
        if(isset($map['CommodityCode'])){
            $model->commodityCode = $map['CommodityCode'];
        }
        if(isset($map['ResourceUserName'])){
            $model->resourceUserName = $map['ResourceUserName'];
        }
        if(isset($map['CommodityName'])){
            $model->commodityName = $map['CommodityName'];
        }
        if(isset($map['ResourceGroup'])){
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if(isset($map['ResourceTag'])){
            $model->resourceTag = $map['ResourceTag'];
        }
        if(isset($map['ResourceNick'])){
            $model->resourceNick = $map['ResourceNick'];
        }
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        if(isset($map['ResourceStatus'])){
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if(isset($map['RelatedResources'])){
            $model->relatedResources = $map['RelatedResources'];
        }
        if(isset($map['ApportionCode'])){
            $model->apportionCode = $map['ApportionCode'];
        }
        if(isset($map['ApportionName'])){
            $model->apportionName = $map['ApportionName'];
        }
        return $model;
    }
    /**
     * @description resourceUserId
     * @var integer
     */
    public $resourceUserId;

    /**
     * @description resourceId
     * @var string
     */
    public $resourceId;

    /**
     * @description commodityCode
     * @var string
     */
    public $commodityCode;

    /**
     * @description resourceUserName
     * @var string
     */
    public $resourceUserName;

    /**
     * @description commodityName
     * @var string
     */
    public $commodityName;

    /**
     * @description resourceGroup
     * @var string
     */
    public $resourceGroup;

    /**
     * @description resourceTag
     * @var string
     */
    public $resourceTag;

    /**
     * @description resourceNick
     * @var string
     */
    public $resourceNick;

    /**
     * @description resourceType
     * @var string
     */
    public $resourceType;

    /**
     * @description resourceStatus
     * @var string
     */
    public $resourceStatus;

    /**
     * @description relatedResources
     * @var string
     */
    public $relatedResources;

    /**
     * @description apportionCode
     * @var string
     */
    public $apportionCode;

    /**
     * @description apportionName
     * @var string
     */
    public $apportionName;

}
