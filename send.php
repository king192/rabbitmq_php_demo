<?php 
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

try {
    $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
    $channel = $connection->channel();

    $channel->queue_declare('hello', false, false, false, false);
    $i = 0;
    while ($i++ < 10000) {
        $msg = new AMQPMessage('Hello World!111111111111111' . $i);  
        $channel->basic_publish($msg, '', 'hello');
    }
    echo " [x] Sent 'Hello World!'\n";

    $channel->close();
    $connection->close();
} catch (Exception $e) {
    //log sth
    echo 'some err';
}
