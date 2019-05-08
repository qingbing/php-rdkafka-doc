<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/30
 * Time: 上午12:19
 */

$rk = new RdKafka\Producer();
$rk->setLogLevel(LOG_DEBUG);
$rk->addBrokers("127.0.0.1");

$topic = $rk->newTopic("test");

for ($i = 0; $i < 10; $i++) {
    $topic->produce(RD_KAFKA_PARTITION_UA, 0, "Message $i");
    $rk->poll(0);
}

while ($rk->getOutQLen() > 0) {
    $rk->poll(50);
}