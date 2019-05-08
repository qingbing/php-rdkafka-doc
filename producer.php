<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午12:22
 */

$rk = new RdKafka\Producer();
$rk->setLogLevel(LOG_DEBUG);
//$rk->addBrokers("172.16.37.120:9092"); // <=> $rk->addBrokers("172.16.37.120");
$rk->addBrokers("172.16.37.120:19092");

$topic = $rk->newTopic("hello");

for ($i = 0; $i < 10; $i++) {
    $topic->produce(RD_KAFKA_PARTITION_UA, 0, "发送信息： $i");
    $rk->poll(0);
}

while ($rk->getOutQLen() > 0) {
    $rk->poll(50);
}