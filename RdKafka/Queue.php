<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:23
 */

namespace RdKafka;

/**
 * Class Queue
 * @package RdKafka
 */
class Queue
{
    /**
     * 消费一条消息
     *
     * @param string $timeout_ms 等待消息的最长时间
     * @return Message|null 超时返回null
     */
    public function consume($timeout_ms)
    {
        return new Message();
    }
}