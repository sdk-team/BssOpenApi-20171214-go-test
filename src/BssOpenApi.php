<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214;

use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DeleteCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DeleteCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewResourcePackageResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UpgradeResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UpgradeResourcePackageResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ChangeResellerConsumeAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ChangeResellerConsumeAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserStatusRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserStatusResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResellerUserQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResellerUserQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerAvailableQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerAvailableQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserAlarmThresholdRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserAlarmThresholdResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UnsubscribeBillToOSSRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UnsubscribeBillToOSSResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SubscribeBillToOSSRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SubscribeBillToOSSResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CancelOrderRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CancelOrderResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ApplyInvoiceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ApplyInvoiceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillOverviewRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillOverviewResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ConvertChargeTypeRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ConvertChargeTypeResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyInstanceConsumptionRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyInstanceConsumptionResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettlementBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettlementBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetRenewalRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetRenewalResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResourcePackageResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse;

class BssOpenApi extends Rpc {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "regional";
        $this->_endpointMap = [
            "ap-northeast-1" => "business.ap-southeast-1.aliyuncs.com",
            "ap-northeast-2-pop" => "business.ap-southeast-1.aliyuncs.com",
            "ap-south-1" => "business.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "business.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "business.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "business.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "business.ap-southeast-1.aliyuncs.com",
            "cn-beijing" => "business.aliyuncs.com",
            "cn-beijing-finance-1" => "business.aliyuncs.com",
            "cn-beijing-finance-pop" => "business.aliyuncs.com",
            "cn-beijing-gov-1" => "business.aliyuncs.com",
            "cn-beijing-nu16-b01" => "business.aliyuncs.com",
            "cn-chengdu" => "business.aliyuncs.com",
            "cn-edge-1" => "business.aliyuncs.com",
            "cn-fujian" => "business.aliyuncs.com",
            "cn-haidian-cm12-c01" => "business.aliyuncs.com",
            "cn-hangzhou" => "business.aliyuncs.com",
            "cn-hangzhou-bj-b01" => "business.aliyuncs.com",
            "cn-hangzhou-finance" => "business.aliyuncs.com",
            "cn-hangzhou-internal-prod-1" => "business.aliyuncs.com",
            "cn-hangzhou-internal-test-1" => "business.aliyuncs.com",
            "cn-hangzhou-internal-test-2" => "business.aliyuncs.com",
            "cn-hangzhou-internal-test-3" => "business.aliyuncs.com",
            "cn-hangzhou-test-306" => "business.aliyuncs.com",
            "cn-hongkong" => "business.aliyuncs.com",
            "cn-hongkong-finance-pop" => "business.aliyuncs.com",
            "cn-huhehaote" => "business.aliyuncs.com",
            "cn-north-2-gov-1" => "business.aliyuncs.com",
            "cn-qingdao" => "business.aliyuncs.com",
            "cn-qingdao-nebula" => "business.aliyuncs.com",
            "cn-shanghai" => "business.aliyuncs.com",
            "cn-shanghai-et15-b01" => "business.aliyuncs.com",
            "cn-shanghai-et2-b01" => "business.aliyuncs.com",
            "cn-shanghai-finance-1" => "business.aliyuncs.com",
            "cn-shanghai-inner" => "business.aliyuncs.com",
            "cn-shanghai-internal-test-1" => "business.aliyuncs.com",
            "cn-shenzhen" => "business.aliyuncs.com",
            "cn-shenzhen-finance-1" => "business.aliyuncs.com",
            "cn-shenzhen-inner" => "business.aliyuncs.com",
            "cn-shenzhen-st4-d01" => "business.aliyuncs.com",
            "cn-shenzhen-su18-b01" => "business.aliyuncs.com",
            "cn-wuhan" => "business.aliyuncs.com",
            "cn-yushanfang" => "business.aliyuncs.com",
            "cn-zhangbei-na61-b01" => "business.aliyuncs.com",
            "cn-zhangjiakou" => "business.aliyuncs.com",
            "cn-zhangjiakou-na62-a01" => "business.aliyuncs.com",
            "cn-zhengzhou-nebula-1" => "business.aliyuncs.com",
            "eu-central-1" => "business.ap-southeast-1.aliyuncs.com",
            "eu-west-1" => "business.ap-southeast-1.aliyuncs.com",
            "eu-west-1-oxs" => "business.ap-southeast-1.aliyuncs.com",
            "me-east-1" => "business.ap-southeast-1.aliyuncs.com",
            "rus-west-1-pop" => "business.ap-southeast-1.aliyuncs.com",
            "us-east-1" => "business.ap-southeast-1.aliyuncs.com",
            "us-west-1" => "business.ap-southeast-1.aliyuncs.com"
            ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param QueryRIUtilizationDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRIUtilizationDetailResponse
     * @throws \Exception
     */
    public function queryRIUtilizationDetailEx(QueryRIUtilizationDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRIUtilizationDetailResponse::fromMap($this->doRequest("QueryRIUtilizationDetail", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryRIUtilizationDetailRequest $request
     * @return QueryRIUtilizationDetailResponse
     * @throws \Exception
     */
    public function queryRIUtilizationDetail(QueryRIUtilizationDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRIUtilizationDetailEx($request, $runtime);
    }

    /**
     * @param QueryBillToOSSSubscriptionRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryBillToOSSSubscriptionResponse
     * @throws \Exception
     */
    public function queryBillToOSSSubscriptionEx(QueryBillToOSSSubscriptionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryBillToOSSSubscriptionResponse::fromMap($this->doRequest("QueryBillToOSSSubscription", "HTTPS", "POST", "2017-12-14", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryBillToOSSSubscriptionRequest $request
     * @return QueryBillToOSSSubscriptionResponse
     * @throws \Exception
     */
    public function queryBillToOSSSubscription(QueryBillToOSSSubscriptionRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryBillToOSSSubscriptionEx($request, $runtime);
    }

    /**
     * @param QueryAccountBillRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryAccountBillResponse
     * @throws \Exception
     */
    public function queryAccountBillEx(QueryAccountBillRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryAccountBillResponse::fromMap($this->doRequest("QueryAccountBill", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryAccountBillRequest $request
     * @return QueryAccountBillResponse
     * @throws \Exception
     */
    public function queryAccountBill(QueryAccountBillRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryAccountBillEx($request, $runtime);
    }

    /**
     * @param CreateCostUnitRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateCostUnitResponse
     * @throws \Exception
     */
    public function createCostUnitEx(CreateCostUnitRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateCostUnitResponse::fromMap($this->doRequest("CreateCostUnit", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateCostUnitRequest $request
     * @return CreateCostUnitResponse
     * @throws \Exception
     */
    public function createCostUnit(CreateCostUnitRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createCostUnitEx($request, $runtime);
    }

    /**
     * @param ModifyCostUnitRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyCostUnitResponse
     * @throws \Exception
     */
    public function modifyCostUnitEx(ModifyCostUnitRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyCostUnitResponse::fromMap($this->doRequest("ModifyCostUnit", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ModifyCostUnitRequest $request
     * @return ModifyCostUnitResponse
     * @throws \Exception
     */
    public function modifyCostUnit(ModifyCostUnitRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyCostUnitEx($request, $runtime);
    }

    /**
     * @param QueryCostUnitRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryCostUnitResponse
     * @throws \Exception
     */
    public function queryCostUnitEx(QueryCostUnitRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryCostUnitResponse::fromMap($this->doRequest("QueryCostUnit", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryCostUnitRequest $request
     * @return QueryCostUnitResponse
     * @throws \Exception
     */
    public function queryCostUnit(QueryCostUnitRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryCostUnitEx($request, $runtime);
    }

    /**
     * @param DeleteCostUnitRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteCostUnitResponse
     * @throws \Exception
     */
    public function deleteCostUnitEx(DeleteCostUnitRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteCostUnitResponse::fromMap($this->doRequest("DeleteCostUnit", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteCostUnitRequest $request
     * @return DeleteCostUnitResponse
     * @throws \Exception
     */
    public function deleteCostUnit(DeleteCostUnitRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteCostUnitEx($request, $runtime);
    }

    /**
     * @param AllocateCostUnitResourceRequest $request
     * @param RuntimeOptions $runtime
     * @return AllocateCostUnitResourceResponse
     * @throws \Exception
     */
    public function allocateCostUnitResourceEx(AllocateCostUnitResourceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AllocateCostUnitResourceResponse::fromMap($this->doRequest("AllocateCostUnitResource", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AllocateCostUnitResourceRequest $request
     * @return AllocateCostUnitResourceResponse
     * @throws \Exception
     */
    public function allocateCostUnitResource(AllocateCostUnitResourceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->allocateCostUnitResourceEx($request, $runtime);
    }

    /**
     * @param QueryCostUnitResourceRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryCostUnitResourceResponse
     * @throws \Exception
     */
    public function queryCostUnitResourceEx(QueryCostUnitResourceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryCostUnitResourceResponse::fromMap($this->doRequest("QueryCostUnitResource", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryCostUnitResourceRequest $request
     * @return QueryCostUnitResourceResponse
     * @throws \Exception
     */
    public function queryCostUnitResource(QueryCostUnitResourceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryCostUnitResourceEx($request, $runtime);
    }

    /**
     * @param RenewResourcePackageRequest $request
     * @param RuntimeOptions $runtime
     * @return RenewResourcePackageResponse
     * @throws \Exception
     */
    public function renewResourcePackageEx(RenewResourcePackageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RenewResourcePackageResponse::fromMap($this->doRequest("RenewResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param RenewResourcePackageRequest $request
     * @return RenewResourcePackageResponse
     * @throws \Exception
     */
    public function renewResourcePackage(RenewResourcePackageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->renewResourcePackageEx($request, $runtime);
    }

    /**
     * @param UpgradeResourcePackageRequest $request
     * @param RuntimeOptions $runtime
     * @return UpgradeResourcePackageResponse
     * @throws \Exception
     */
    public function upgradeResourcePackageEx(UpgradeResourcePackageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpgradeResourcePackageResponse::fromMap($this->doRequest("UpgradeResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpgradeResourcePackageRequest $request
     * @return UpgradeResourcePackageResponse
     * @throws \Exception
     */
    public function upgradeResourcePackage(UpgradeResourcePackageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->upgradeResourcePackageEx($request, $runtime);
    }

    /**
     * @param CreateAgAccountRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateAgAccountResponse
     * @throws \Exception
     */
    public function createAgAccountEx(CreateAgAccountRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateAgAccountResponse::fromMap($this->doRequest("CreateAgAccount", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateAgAccountRequest $request
     * @return CreateAgAccountResponse
     * @throws \Exception
     */
    public function createAgAccount(CreateAgAccountRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createAgAccountEx($request, $runtime);
    }

    /**
     * @param GetCustomerAccountInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCustomerAccountInfoResponse
     * @throws \Exception
     */
    public function getCustomerAccountInfoEx(GetCustomerAccountInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCustomerAccountInfoResponse::fromMap($this->doRequest("GetCustomerAccountInfo", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCustomerAccountInfoRequest $request
     * @return GetCustomerAccountInfoResponse
     * @throws \Exception
     */
    public function getCustomerAccountInfo(GetCustomerAccountInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCustomerAccountInfoEx($request, $runtime);
    }

    /**
     * @param GetCustomerListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCustomerListResponse
     * @throws \Exception
     */
    public function getCustomerListEx(GetCustomerListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCustomerListResponse::fromMap($this->doRequest("GetCustomerList", "HTTPS", "POST", "2017-12-14", "AK", null, $request, $runtime));
    }

    /**
     * @param GetCustomerListRequest $request
     * @return GetCustomerListResponse
     * @throws \Exception
     */
    public function getCustomerList(GetCustomerListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCustomerListEx($request, $runtime);
    }

    /**
     * @param ChangeResellerConsumeAmountRequest $request
     * @param RuntimeOptions $runtime
     * @return ChangeResellerConsumeAmountResponse
     * @throws \Exception
     */
    public function changeResellerConsumeAmountEx(ChangeResellerConsumeAmountRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ChangeResellerConsumeAmountResponse::fromMap($this->doRequest("ChangeResellerConsumeAmount", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ChangeResellerConsumeAmountRequest $request
     * @return ChangeResellerConsumeAmountResponse
     * @throws \Exception
     */
    public function changeResellerConsumeAmount(ChangeResellerConsumeAmountRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->changeResellerConsumeAmountEx($request, $runtime);
    }

    /**
     * @param SetResellerUserStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return SetResellerUserStatusResponse
     * @throws \Exception
     */
    public function setResellerUserStatusEx(SetResellerUserStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetResellerUserStatusResponse::fromMap($this->doRequest("SetResellerUserStatus", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetResellerUserStatusRequest $request
     * @return SetResellerUserStatusResponse
     * @throws \Exception
     */
    public function setResellerUserStatus(SetResellerUserStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setResellerUserStatusEx($request, $runtime);
    }

    /**
     * @param CreateResellerUserQuotaRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateResellerUserQuotaResponse
     * @throws \Exception
     */
    public function createResellerUserQuotaEx(CreateResellerUserQuotaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateResellerUserQuotaResponse::fromMap($this->doRequest("CreateResellerUserQuota", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateResellerUserQuotaRequest $request
     * @return CreateResellerUserQuotaResponse
     * @throws \Exception
     */
    public function createResellerUserQuota(CreateResellerUserQuotaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createResellerUserQuotaEx($request, $runtime);
    }

    /**
     * @param SetResellerUserQuotaRequest $request
     * @param RuntimeOptions $runtime
     * @return SetResellerUserQuotaResponse
     * @throws \Exception
     */
    public function setResellerUserQuotaEx(SetResellerUserQuotaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetResellerUserQuotaResponse::fromMap($this->doRequest("SetResellerUserQuota", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetResellerUserQuotaRequest $request
     * @return SetResellerUserQuotaResponse
     * @throws \Exception
     */
    public function setResellerUserQuota(SetResellerUserQuotaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setResellerUserQuotaEx($request, $runtime);
    }

    /**
     * @param QueryResellerAvailableQuotaRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryResellerAvailableQuotaResponse
     * @throws \Exception
     */
    public function queryResellerAvailableQuotaEx(QueryResellerAvailableQuotaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryResellerAvailableQuotaResponse::fromMap($this->doRequest("QueryResellerAvailableQuota", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryResellerAvailableQuotaRequest $request
     * @return QueryResellerAvailableQuotaResponse
     * @throws \Exception
     */
    public function queryResellerAvailableQuota(QueryResellerAvailableQuotaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryResellerAvailableQuotaEx($request, $runtime);
    }

    /**
     * @param SetResellerUserAlarmThresholdRequest $request
     * @param RuntimeOptions $runtime
     * @return SetResellerUserAlarmThresholdResponse
     * @throws \Exception
     */
    public function setResellerUserAlarmThresholdEx(SetResellerUserAlarmThresholdRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetResellerUserAlarmThresholdResponse::fromMap($this->doRequest("SetResellerUserAlarmThreshold", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetResellerUserAlarmThresholdRequest $request
     * @return SetResellerUserAlarmThresholdResponse
     * @throws \Exception
     */
    public function setResellerUserAlarmThreshold(SetResellerUserAlarmThresholdRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setResellerUserAlarmThresholdEx($request, $runtime);
    }

    /**
     * @param QueryAccountTransactionsRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryAccountTransactionsResponse
     * @throws \Exception
     */
    public function queryAccountTransactionsEx(QueryAccountTransactionsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryAccountTransactionsResponse::fromMap($this->doRequest("QueryAccountTransactions", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryAccountTransactionsRequest $request
     * @return QueryAccountTransactionsResponse
     * @throws \Exception
     */
    public function queryAccountTransactions(QueryAccountTransactionsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryAccountTransactionsEx($request, $runtime);
    }

    /**
     * @param UnsubscribeBillToOSSRequest $request
     * @param RuntimeOptions $runtime
     * @return UnsubscribeBillToOSSResponse
     * @throws \Exception
     */
    public function unsubscribeBillToOSSEx(UnsubscribeBillToOSSRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UnsubscribeBillToOSSResponse::fromMap($this->doRequest("UnsubscribeBillToOSS", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UnsubscribeBillToOSSRequest $request
     * @return UnsubscribeBillToOSSResponse
     * @throws \Exception
     */
    public function unsubscribeBillToOSS(UnsubscribeBillToOSSRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->unsubscribeBillToOSSEx($request, $runtime);
    }

    /**
     * @param SubscribeBillToOSSRequest $request
     * @param RuntimeOptions $runtime
     * @return SubscribeBillToOSSResponse
     * @throws \Exception
     */
    public function subscribeBillToOSSEx(SubscribeBillToOSSRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubscribeBillToOSSResponse::fromMap($this->doRequest("SubscribeBillToOSS", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubscribeBillToOSSRequest $request
     * @return SubscribeBillToOSSResponse
     * @throws \Exception
     */
    public function subscribeBillToOSS(SubscribeBillToOSSRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->subscribeBillToOSSEx($request, $runtime);
    }

    /**
     * @param QueryUserOmsDataRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryUserOmsDataResponse
     * @throws \Exception
     */
    public function queryUserOmsDataEx(QueryUserOmsDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryUserOmsDataResponse::fromMap($this->doRequest("QueryUserOmsData", "HTTPS", "GET", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryUserOmsDataRequest $request
     * @return QueryUserOmsDataResponse
     * @throws \Exception
     */
    public function queryUserOmsData(QueryUserOmsDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryUserOmsDataEx($request, $runtime);
    }

    /**
     * @param CancelOrderRequest $request
     * @param RuntimeOptions $runtime
     * @return CancelOrderResponse
     * @throws \Exception
     */
    public function cancelOrderEx(CancelOrderRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CancelOrderResponse::fromMap($this->doRequest("CancelOrder", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CancelOrderRequest $request
     * @return CancelOrderResponse
     * @throws \Exception
     */
    public function cancelOrder(CancelOrderRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->cancelOrderEx($request, $runtime);
    }

    /**
     * @param ApplyInvoiceRequest $request
     * @param RuntimeOptions $runtime
     * @return ApplyInvoiceResponse
     * @throws \Exception
     */
    public function applyInvoiceEx(ApplyInvoiceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ApplyInvoiceResponse::fromMap($this->doRequest("ApplyInvoice", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ApplyInvoiceRequest $request
     * @return ApplyInvoiceResponse
     * @throws \Exception
     */
    public function applyInvoice(ApplyInvoiceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->applyInvoiceEx($request, $runtime);
    }

    /**
     * @param QueryCustomerAddressListRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryCustomerAddressListResponse
     * @throws \Exception
     */
    public function queryCustomerAddressListEx(QueryCustomerAddressListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryCustomerAddressListResponse::fromMap($this->doRequest("QueryCustomerAddressList", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryCustomerAddressListRequest $request
     * @return QueryCustomerAddressListResponse
     * @throws \Exception
     */
    public function queryCustomerAddressList(QueryCustomerAddressListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryCustomerAddressListEx($request, $runtime);
    }

    /**
     * @param QueryEvaluateListRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryEvaluateListResponse
     * @throws \Exception
     */
    public function queryEvaluateListEx(QueryEvaluateListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryEvaluateListResponse::fromMap($this->doRequest("QueryEvaluateList", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryEvaluateListRequest $request
     * @return QueryEvaluateListResponse
     * @throws \Exception
     */
    public function queryEvaluateList(QueryEvaluateListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryEvaluateListEx($request, $runtime);
    }

    /**
     * @param QueryInvoicingCustomerListRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryInvoicingCustomerListResponse
     * @throws \Exception
     */
    public function queryInvoicingCustomerListEx(QueryInvoicingCustomerListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryInvoicingCustomerListResponse::fromMap($this->doRequest("QueryInvoicingCustomerList", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryInvoicingCustomerListRequest $request
     * @return QueryInvoicingCustomerListResponse
     * @throws \Exception
     */
    public function queryInvoicingCustomerList(QueryInvoicingCustomerListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryInvoicingCustomerListEx($request, $runtime);
    }

    /**
     * @param QueryBillOverviewRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryBillOverviewResponse
     * @throws \Exception
     */
    public function queryBillOverviewEx(QueryBillOverviewRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryBillOverviewResponse::fromMap($this->doRequest("QueryBillOverview", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryBillOverviewRequest $request
     * @return QueryBillOverviewResponse
     * @throws \Exception
     */
    public function queryBillOverview(QueryBillOverviewRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryBillOverviewEx($request, $runtime);
    }

    /**
     * @param QueryBillRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryBillResponse
     * @throws \Exception
     */
    public function queryBillEx(QueryBillRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryBillResponse::fromMap($this->doRequest("QueryBill", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryBillRequest $request
     * @return QueryBillResponse
     * @throws \Exception
     */
    public function queryBill(QueryBillRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryBillEx($request, $runtime);
    }

    /**
     * @param QueryInstanceBillRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryInstanceBillResponse
     * @throws \Exception
     */
    public function queryInstanceBillEx(QueryInstanceBillRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryInstanceBillResponse::fromMap($this->doRequest("QueryInstanceBill", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryInstanceBillRequest $request
     * @return QueryInstanceBillResponse
     * @throws \Exception
     */
    public function queryInstanceBill(QueryInstanceBillRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryInstanceBillEx($request, $runtime);
    }

    /**
     * @param EnableBillGenerationRequest $request
     * @param RuntimeOptions $runtime
     * @return EnableBillGenerationResponse
     * @throws \Exception
     */
    public function enableBillGenerationEx(EnableBillGenerationRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return EnableBillGenerationResponse::fromMap($this->doRequest("EnableBillGeneration", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param EnableBillGenerationRequest $request
     * @return EnableBillGenerationResponse
     * @throws \Exception
     */
    public function enableBillGeneration(EnableBillGenerationRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->enableBillGenerationEx($request, $runtime);
    }

    /**
     * @param QueryRedeemRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRedeemResponse
     * @throws \Exception
     */
    public function queryRedeemEx(QueryRedeemRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRedeemResponse::fromMap($this->doRequest("QueryRedeem", "HTTPS", "GET", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryRedeemRequest $request
     * @return QueryRedeemResponse
     * @throws \Exception
     */
    public function queryRedeem(QueryRedeemRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRedeemEx($request, $runtime);
    }

    /**
     * @param ConvertChargeTypeRequest $request
     * @param RuntimeOptions $runtime
     * @return ConvertChargeTypeResponse
     * @throws \Exception
     */
    public function convertChargeTypeEx(ConvertChargeTypeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ConvertChargeTypeResponse::fromMap($this->doRequest("ConvertChargeType", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ConvertChargeTypeRequest $request
     * @return ConvertChargeTypeResponse
     * @throws \Exception
     */
    public function convertChargeType(ConvertChargeTypeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->convertChargeTypeEx($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateInstanceResponse
     * @throws \Exception
     */
    public function createInstanceEx(CreateInstanceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateInstanceResponse::fromMap($this->doRequest("CreateInstance", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     * @return CreateInstanceResponse
     * @throws \Exception
     */
    public function createInstance(CreateInstanceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createInstanceEx($request, $runtime);
    }

    /**
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyInstanceResponse
     * @throws \Exception
     */
    public function modifyInstanceEx(ModifyInstanceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyInstanceResponse::fromMap($this->doRequest("ModifyInstance", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ModifyInstanceRequest $request
     * @return ModifyInstanceResponse
     * @throws \Exception
     */
    public function modifyInstance(ModifyInstanceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyInstanceEx($request, $runtime);
    }

    /**
     * @param DescribePricingModuleRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribePricingModuleResponse
     * @throws \Exception
     */
    public function describePricingModuleEx(DescribePricingModuleRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribePricingModuleResponse::fromMap($this->doRequest("DescribePricingModule", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribePricingModuleRequest $request
     * @return DescribePricingModuleResponse
     * @throws \Exception
     */
    public function describePricingModule(DescribePricingModuleRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describePricingModuleEx($request, $runtime);
    }

    /**
     * @param QueryProductListRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryProductListResponse
     * @throws \Exception
     */
    public function queryProductListEx(QueryProductListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryProductListResponse::fromMap($this->doRequest("QueryProductList", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryProductListRequest $request
     * @return QueryProductListResponse
     * @throws \Exception
     */
    public function queryProductList(QueryProductListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryProductListEx($request, $runtime);
    }

    /**
     * @param QueryInstanceGaapCostRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryInstanceGaapCostResponse
     * @throws \Exception
     */
    public function queryInstanceGaapCostEx(QueryInstanceGaapCostRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryInstanceGaapCostResponse::fromMap($this->doRequest("QueryInstanceGaapCost", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryInstanceGaapCostRequest $request
     * @return QueryInstanceGaapCostResponse
     * @throws \Exception
     */
    public function queryInstanceGaapCost(QueryInstanceGaapCostRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryInstanceGaapCostEx($request, $runtime);
    }

    /**
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions $runtime
     * @return RenewInstanceResponse
     * @throws \Exception
     */
    public function renewInstanceEx(RenewInstanceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RenewInstanceResponse::fromMap($this->doRequest("RenewInstance", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param RenewInstanceRequest $request
     * @return RenewInstanceResponse
     * @throws \Exception
     */
    public function renewInstance(RenewInstanceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->renewInstanceEx($request, $runtime);
    }

    /**
     * @param GetOrderDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return GetOrderDetailResponse
     * @throws \Exception
     */
    public function getOrderDetailEx(GetOrderDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetOrderDetailResponse::fromMap($this->doRequest("GetOrderDetail", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetOrderDetailRequest $request
     * @return GetOrderDetailResponse
     * @throws \Exception
     */
    public function getOrderDetail(GetOrderDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getOrderDetailEx($request, $runtime);
    }

    /**
     * @param QueryOrdersRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryOrdersResponse
     * @throws \Exception
     */
    public function queryOrdersEx(QueryOrdersRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryOrdersResponse::fromMap($this->doRequest("QueryOrders", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryOrdersRequest $request
     * @return QueryOrdersResponse
     * @throws \Exception
     */
    public function queryOrders(QueryOrdersRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryOrdersEx($request, $runtime);
    }

    /**
     * @param QueryMonthlyInstanceConsumptionRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryMonthlyInstanceConsumptionResponse
     * @throws \Exception
     */
    public function queryMonthlyInstanceConsumptionEx(QueryMonthlyInstanceConsumptionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryMonthlyInstanceConsumptionResponse::fromMap($this->doRequest("QueryMonthlyInstanceConsumption", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryMonthlyInstanceConsumptionRequest $request
     * @return QueryMonthlyInstanceConsumptionResponse
     * @throws \Exception
     */
    public function queryMonthlyInstanceConsumption(QueryMonthlyInstanceConsumptionRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryMonthlyInstanceConsumptionEx($request, $runtime);
    }

    /**
     * @param QuerySettlementBillRequest $request
     * @param RuntimeOptions $runtime
     * @return QuerySettlementBillResponse
     * @throws \Exception
     */
    public function querySettlementBillEx(QuerySettlementBillRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QuerySettlementBillResponse::fromMap($this->doRequest("QuerySettlementBill", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QuerySettlementBillRequest $request
     * @return QuerySettlementBillResponse
     * @throws \Exception
     */
    public function querySettlementBill(QuerySettlementBillRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->querySettlementBillEx($request, $runtime);
    }

    /**
     * @param QueryMonthlyBillRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryMonthlyBillResponse
     * @throws \Exception
     */
    public function queryMonthlyBillEx(QueryMonthlyBillRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryMonthlyBillResponse::fromMap($this->doRequest("QueryMonthlyBill", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryMonthlyBillRequest $request
     * @return QueryMonthlyBillResponse
     * @throws \Exception
     */
    public function queryMonthlyBill(QueryMonthlyBillRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryMonthlyBillEx($request, $runtime);
    }

    /**
     * @param SetRenewalRequest $request
     * @param RuntimeOptions $runtime
     * @return SetRenewalResponse
     * @throws \Exception
     */
    public function setRenewalEx(SetRenewalRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetRenewalResponse::fromMap($this->doRequest("SetRenewal", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetRenewalRequest $request
     * @return SetRenewalResponse
     * @throws \Exception
     */
    public function setRenewal(SetRenewalRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setRenewalEx($request, $runtime);
    }

    /**
     * @param QueryAvailableInstancesRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryAvailableInstancesResponse
     * @throws \Exception
     */
    public function queryAvailableInstancesEx(QueryAvailableInstancesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryAvailableInstancesResponse::fromMap($this->doRequest("QueryAvailableInstances", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryAvailableInstancesRequest $request
     * @return QueryAvailableInstancesResponse
     * @throws \Exception
     */
    public function queryAvailableInstances(QueryAvailableInstancesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryAvailableInstancesEx($request, $runtime);
    }

    /**
     * @param CreateResourcePackageRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateResourcePackageResponse
     * @throws \Exception
     */
    public function createResourcePackageEx(CreateResourcePackageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateResourcePackageResponse::fromMap($this->doRequest("CreateResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateResourcePackageRequest $request
     * @return CreateResourcePackageResponse
     * @throws \Exception
     */
    public function createResourcePackage(CreateResourcePackageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createResourcePackageEx($request, $runtime);
    }

    /**
     * @param QueryResourcePackageInstancesRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryResourcePackageInstancesResponse
     * @throws \Exception
     */
    public function queryResourcePackageInstancesEx(QueryResourcePackageInstancesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryResourcePackageInstancesResponse::fromMap($this->doRequest("QueryResourcePackageInstances", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryResourcePackageInstancesRequest $request
     * @return QueryResourcePackageInstancesResponse
     * @throws \Exception
     */
    public function queryResourcePackageInstances(QueryResourcePackageInstancesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryResourcePackageInstancesEx($request, $runtime);
    }

    /**
     * @param GetResourcePackagePriceRequest $request
     * @param RuntimeOptions $runtime
     * @return GetResourcePackagePriceResponse
     * @throws \Exception
     */
    public function getResourcePackagePriceEx(GetResourcePackagePriceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetResourcePackagePriceResponse::fromMap($this->doRequest("GetResourcePackagePrice", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetResourcePackagePriceRequest $request
     * @return GetResourcePackagePriceResponse
     * @throws \Exception
     */
    public function getResourcePackagePrice(GetResourcePackagePriceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getResourcePackagePriceEx($request, $runtime);
    }

    /**
     * @param GetSubscriptionPriceRequest $request
     * @param RuntimeOptions $runtime
     * @return GetSubscriptionPriceResponse
     * @throws \Exception
     */
    public function getSubscriptionPriceEx(GetSubscriptionPriceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetSubscriptionPriceResponse::fromMap($this->doRequest("GetSubscriptionPrice", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetSubscriptionPriceRequest $request
     * @return GetSubscriptionPriceResponse
     * @throws \Exception
     */
    public function getSubscriptionPrice(GetSubscriptionPriceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getSubscriptionPriceEx($request, $runtime);
    }

    /**
     * @param GetPayAsYouGoPriceRequest $request
     * @param RuntimeOptions $runtime
     * @return GetPayAsYouGoPriceResponse
     * @throws \Exception
     */
    public function getPayAsYouGoPriceEx(GetPayAsYouGoPriceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetPayAsYouGoPriceResponse::fromMap($this->doRequest("GetPayAsYouGoPrice", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetPayAsYouGoPriceRequest $request
     * @return GetPayAsYouGoPriceResponse
     * @throws \Exception
     */
    public function getPayAsYouGoPrice(GetPayAsYouGoPriceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getPayAsYouGoPriceEx($request, $runtime);
    }

    /**
     * @param QueryPrepaidCardsRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryPrepaidCardsResponse
     * @throws \Exception
     */
    public function queryPrepaidCardsEx(QueryPrepaidCardsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryPrepaidCardsResponse::fromMap($this->doRequest("QueryPrepaidCards", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryPrepaidCardsRequest $request
     * @return QueryPrepaidCardsResponse
     * @throws \Exception
     */
    public function queryPrepaidCards(QueryPrepaidCardsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryPrepaidCardsEx($request, $runtime);
    }

    /**
     * @param QueryCashCouponsRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryCashCouponsResponse
     * @throws \Exception
     */
    public function queryCashCouponsEx(QueryCashCouponsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryCashCouponsResponse::fromMap($this->doRequest("QueryCashCoupons", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryCashCouponsRequest $request
     * @return QueryCashCouponsResponse
     * @throws \Exception
     */
    public function queryCashCoupons(QueryCashCouponsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryCashCouponsEx($request, $runtime);
    }

    /**
     * @param QueryAccountBalanceRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryAccountBalanceResponse
     * @throws \Exception
     */
    public function queryAccountBalanceEx(QueryAccountBalanceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryAccountBalanceResponse::fromMap($this->doRequest("QueryAccountBalance", "HTTPS", "POST", "2017-12-14", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryAccountBalanceRequest $request
     * @return QueryAccountBalanceResponse
     * @throws \Exception
     */
    public function queryAccountBalance(QueryAccountBalanceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryAccountBalanceEx($request, $runtime);
    }

    /**
     * @param DescribeResourcePackageProductRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeResourcePackageProductResponse
     * @throws \Exception
     */
    public function describeResourcePackageProductEx(DescribeResourcePackageProductRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeResourcePackageProductResponse::fromMap($this->doRequest("DescribeResourcePackageProduct", "HTTPS", "POST", "2017-12-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeResourcePackageProductRequest $request
     * @return DescribeResourcePackageProductResponse
     * @throws \Exception
     */
    public function describeResourcePackageProduct(DescribeResourcePackageProductRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeResourcePackageProductEx($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array $endpointMap
     * @param string $endpoint
     * @return string
     * @throws \Exception
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap["regionId"])) {
            return $endpointMap["regionId"];
        }
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
