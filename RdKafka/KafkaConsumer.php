<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:17
 */

namespace RdKafka;


class KafkaConsumer
{
    /**
     * KafkaConsumer constructor.
     * @param Conf $conf
     */
    public function __construct(Conf $conf)
    {

    }

    /**
     * 将分配集更新为topic_partitions
     *
     * @param array|NULL $topic_partitions
     */
    public function assign($topic_partitions)
    {

    }

    /**
     * 同步提交偏移
     *
     * @param mixed $message_or_offsets
     */
    public function commit($message_or_offsets)
    {

    }

    /**
     * RdKafka\KafkaConsumer::commit（）的异步提交
     *
     * @param string|null $message_or_offsets
     */
    public function commitAsync($message_or_offsets)
    {

    }

    /**
     * 消费消息或获取错误事件，并触发回调函数
     * 将自动为任何此类排队事件调用已注册的回调，包括rebalance_cb，event_cb，commit_cb等
     *
     * while (true) {
     *     $message = $kafkaConsumer->consume(3600e3);
     *     switch ($message->err) {
     *         case RD_KAFKA_RESP_ERR_NO_ERROR:
     *             handle($message);
     *             break;
     *         case RD_KAFKA_RESP_ERR__TIMED_OUT:
     *             echo "Timedout\n";
     *             break;
     *         default:
     *             throw new \Exception($message->errstr());
     *             break;
     *     }
     * }
     *
     *
     * @param int $timeout_ms
     * @return Message ,如果发生错误或超时，返回的 $message->err != RD_KAFKA_ERR_NO_ERROR
     */
    public function consume($timeout_ms)
    {
        return new Message();
    }


    /**
     * 获取由 RdKafka\KafkaConsumer::assign() 或 rebalancing 产生的分区分配
     *
     * @return \RdKafka\TopicPartition[]
     * @throws Exception
     */
    public function getAssignment()
    {
        if (true) {
            throw new Exception();
        }
        return [];
    }


    /**
     * 获取消费组的topic和分区的偏移量
     *
     * $conf = new \RdKafka\Conf();
     * $conf->set("group.id", "myGroupID");
     * $kafkaConsumer = new \RdKafka\KafkaConsumer($conf);
     * $topicPartition = new TopicPartition('myTopic', 0);
     * $timeoutMs = 10000000;
     * $topicPartitionsWithOffsets = $kafkaConsumer->getCommittedOffsets([$topicPartition], $timeoutMs));
     *
     * @param TopicPartition[] $topic_partitions
     * @param int $timeout_ms
     * @return \RdKafka\TopicPartition[]
     * @throws Exception
     */
    public function getCommittedOffsets($topic_partitions, $timeout_ms)
    {
        if (true) {
            throw new Exception();
        }
        return [];
    }

    /**
     * 获取从 broker 中得到的请求元数据，eg:
     *     $all = $kafka->metadata(true, NULL, 60e3);
     *     $local = $kafka->metadata(false, NULL, 60e3);
     *     $topic = $kafka->newTopic("myTopic");
     *     $one = $kafka->metadata(true, $topic, 60e3);
     *
     * @param bool $all_topics 为true 表示请求集群中所有的 topic 信息，否则返回本地已知的 topic 信息
     * @param null|\RdKafka\Topic $only_topic 为空返回所有
     * @param int $timeout_ms 超时定义
     * @return \RdKafka\Metadata
     */
    public function getMetadata($all_topics, $only_topic = NULL, $timeout_ms = null)
    {
        return new Metadata();
    }

    /**
     * 获取当前订阅的topic_name
     *
     * @return array
     */
    public function getSubscription()
    {
        return [];
    }

    /**
     * 更新topic的订阅，将取消之前的订阅
     *
     * @param array $topics
     * @throws Exception
     */
    public function subscribe($topics)
    {
        if (true) {
            throw new Exception();
        }
    }

    /**
     * 取消订阅当前订阅集
     * @throws Exception
     */
    public function unsubscribe()
    {
        if (true) {
            throw new Exception();
        }
    }

    /**
     * 创建一个名为 $topic_name 的 topic
     * 使用不同的配置为同一主题名创建两个主题实例无效。 每个主题实例都将使用第一个实例的配置。
     *
     * $conf = new RdKafka\TopicConf();
     * $conf->set("...", "...");
     * $topic = $kafka->newTopic("myTopic", $conf);
     *
     * @param string $topic_name
     * @param null | \RdKafka\TopicConf $topic_conf
     * @return Topic, ConsumerTopic | ProducerTopic
     */
    public function newTopic($topic_name)
    {
        return new Topic();
    }
}



