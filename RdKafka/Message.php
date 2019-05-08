<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:23
 */

namespace RdKafka;

/**
 * 单个消费或生成的消息或事件,程序必须检查$err以查看对象是否是正确（RD_KAFKA_RESP_ERR_NO_ERROR）的消息或错误事件
 *
 * @package RdKafka
 */
class Message
{
    /* @var int 错误代码 */
    public $err;
    /* @var string Topic Name */
    public $topic_name;
    /* @var int 时间戳 */
    public $timestamp;
    /* @var int partition:分区 */
    public $partition;
    /* @var string 消息体 */
    public $payload;
    /* @var int len */
    public $len;
    /* @var string key */
    public $key;
    /* @var int 偏移 */
    public $offset;
    /* @var array $headers 信息 */
    public $headers;


    /**
     * 将错误作为字符串返回
     *
     * @return string
     */
    public function errstr()
    {
        return '';
    }
}