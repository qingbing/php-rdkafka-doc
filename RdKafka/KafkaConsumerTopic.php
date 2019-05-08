<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:18
 */

namespace RdKafka;

/**
 * 此类表示使用 RdKafka\KafkaConsumer 时的topic,它无法直接实例化，而应使用 RdKafka\KafkaConsumer::newTopic()
 *
 *
 * Class KafkaConsumerTopic
 * @package RdKafka
 */
class KafkaConsumerTopic extends Topic
{
    /**
     * KafkaConsumerTopic constructor.
     */
    private function __construct()
    {

    }

    /**
     * topic 存储的分区偏移量，将写入到auto.commit.interval.ms
     * 如果使用，auto.commit.enable 必须设置为 false
     * @param int $partition
     * @param int $offset
     */
    public function offsetStore($partition, $offset)
    {

    }
}