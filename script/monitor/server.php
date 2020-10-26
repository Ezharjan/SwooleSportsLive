<?php
/**
 * 监控服务 ws http 8811
 * Created by PhpStorm.
 * User: baidu
 * Date: 18/4/7
 * Time: 下午10:00
 */

class Server {
    const PORT = 8811;

    public function port() {
        $shell  =  "netstat -anp 2>/dev/null | grep ". self::PORT . " | grep LISTEN | wc -l";

        $result = shell_exec($shell);
        if($result != 1) {
            // 发送报警服务 邮件 短信
            /// todo
            echo date("Ymd H:i:s")."error".PHP_EOL;
        } else {
            echo date("Ymd H:i:s")."succss".PHP_EOL;
        }
    }
}

// nohup
swoole_timer_tick(2000, function($timer_id) {
    (new Server())->port();
    echo "time-start".PHP_EOL;
});
