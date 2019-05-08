<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:23
 */

namespace RdKafka;


class Conf
{
    /**
     * Conf constructor.
     */
    public function __construct()
    {
    }

    /**
     * 将配置属性和值转储到数组
     *
     * @return array
     */
    public function dump()
    {
        return [];
    }

    /**
     * 设置配置属性
     *
     * @param string $name
     * @param string $value
     */
    public function set($name, $value)
    {

    }

    /**
     * 设置消费的回调，和poll一起使用
     * @param callable $callback ， function (string $msg){}
     */
    public function setConsumeCb(callable $callback)
    {

    }

    /**
     * 设置用于自动订阅的topic 设置默认的topic配置，用于topic的自动订阅；
     * 这可以与 RdKafka\KafkaConsumer::subscribe() 或 RdKafka\KafkaConsumer::assign() 配合使用
     *
     * @param \RdKafka\TopicConf $topic_conf
     */
    public function setDefaultTopicConf($topic_conf)
    {

    }

    /**
     * 设置发送回调
     * 对于 RdKafka\ProducerTopic::produce() 接受的每条消息，将调用一次发送回调，并设置err以指示产生请求的结果
     * 成功生成消息或librdkafka遇到永久性故障或临时错误的重试计数器已用尽时，将调用回调
     * 程序必须定期调用 RdKafka::poll() 来提供排队的发送回调
     *
     * $conf->setDrMsgCb(function ($kafka, $message) {
     *     if ($message->err) {
     *         // message permanently failed to be delivered
     *     } else {
     *         // message successfully delivered
     *     }
     * });
     *
     * @param callable $callback , function (\RdKafka\Kafka $kafka, \RdKafka\Message $message)
     */
    public function setDrMsgCb(callable $callback)
    {

    }

    /**
     * 设置错误回调,librdkafka使用错误回调将信号错误发送回程序:eg
     * $conf->setErrorCb(function ($kafka, $err, $reason) {
     *     printf("Kafka error: %s (reason: %s)\n", rd_kafka_err2str($err), $reason);
     * });
     *
     * @param callable $callback ,function (\RdKafka\Kafka $kafka, int $err, string $reason)
     */
    public function setErrorCb(callable $callback)
    {

    }

    /**
     * 设置偏移提交回调,配合消费组使用
     *
     * @param callable $callback , function (\RdKafka\Kafka $kafka, int $err, array $partitions)
     */
    public function setOffsetCommitCb(callable $callback)
    {

    }

    /**
     * 设置重新平衡回调以协调的消费者组平衡
     * 注册rebalance_cb会关闭librdkafka的自动分区分配/撤销，而是将该责任委托给应用程序的rebalance_cb
     * 重新平衡回调负责根据两个事件RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS和RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS更新librdkafka的assignment
     * 如果没有重新平衡回调，这将由librdkafka自动完成，但注册重新平衡回调可以让应用程序灵活地执行其他操作以及分配/撤销，例如从备用位置获取偏移（在分配时）或手动提交偏移（在撤销时）
     *
     * $conf->setRebalanceCb(function (RdKafka\KafkaConsumer $kafka, $err, array $partitions = null) {
     *     switch ($err) {
     *         case RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS:
     *             // application may load offets from arbitrary external
     *             // storage here and update partitions
     *             $kafka->assign($partitions);
     *             break;
     *         case RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS:
     *             if ($manual_commits) {
     *                 // Optional explicit manual commit
     *                 $kafka->commit($partitions);
     *             }
     *             $kafka->assign(NULL);
     *             break;
     *         default:
     *             handle_unlikely_error($err);
     *             $kafka->assign(NULL); // sync state
     *             break;
     *     }
     * }
     *
     * @param callable $callback , function (RdKafka\KafkaConsumer $kafka, $err, array $partitions)
     */
    public function setRebalanceCb(callable $callback)
    {

    }

    /**
     * 设置统计报告回调
     *
     * @param callable $callback , function (RdKafka\KafkaConsumer $kafka, string $json, int $json_len)
     */
    public function setStatsCb(callable $callback)
    {

    }
}