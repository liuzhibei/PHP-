<?php

namespace common\error;

trait ReturnErrorTrait {

	/**
	 * @param string $errCode 错误码
	 * @param string $logMessage 日志信息
	 * @param string $errMessage 重写提示信息，用于直接返回前端信息
	 */
    public static function setAndReturn($errCode, $logMessage = '',$errMessage='') {
        ErrorInfo::setAndReturn($errCode, $logMessage,$errMessage);
        return false;
    }

    public static function getErrCode() {
        $errCode = ErrorInfo::getErrCode();
        if ($errCode == '') {
            $errCode = ErrorCode::SUCCESS;
        }

        return $errCode;
    }

    public static function getErrMsg() {
        return ErrorInfo::getErrMsg();
    }

    public static function getLogMsg() {
        return ErrorInfo::getLogMsg();
    }

    public function getAllFirstErrorMessage(){
        if(empty($this->firstErrors)){
            return '';
        }
        return implode(';', $this->firstErrors);
    }

    public static function cleanErrorInfo(){
        ErrorInfo::cleanErrorInfo();
    }
}
