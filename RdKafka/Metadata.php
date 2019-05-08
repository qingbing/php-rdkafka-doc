<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:24
 */

namespace RdKafka;


use RdKafka\Metadata\Collection;

class Metadata
{
    /**
     * 获取 broker 列表
     *
     * @return Collection[\RdKafka\Metadata\Broker]
     */
    public function getBrokers()
    {
        return new Collection();
    }

    /**
     * 获取元数据的来源broker的id
     *
     * @return int
     */
    public function getOrigBrokerId()
    {
        return 1;
    }

    /**
     * 获取元数据的来源broker的name
     *
     * @return string
     */
    public function getOrigBrokerName()
    {
        return '';
    }

    /**
     * 获取 topic 的列表
     *
     * @return Collection[\RdKafka\Metadata\Topic]
     */
    public function getTopics()
    {
        return new Collection();
    }
}