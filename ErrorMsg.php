<?php

namespace common\error;

class ErrorMsg {

    /**
     * 定义错误描述信息
     * @var array
     */
    public static $errMsg = [
        ErrorCode::SUCCESS => '操作成功',
        ErrorCode::FAILURE => '操作失败',
        ErrorCode::FAILURE_STRING => '操作失败',
    ];

    /**
     * 获取错误描述信息
     * @param $errCode
     * @return string
     */
    public static function getErrMsg($errCode) {
        return isset(self::$errMsg[$errCode]) ? self::$errMsg[$errCode] : self::getDefaultMsg();
    }

    /**
     * 获取默认的错误描述信息
     * @return string
     */
    public static function getDefaultMsg() {
        return '服务器错误';
    }

}
