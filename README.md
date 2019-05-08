# php-doc-rdkafka
php-rdkafka，编码提示api文档

## 使用说明
- 提供php-rdkafka的各类的外部调用api
- 将该包加入到php-include文件或直接放入项目中，在编码中可以起到api提示信息的左右
- 该包仅仅是针对php-rdkafka中各个类的调用定义，不进入项目编译等


## 使用方法
### 1、 方法一
```text
通过composer安装到项目上即可
```

### 2、 方法二
```text
用git工具clone到本地，在编码时将该包加入到IDE的php-include路径，或直接放入项目中
```

### 3、 方法三
```text
直接下载到本地，在编码时将该包加入到IDE的php-include路径，或直接放入项目中
```

## 文档来源
- [http://arnaud-lb.github.io/php-rdkafka/phpdoc]
- [https://github.com/qingbing/php-debug-class-doc]
```text
Collection.php
Conf.php
Consumer.php
ConsumerTopic.php
Exception.php
functions.php
KafkaConsumer.php
KafkaConsumerTopic.php
Message.php
Metadata.php
Producer.php
ProducerTopic.php
Queue.php
Topic.php
TopicConf.php
TopicPartition.php


RdKafka.php
    + public function metadata($all_topics, $only_topic, $timeout_ms)
    + public function outqLen()
    + public function setLogger($logger)
    
```