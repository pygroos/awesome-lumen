<?php

namespace App\Constants;

class ErrDesc
{
    static function getDesc()
    {
        return [
            ErrCode::SUCCESS => '操作成功',
            ErrCode::NETWORK_ERROR => '网络错误',
        ];
    }
}
