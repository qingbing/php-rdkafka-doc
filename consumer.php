<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午12:22
 */


$conf = new RdKafka\Conf();

$conf->set('group.id', 'myConsumerGroup');

$rk = new RdKafka\Consumer($conf);
$rk->addBrokers("172.16.37.120:19092");

$topicConf = new RdKafka\TopicConf();
$topicConf->set('auto.commit.interval.ms', 100);
$topicConf->set('offset.store.method', 'file');
$topicConf->set('offset.store.path', sys_get_temp_dir());
$topicConf->set('auto.offset.reset', 'smallest');

$topic = $rk->newTopic("hello", $topicConf);

// Start consuming partition 0
$topic->consumeStart(0, RD_KAFKA_OFFSET_STORED);

while (true) {
    $message = $topic->consume(0, 120 * 10000);
    switch ($message->err) {
        case RD_KAFKA_RESP_ERR_NO_ERROR:
            //没有错误打印信息
            var_dump($message);
            break;
        case RD_KAFKA_RESP_ERR__PARTITION_EOF:
            echo "等待接收信息\n";
            break;
        case RD_KAFKA_RESP_ERR__TIMED_OUT:
            echo "超时\n";
            break;
        default:
            throw new \Exception($message->errstr(), $message->err);
            break;
    }
}