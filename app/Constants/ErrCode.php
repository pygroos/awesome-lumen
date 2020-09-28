<?php

namespace App\Constants;

class ErrCode
{
    const SUCCESS = 10000;

    const BUSINESS_ERROR = 20000;

    const USERNAME_ALREADY_EXIST =self::BUSINESS_ERROR + 1;

    //
    // 50000以下错误码是业务相关
    //
    // 50000以上错误码是异常相关
    //

    const ABNORMAL_ERROR = 50000;

    const SAVE_DATA_ERROR = self::ABNORMAL_ERROR + 1;

    const UPDATE_DATA_ERROR = self::ABNORMAL_ERROR + 2;

    const UNKNOWN_ERROR = 99999;
}
