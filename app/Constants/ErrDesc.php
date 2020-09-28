<?php

namespace App\Constants;

class ErrDesc
{
    static function getDesc()
    {
        return [
            ErrCode::SUCCESS => '操作成功',
            ErrCode::USERNAME_ALREADY_EXIST => '用户名已存在',

            ErrCode::SAVE_DATA_ERROR => '数据保存失败',
            ErrCode::UPDATE_DATA_ERROR => '数据更新失败',

            ErrCode::NETWORK_ERROR => '网络错误',
        ];
    }
}
