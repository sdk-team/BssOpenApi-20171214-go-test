<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillOverviewResponse\data;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillOverviewResponse\data\items;

class QueryBillOverviewResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'success' => 'Success',
        'code' => 'Code',
        'message' => 'Message',
        'data' => 'Data',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('data', $this->data, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Success'] = $this->success;
        $res['Code'] = $this->code;
        $res['Message'] = $this->message;
        $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryBillOverviewResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Success'])){
            $model->success = $map['Success'];
        }
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['Message'])){
            $model->message = $map['Message'];
        }
        if(isset($map['Data'])){
            $model->data = data::fromMap($map['Data']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description success
     * @var bool
     */
    public $success;

    /**
     * @description code
     * @var string
     */
    public $code;

    /**
     * @description message
     * @var string
     */
    public $message;

    /**
     * @description data
     * @var QueryBillOverviewResponse.data
     */
    public $data;

}
