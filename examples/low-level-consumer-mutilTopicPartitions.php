<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/30
 * Time: 上午12:19
 */

// Consuming from multiple topics and/or partitions can be done by telling
// librdkafka to forward all messages from these topics/partitions to an
// internal queue, and then consuming from this queue.

$queue = $rk->newQueue();

$topicConf = new RdKafka\TopicConf();
$topicConf->set(...);

$topic1 = $rk->newTopic("topic1", $topicConf);
$topic1->consumeQueueStart(0, RD_KAFKA_OFFSET_BEGINNING, $queue);
$topic1->consumeQueueStart(1, RD_KAFKA_OFFSET_BEGINNING, $queue);

$topic2 = $rk->newTopic("topic2", $topicConf);
$topic2->consumeQueueStart(0, RD_KAFKA_OFFSET_BEGINNING, $queue);

// Now, consume from the queue instead of the topics:

while (true) {
    $message = $queue->consume(120*1000);
    // ...
}
