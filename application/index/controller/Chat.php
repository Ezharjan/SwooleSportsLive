<?php

namespace app\index\controller;

use app\common\lib\Util;

class Chat
{
    public function index()
    {
        // 登录
        if (empty($_POST['game_id'])) {
            return Util::show(config('code.error'), 'error');
        }
        if (empty($_POST['content'])) {
            return Util::show(config('code.error'), 'error');
        }

        $data = [
            'user' => "用户" . rand(0, 2000),
//            'user' => '用户' . substr(md5(time() . mt_rand(1, 1000000)), 8, 16),
            'content' => $_POST['content'],
        ];
        //  TODO
        foreach ($_POST['http_server']->ports[1]->connections as $fd) {

            // 升级swoole4之后 需要这样加上判断处理， @20191106
            if ($_POST['http_server']->isEstablished($fd)) {
                $_POST['http_server']->push($fd, json_encode($data));
            } else {
                // 记录日志 提供后续数据分析 untodo
            }
        }

        return Util::show(config('code.success'), 'ok', $data);
    }
}
