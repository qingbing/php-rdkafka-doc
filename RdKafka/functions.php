<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/4/29
 * Time: 下午2:18
 */

if (!function_exists('rd_kafka_err2str')) {
    /**
     * 将rdkafka错误代码转换为字符串
     *
     * @param int $err
     * @return string
     */
    function rd_kafka_err2str($err)
    {
        return '';
    }
}

if (!function_exists('rd_kafka_errno2err')) {
    /**
     * 将系统errno转换为kafka错误代码
     *
     * @param int $errnox
     * @return int
     */
    function rd_kafka_errno2err($errnox)
    {
        return 1;
    }
}

if (!function_exists('rd_kafka_errno')) {
    /**
     * 获取系统错误
     *
     * @return int
     */
    function rd_kafka_errno()
    {
        return 1;
    }
}

if (!function_exists('rd_kafka_offset_tail')) {
    /**
     * 获取kafka相对于尾部的偏移
     *
     * @param int $cnt
     * @return int
     */
    function rd_kafka_offset_tail($cnt)
    {
        return 1;
    }
}