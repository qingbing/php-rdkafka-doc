<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:24
 */

namespace RdKafka;


class TopicPartition
{
    /**
     * TopicPartition constructor. eg:
     *     new RdKafka\TopicPartition("myTopic", 1);
     * @param string $topic topic名称
     * @param int $partition PartitionId
     * @param null|int $offset 偏移
     */
    public function __construct($topic, $partition, $offset = NULL)
    {

    }

    /**
     * 获取偏移
     *
     * @return int
     */
    public function getOffset()
    {
        return 1;
    }

    /**
     * 获取 PartitionId
     *
     * @return int
     */
    public function getPartition()
    {
        return 1;
    }

    /**
     * 获取 topic 名称
     *
     * @return int
     */
    public function getTopic()
    {
        return 1;
    }

    /**
     * 设置偏移
     *
     * @param string $offset
     */
    public function setOffset($offset)
    {

    }

    /**
     * 设置 PartitionId
     *
     * @param string $partition
     */
    public function setPartition($partition)
    {

    }

    /**
     * 设置 topic 名称
     *
     * @param string $topic_name
     */
    public function setTopic($topic_name)
    {

    }
}