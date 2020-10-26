<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 18/3/23
 * Time: 上午9:19
 */
namespace app\common\lib;

class Redis {

    /**
     * 验证码 redis key的前缀
     * @var string
     */
    public static $pre = "sms_";
    /**
     * 用户user pre
     * @var string
     */
    public static $userpre = "user_";

    /**
     * 存储验证码 redis key
     * @param $phone
     * @return string
     */
    public static function smsKey($phone) {
        return self::$pre.$phone;
    }

    /**
     * 用户 key
     * @param $phone
     * @return string
     */
    public static function userkey($phone) {
        return self::$userpre.$phone;
    }
}