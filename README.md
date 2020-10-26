# Swoole Text Live Broadcast 
---


This is Swoole Text Live Message Broadcasting System, and formally, is a project base on PHP-Swoole and Redis to make the sports matches' text-message live broadcast easier using swoole-websocket, including its front side for mobile phone along with its CMS and server, by Alexander Ezharjan. 


<br><br>

## Environment
1. On Linux or Mac OS
2. PHP 7 was set
3. Swoole  was installed
4. Redis was installed
5. PHP-Redis was installed
6. Make is usable 
7. WebStorm [optional]


<br><br>


## Usage

1. Clone this repo;
2. Going into the server's directory by `cd thisRepo/script/bin/server`;
3. Run Redis server at local port on 6379, otherwise you can't go correct;
4. Run the websocket server by `php ws.php` or by `sh load.sh` after ving revised the path in `load.sh` file content;
5. Open the browser and set it to phone-mode in developer mode to view the details and send text messages in `http://127.0.0.1:8811/live/detail.html`;
6. Open the browser and set it to phone-mode in developer mode to view the admin page and send the messages in `http://127.0.0.1:8811/admin/live.html`;
7. Login page needs ali-sdk to send validation-message to the users' phone;
8. You can use `sh reload.sh` to restart the server smoothly;
9. Nginx server can be used for an agent of the server.


<br>


---
<br><br><br><br>

<p align="right">by Alexander Ezharjan</p>
<p align="right">on 9th August,2020</p>


