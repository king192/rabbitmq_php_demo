# rabbitmq_php_demo
```
composer install

[root@localhost rabbit.lo]# php receive.php 
 [*] Waiting for messages. To exit press CTRL+C
 
 [root@localhost rabbit.lo]# php send.php 
 [x] Sent 'Hello World!'

参考：https://www.rabbitmq.com/tutorials/tutorial-one-php.html

备注：guest用户只能本机访问，新增用户https://www.cnblogs.com/zongyl/p/5913808.html，新增用户后需授权权限
```
```
实验系统：centos （6.x）

php扩展安装说明：
(pecl search amqp)
pecl install amqp-1.9.4
如果安装过程出错，可能是某些依赖组件的问题

rabbitmq-server安装：
依赖：
1)erlang >= 20，https://github.com/rabbitmq/erlang-rpm/releases (https://github.com/rabbitmq/erlang-rpm/releases/download/v21.3.3/erlang-21.3.3-1.el7.x86_64.rpm)
2)yum install socat -y
3）https://www.rabbitmq.com/download.html (https://github.com/rabbitmq/rabbitmq-server/releases/download/v3.7.14/rabbitmq-server-3.7.14-1.el6.noarch.rpm)
```
