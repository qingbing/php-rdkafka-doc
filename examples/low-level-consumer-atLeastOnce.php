<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/30
 * Time: 上午12:19
 */


// Disable committing offsets automatically
$topicConf->set('auto.commit.enable', 'false');

$topic = $rk->newTopic("test", $topicConf);

// ...

$message = $rk->consume(0, 120*1000);

handle_message($message);

// After successfully consuming the message, schedule offset store.
// Offset is actually committed after 'auto.commit.interval.ms'
// milliseconds.
$topic->offsetStore($message->partition, $message->offset);