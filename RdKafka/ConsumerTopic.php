<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:22
 */

namespace RdKafka;

/**
 * 此类表示使用 RdKafka\Consumer 时的 topic。 它无法直接实例化，而应使用 RdKafka\Consumer::newTopic()
 *
 * @package RdKafka
 */
abstract class ConsumerTopic extends Topic
{
    /**
     * 从分区中消费一个message
     *
     * @param int $partition
     * @param int $timeout_ms
     * @return \RdKafka\Message
     */
    public function consume($partition, $timeout_ms)
    {
        return new Message();
    }

    /**
     * 将传入消息重新路由到提供的队列中， 程序必须使用 RdKafka\Queue::consume*() 函数之一来接收提取的消息
     *
     * @param int $partition
     * @param int $offset
     * @param Queue $queue
     */
    public function consumeQueueStart($partition, $offset, Queue $queue)
    {

    }

    /**
     * 从一个分区中的$offset开始消费数据
     *     $partition = 123;
     *     $topic->consumeStart($partition, RD_KAFKA_OFFSET_END);
     *     $topic->consumeStart($partition, RD_KAFKA_OFFSET_STORED);
     *     $topic->consumeStart($partition, rd_kafka_offset_tail(200));
     *
     * @param int $partition
     * @param int $offset
     *     RD_KAFKA_OFFSET_BEGINNING
     *     RD_KAFKA_OFFSET_END
     *     RD_KAFKA_OFFSET_STORED
     *     The return value of rd_kafka_offset_tail()
     */
    public function consumeStart($partition, $offset)
    {

    }

    /**
     * 终止该分区的消费，清除当前队列中的所有消息
     * @param int $partition
     */
    public function consumeStop($partition)
    {

    }

    /**
     * topic 存储的分区偏移量
     * @param int $partition
     * @param int $offset
     */
    public function offsetStore($partition, $offset)
    {

    }
}

