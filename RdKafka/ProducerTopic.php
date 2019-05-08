<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:22
 */

namespace RdKafka;

/**
 * 使用 RdKafka\Producer时，此类表示一个 topic， 它无法直接实例化，而应使用 RdKafka\Producer::newTopic()
 * @package RdKafka
 */
class ProducerTopic extends Topic
{
    private function __construct()
    {

    }

    /**
     * 生成并发送单个消息，异步和非阻塞的方式，eg：
     * $message = [
     *     'type' => 'account-created',
     *     'id' => $accountId,
     *     'date' => date(DATE_W3C),
     * ];
     * $payload = json_encode($message);
     * $topic->produce(RD_KAFKA_PARTITION_UA, 0, $payload, $accountId);
     *
     * @param int $partition ,RD_KAFKA_PARTITION_UA 表示自动选择分区
     * @param int $msgflags
     * @param string $payload
     * @param null|string $key，可选的消息密钥，如果不是NULL，它将被传递给 topic-partitioner，并与消息一起发送给代理并传递给消费者
     */
    public function produce($partition, $msgflags, $payload, $key = NULL)
    {

    }

    /**
     * 生成并发送带有 header 的单个消息，异步和非阻塞的方式，eg：
     *
     * $message = [
     *     'type' => 'account-created',
     *     'id' => $accountId,
     *     'date' => date(DATE_W3C),
     * ];
     * $headers = [
     *     'SomeKey' => 'SomeValue',
     *     'AnotherKey' => 'AnotherValue',
     * ];
     * $payload = json_encode($message);
     * $topic->producev(RD_KAFKA_PARTITION_UA, 0, $payload, $accountId, $headers);
     *
     * @param int $partition ,RD_KAFKA_PARTITION_UA 表示自动选择分区
     * @param int $msgflags
     * @param string $payload
     * @param null|string $key，可选的消息密钥，如果不是NULL，它将被传递给 topic-partitioner，并与消息一起发送给代理并传递给消费者
     * @param array|null $headers
     */
    public function producev($partition, $msgflags, $payload, $key = NULL, $headers = null)
    {

    }
}