<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models;

use AlibabaCloud\SDK\Cloudauth\V20201112\Models\DescribeVerifyResultResponseBody\resultObject;
use AlibabaCloud\Tea\Model;

class DescribeVerifyResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resultObject
     */
    public $resultObject;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'resultObject' => 'ResultObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultObject) {
            $res['ResultObject'] = null !== $this->resultObject ? $this->resultObject->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultObject'])) {
            $model->resultObject = resultObject::fromMap($map['ResultObject']);
        }

        return $model;
    }
}
