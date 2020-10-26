<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 18/3/23
 * Time: 上午8:58
 */
namespace app\common\lib;
class Util {

    /**
     * API 输出格式
     * @param $status
     * @param string $message
     * @param array $data
     */
    public static function show($status, $message = '', $data = []) {
        $result = [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];

        echo json_encode($result);
    }
}