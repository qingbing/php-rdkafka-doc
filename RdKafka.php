<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:20
 */

/**
 * low-level 的基类：RdKafka\Consumer, RdKafka\Producer
 */
abstract class RdKafka
{
    /**
     * 添加一个或多个broker，eg:
     *      $kafka->addBrokers("broker1:10000,broker2");
     *      $kafka->addBrokers("SSL://broker3:9000,ssl://broker2");
     * @param $broker_list
     * @return int 返回成功添加的 broker 的个数
     */
    public function addBrokers($broker_list)
    {
        return 1;
    }

    public function metadata($all_topics, $only_topic, $timeout_ms)
    {
    }

    /**
     * 获取从 broker 中得到的请求元数据，eg:
     *     $all = $kafka->metadata(true, NULL, 60e3);
     *     $local = $kafka->metadata(false, NULL, 60e3);
     *     $topic = $kafka->newTopic("myTopic");
     *     $one = $kafka->metadata(true, $topic, 60e3);
     *
     * @param bool $all_topics 为true 表示请求集群中所有的 topic 信息，否则返回本地已知的 topic 信息
     * @param null|RdKafka\Topic $only_topic 为空返回所有
     * @param int $timeout_ms 超时定义
     * @return \RdKafka\Metadata
     */
    public function getMetadata($all_topics, $only_topic, $timeout_ms)
    {
        return new \RdKafka\Metadata();
    }

    /**
     * 获取队列长度
     *
     * @return int
     */
    public function getOutQLen()
    {
        return 1;
    }

    public function outqLen()
    {
    }

    /**
     * 创建一个新的message队列
     *
     * @return \RdKafka\Queue
     */
    public function newQueue()
    {
        return new \RdKafka\Queue();
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
     * @param null | RdKafka\TopicConf $topic_conf
     * @return \RdKafka\Topic | \RdKafka\ConsumerTopic  |  RdKafka\ProducerTopic
     */
    public function newTopic($topic_name, $topic_conf = NULL)
    {
        return new \RdKafka\Topic();
    }

    /**
     * 事件轮询
     *
     * @param int $timeout_ms ,指定调用阻止等待事件的最长时间（毫秒）; 对于非阻塞调用，请将timeout_ms设置为0, 要无条件地等待事件，请设置为-1
     * @return int ， 服务的事件数
     */
    public function poll($timeout_ms)
    {
        return 1;
    }

    /**
     * 设置kafka日志记录和调试生成的最大日志记录级别，如果设置了“debug”配置属性，则会自动将级别调整为LOG_DEBUG。
     *
     * @param int $level ,参考系统常亮中的 LOG_
     */
    public function setLogLevel($level)
    {

    }

    public function setLogger($logger)
    {
    }
}