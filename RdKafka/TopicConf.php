<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:23
 */

namespace RdKafka;

/**
 * Topic 的配置
 * 可以在»librdkafka存储库中找到可用属性的列表。 请注意，可用的配置属性和默认值可能会根据librdkafka版本而更改
 *
 * @package RdKafka
 */
class TopicConf
{
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
     * @param string $property
     */
    public function set($name, $property)
    {

    }

    /**
     * 设置程序分区
     *
     * @param int $partitioner 必须是 RD_KAFKA_MSG_PARTITIONER_* 常量之一
     */
    public function setPartitioner($partitioner)
    {

    }
}