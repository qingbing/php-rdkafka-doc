<?php
// Broker: Offset out of range
defined('RD_KAFKA_CONSUMER') or define('RD_KAFKA_CONSUMER', 1);

// Err--2?
defined('RD_KAFKA_OFFSET_BEGINNING') or define('RD_KAFKA_OFFSET_BEGINNING', -2);

// Unknown broker error
defined('RD_KAFKA_OFFSET_END') or define('RD_KAFKA_OFFSET_END', -1);

// Err--1000?
defined('RD_KAFKA_OFFSET_STORED') or define('RD_KAFKA_OFFSET_STORED', -1000);

// Unknown broker error
defined('RD_KAFKA_PARTITION_UA') or define('RD_KAFKA_PARTITION_UA', -1);

// Success
defined('RD_KAFKA_PRODUCER') or define('RD_KAFKA_PRODUCER', 0);

// Err-16777471?
defined('RD_KAFKA_VERSION') or define('RD_KAFKA_VERSION', 16777471);

// Err-16777471?
defined('RD_KAFKA_BUILD_VERSION') or define('RD_KAFKA_BUILD_VERSION', 16777471);

// Err--200?
defined('RD_KAFKA_RESP_ERR__BEGIN') or define('RD_KAFKA_RESP_ERR__BEGIN', -200);

// Local: Bad message format
defined('RD_KAFKA_RESP_ERR__BAD_MSG') or define('RD_KAFKA_RESP_ERR__BAD_MSG', -199);

// Local: Invalid compressed data
defined('RD_KAFKA_RESP_ERR__BAD_COMPRESSION') or define('RD_KAFKA_RESP_ERR__BAD_COMPRESSION', -198);

// Local: Broker handle destroyed
defined('RD_KAFKA_RESP_ERR__DESTROY') or define('RD_KAFKA_RESP_ERR__DESTROY', -197);

// Local: Communication failure with broker
defined('RD_KAFKA_RESP_ERR__FAIL') or define('RD_KAFKA_RESP_ERR__FAIL', -196);

// Local: Broker transport failure
defined('RD_KAFKA_RESP_ERR__TRANSPORT') or define('RD_KAFKA_RESP_ERR__TRANSPORT', -195);

// Local: Critical system resource failure
defined('RD_KAFKA_RESP_ERR__CRIT_SYS_RESOURCE') or define('RD_KAFKA_RESP_ERR__CRIT_SYS_RESOURCE', -194);

// Local: Host resolution failure
defined('RD_KAFKA_RESP_ERR__RESOLVE') or define('RD_KAFKA_RESP_ERR__RESOLVE', -193);

// Local: Message timed out
defined('RD_KAFKA_RESP_ERR__MSG_TIMED_OUT') or define('RD_KAFKA_RESP_ERR__MSG_TIMED_OUT', -192);

// Broker: No more messages
defined('RD_KAFKA_RESP_ERR__PARTITION_EOF') or define('RD_KAFKA_RESP_ERR__PARTITION_EOF', -191);

// Local: Unknown partition
defined('RD_KAFKA_RESP_ERR__UNKNOWN_PARTITION') or define('RD_KAFKA_RESP_ERR__UNKNOWN_PARTITION', -190);

// Local: File or filesystem error
defined('RD_KAFKA_RESP_ERR__FS') or define('RD_KAFKA_RESP_ERR__FS', -189);

// Local: Unknown topic
defined('RD_KAFKA_RESP_ERR__UNKNOWN_TOPIC') or define('RD_KAFKA_RESP_ERR__UNKNOWN_TOPIC', -188);

// Local: All broker connections are down
defined('RD_KAFKA_RESP_ERR__ALL_BROKERS_DOWN') or define('RD_KAFKA_RESP_ERR__ALL_BROKERS_DOWN', -187);

// Local: Invalid argument or configuration
defined('RD_KAFKA_RESP_ERR__INVALID_ARG') or define('RD_KAFKA_RESP_ERR__INVALID_ARG', -186);

// Local: Timed out
defined('RD_KAFKA_RESP_ERR__TIMED_OUT') or define('RD_KAFKA_RESP_ERR__TIMED_OUT', -185);

// Local: Queue full
defined('RD_KAFKA_RESP_ERR__QUEUE_FULL') or define('RD_KAFKA_RESP_ERR__QUEUE_FULL', -184);

// Local: ISR count insufficient
defined('RD_KAFKA_RESP_ERR__ISR_INSUFF') or define('RD_KAFKA_RESP_ERR__ISR_INSUFF', -183);

// Local: Broker node update
defined('RD_KAFKA_RESP_ERR__NODE_UPDATE') or define('RD_KAFKA_RESP_ERR__NODE_UPDATE', -182);

// Local: SSL error
defined('RD_KAFKA_RESP_ERR__SSL') or define('RD_KAFKA_RESP_ERR__SSL', -181);

// Local: Waiting for coordinator
defined('RD_KAFKA_RESP_ERR__WAIT_COORD') or define('RD_KAFKA_RESP_ERR__WAIT_COORD', -180);

// Local: Unknown group
defined('RD_KAFKA_RESP_ERR__UNKNOWN_GROUP') or define('RD_KAFKA_RESP_ERR__UNKNOWN_GROUP', -179);

// Local: Operation in progress
defined('RD_KAFKA_RESP_ERR__IN_PROGRESS') or define('RD_KAFKA_RESP_ERR__IN_PROGRESS', -178);

// Local: Previous operation in progress
defined('RD_KAFKA_RESP_ERR__PREV_IN_PROGRESS') or define('RD_KAFKA_RESP_ERR__PREV_IN_PROGRESS', -177);

// Local: Existing subscription
defined('RD_KAFKA_RESP_ERR__EXISTING_SUBSCRIPTION') or define('RD_KAFKA_RESP_ERR__EXISTING_SUBSCRIPTION', -176);

// Local: Assign partitions
defined('RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS') or define('RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS', -175);

// Local: Revoke partitions
defined('RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS') or define('RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS', -174);

// Local: Conflicting use
defined('RD_KAFKA_RESP_ERR__CONFLICT') or define('RD_KAFKA_RESP_ERR__CONFLICT', -173);

// Local: Erroneous state
defined('RD_KAFKA_RESP_ERR__STATE') or define('RD_KAFKA_RESP_ERR__STATE', -172);

// Local: Unknown protocol
defined('RD_KAFKA_RESP_ERR__UNKNOWN_PROTOCOL') or define('RD_KAFKA_RESP_ERR__UNKNOWN_PROTOCOL', -171);

// Local: Not implemented
defined('RD_KAFKA_RESP_ERR__NOT_IMPLEMENTED') or define('RD_KAFKA_RESP_ERR__NOT_IMPLEMENTED', -170);

// Local: Authentication failure
defined('RD_KAFKA_RESP_ERR__AUTHENTICATION') or define('RD_KAFKA_RESP_ERR__AUTHENTICATION', -169);

// Local: No offset stored
defined('RD_KAFKA_RESP_ERR__NO_OFFSET') or define('RD_KAFKA_RESP_ERR__NO_OFFSET', -168);

// Local: Outdated
defined('RD_KAFKA_RESP_ERR__OUTDATED') or define('RD_KAFKA_RESP_ERR__OUTDATED', -167);

// Local: Timed out in queue
defined('RD_KAFKA_RESP_ERR__TIMED_OUT_QUEUE') or define('RD_KAFKA_RESP_ERR__TIMED_OUT_QUEUE', -166);

// Local: Required feature not supported by broker
defined('RD_KAFKA_RESP_ERR__UNSUPPORTED_FEATURE') or define('RD_KAFKA_RESP_ERR__UNSUPPORTED_FEATURE', -165);

// Local: Awaiting cache update
defined('RD_KAFKA_RESP_ERR__WAIT_CACHE') or define('RD_KAFKA_RESP_ERR__WAIT_CACHE', -164);

// Local: Operation interrupted
defined('RD_KAFKA_RESP_ERR__INTR') or define('RD_KAFKA_RESP_ERR__INTR', -163);

// Local: Key serialization error
defined('RD_KAFKA_RESP_ERR__KEY_SERIALIZATION') or define('RD_KAFKA_RESP_ERR__KEY_SERIALIZATION', -162);

// Local: Value serialization error
defined('RD_KAFKA_RESP_ERR__VALUE_SERIALIZATION') or define('RD_KAFKA_RESP_ERR__VALUE_SERIALIZATION', -161);

// Local: Key deserialization error
defined('RD_KAFKA_RESP_ERR__KEY_DESERIALIZATION') or define('RD_KAFKA_RESP_ERR__KEY_DESERIALIZATION', -160);

// Local: Value deserialization error
defined('RD_KAFKA_RESP_ERR__VALUE_DESERIALIZATION') or define('RD_KAFKA_RESP_ERR__VALUE_DESERIALIZATION', -159);

// Local: Partial response
defined('RD_KAFKA_RESP_ERR__PARTIAL') or define('RD_KAFKA_RESP_ERR__PARTIAL', -158);

// Local: Read-only object
defined('RD_KAFKA_RESP_ERR__READ_ONLY') or define('RD_KAFKA_RESP_ERR__READ_ONLY', -157);

// Local: No such entry
defined('RD_KAFKA_RESP_ERR__NOENT') or define('RD_KAFKA_RESP_ERR__NOENT', -156);

// Local: Read underflow
defined('RD_KAFKA_RESP_ERR__UNDERFLOW') or define('RD_KAFKA_RESP_ERR__UNDERFLOW', -155);

// Local: Invalid type
defined('RD_KAFKA_RESP_ERR__INVALID_TYPE') or define('RD_KAFKA_RESP_ERR__INVALID_TYPE', -154);

// Local: Retry operation
defined('RD_KAFKA_RESP_ERR__RETRY') or define('RD_KAFKA_RESP_ERR__RETRY', -153);

// Local: Purged in queue
defined('RD_KAFKA_RESP_ERR__PURGE_QUEUE') or define('RD_KAFKA_RESP_ERR__PURGE_QUEUE', -152);

// Local: Purged in flight
defined('RD_KAFKA_RESP_ERR__PURGE_INFLIGHT') or define('RD_KAFKA_RESP_ERR__PURGE_INFLIGHT', -151);

// Local: Fatal error
defined('RD_KAFKA_RESP_ERR__FATAL') or define('RD_KAFKA_RESP_ERR__FATAL', -150);

// Local: Inconsistent state
defined('RD_KAFKA_RESP_ERR__INCONSISTENT') or define('RD_KAFKA_RESP_ERR__INCONSISTENT', -149);

// Local: Gap-less ordering would not be guaranteed if proceeding
defined('RD_KAFKA_RESP_ERR__GAPLESS_GUARANTEE') or define('RD_KAFKA_RESP_ERR__GAPLESS_GUARANTEE', -148);

// Local: Maximum application poll interval (max.poll.interval.ms) exceeded
defined('RD_KAFKA_RESP_ERR__MAX_POLL_EXCEEDED') or define('RD_KAFKA_RESP_ERR__MAX_POLL_EXCEEDED', -147);

// Err--100?
defined('RD_KAFKA_RESP_ERR__END') or define('RD_KAFKA_RESP_ERR__END', -100);

// Unknown broker error
defined('RD_KAFKA_RESP_ERR_UNKNOWN') or define('RD_KAFKA_RESP_ERR_UNKNOWN', -1);

// Success
defined('RD_KAFKA_RESP_ERR_NO_ERROR') or define('RD_KAFKA_RESP_ERR_NO_ERROR', 0);

// Broker: Offset out of range
defined('RD_KAFKA_RESP_ERR_OFFSET_OUT_OF_RANGE') or define('RD_KAFKA_RESP_ERR_OFFSET_OUT_OF_RANGE', 1);

// Broker: Invalid message
defined('RD_KAFKA_RESP_ERR_INVALID_MSG') or define('RD_KAFKA_RESP_ERR_INVALID_MSG', 2);

// Broker: Unknown topic or partition
defined('RD_KAFKA_RESP_ERR_UNKNOWN_TOPIC_OR_PART') or define('RD_KAFKA_RESP_ERR_UNKNOWN_TOPIC_OR_PART', 3);

// Broker: Invalid message size
defined('RD_KAFKA_RESP_ERR_INVALID_MSG_SIZE') or define('RD_KAFKA_RESP_ERR_INVALID_MSG_SIZE', 4);

// Broker: Leader not available
defined('RD_KAFKA_RESP_ERR_LEADER_NOT_AVAILABLE') or define('RD_KAFKA_RESP_ERR_LEADER_NOT_AVAILABLE', 5);

// Broker: Not leader for partition
defined('RD_KAFKA_RESP_ERR_NOT_LEADER_FOR_PARTITION') or define('RD_KAFKA_RESP_ERR_NOT_LEADER_FOR_PARTITION', 6);

// Broker: Request timed out
defined('RD_KAFKA_RESP_ERR_REQUEST_TIMED_OUT') or define('RD_KAFKA_RESP_ERR_REQUEST_TIMED_OUT', 7);

// Broker: Broker not available
defined('RD_KAFKA_RESP_ERR_BROKER_NOT_AVAILABLE') or define('RD_KAFKA_RESP_ERR_BROKER_NOT_AVAILABLE', 8);

// Broker: Replica not available
defined('RD_KAFKA_RESP_ERR_REPLICA_NOT_AVAILABLE') or define('RD_KAFKA_RESP_ERR_REPLICA_NOT_AVAILABLE', 9);

// Broker: Message size too large
defined('RD_KAFKA_RESP_ERR_MSG_SIZE_TOO_LARGE') or define('RD_KAFKA_RESP_ERR_MSG_SIZE_TOO_LARGE', 10);

// Broker: StaleControllerEpochCode
defined('RD_KAFKA_RESP_ERR_STALE_CTRL_EPOCH') or define('RD_KAFKA_RESP_ERR_STALE_CTRL_EPOCH', 11);

// Broker: Offset metadata string too large
defined('RD_KAFKA_RESP_ERR_OFFSET_METADATA_TOO_LARGE') or define('RD_KAFKA_RESP_ERR_OFFSET_METADATA_TOO_LARGE', 12);

// Broker: Broker disconnected before response received
defined('RD_KAFKA_RESP_ERR_NETWORK_EXCEPTION') or define('RD_KAFKA_RESP_ERR_NETWORK_EXCEPTION', 13);

// Broker: Group coordinator load in progress
defined('RD_KAFKA_RESP_ERR_GROUP_LOAD_IN_PROGRESS') or define('RD_KAFKA_RESP_ERR_GROUP_LOAD_IN_PROGRESS', 14);

// Broker: Group coordinator not available
defined('RD_KAFKA_RESP_ERR_GROUP_COORDINATOR_NOT_AVAILABLE') or define('RD_KAFKA_RESP_ERR_GROUP_COORDINATOR_NOT_AVAILABLE', 15);

// Broker: Not coordinator for group
defined('RD_KAFKA_RESP_ERR_NOT_COORDINATOR_FOR_GROUP') or define('RD_KAFKA_RESP_ERR_NOT_COORDINATOR_FOR_GROUP', 16);

// Broker: Invalid topic
defined('RD_KAFKA_RESP_ERR_TOPIC_EXCEPTION') or define('RD_KAFKA_RESP_ERR_TOPIC_EXCEPTION', 17);

// Broker: Message batch larger than configured server segment size
defined('RD_KAFKA_RESP_ERR_RECORD_LIST_TOO_LARGE') or define('RD_KAFKA_RESP_ERR_RECORD_LIST_TOO_LARGE', 18);

// Broker: Not enough in-sync replicas
defined('RD_KAFKA_RESP_ERR_NOT_ENOUGH_REPLICAS') or define('RD_KAFKA_RESP_ERR_NOT_ENOUGH_REPLICAS', 19);

// Broker: Message(s) written to insufficient number of in-sync replicas
defined('RD_KAFKA_RESP_ERR_NOT_ENOUGH_REPLICAS_AFTER_APPEND') or define('RD_KAFKA_RESP_ERR_NOT_ENOUGH_REPLICAS_AFTER_APPEND', 20);

// Broker: Invalid required acks value
defined('RD_KAFKA_RESP_ERR_INVALID_REQUIRED_ACKS') or define('RD_KAFKA_RESP_ERR_INVALID_REQUIRED_ACKS', 21);

// Broker: Specified group generation id is not valid
defined('RD_KAFKA_RESP_ERR_ILLEGAL_GENERATION') or define('RD_KAFKA_RESP_ERR_ILLEGAL_GENERATION', 22);

// Broker: Inconsistent group protocol
defined('RD_KAFKA_RESP_ERR_INCONSISTENT_GROUP_PROTOCOL') or define('RD_KAFKA_RESP_ERR_INCONSISTENT_GROUP_PROTOCOL', 23);

// Broker: Invalid group.id
defined('RD_KAFKA_RESP_ERR_INVALID_GROUP_ID') or define('RD_KAFKA_RESP_ERR_INVALID_GROUP_ID', 24);

// Broker: Unknown member
defined('RD_KAFKA_RESP_ERR_UNKNOWN_MEMBER_ID') or define('RD_KAFKA_RESP_ERR_UNKNOWN_MEMBER_ID', 25);

// Broker: Invalid session timeout
defined('RD_KAFKA_RESP_ERR_INVALID_SESSION_TIMEOUT') or define('RD_KAFKA_RESP_ERR_INVALID_SESSION_TIMEOUT', 26);

// Broker: Group rebalance in progress
defined('RD_KAFKA_RESP_ERR_REBALANCE_IN_PROGRESS') or define('RD_KAFKA_RESP_ERR_REBALANCE_IN_PROGRESS', 27);

// Broker: Commit offset data size is not valid
defined('RD_KAFKA_RESP_ERR_INVALID_COMMIT_OFFSET_SIZE') or define('RD_KAFKA_RESP_ERR_INVALID_COMMIT_OFFSET_SIZE', 28);

// Broker: Topic authorization failed
defined('RD_KAFKA_RESP_ERR_TOPIC_AUTHORIZATION_FAILED') or define('RD_KAFKA_RESP_ERR_TOPIC_AUTHORIZATION_FAILED', 29);

// Broker: Group authorization failed
defined('RD_KAFKA_RESP_ERR_GROUP_AUTHORIZATION_FAILED') or define('RD_KAFKA_RESP_ERR_GROUP_AUTHORIZATION_FAILED', 30);

// Broker: Cluster authorization failed
defined('RD_KAFKA_RESP_ERR_CLUSTER_AUTHORIZATION_FAILED') or define('RD_KAFKA_RESP_ERR_CLUSTER_AUTHORIZATION_FAILED', 31);

// Broker: Invalid timestamp
defined('RD_KAFKA_RESP_ERR_INVALID_TIMESTAMP') or define('RD_KAFKA_RESP_ERR_INVALID_TIMESTAMP', 32);

// Broker: Unsupported SASL mechanism
defined('RD_KAFKA_RESP_ERR_UNSUPPORTED_SASL_MECHANISM') or define('RD_KAFKA_RESP_ERR_UNSUPPORTED_SASL_MECHANISM', 33);

// Broker: Request not valid in current SASL state
defined('RD_KAFKA_RESP_ERR_ILLEGAL_SASL_STATE') or define('RD_KAFKA_RESP_ERR_ILLEGAL_SASL_STATE', 34);

// Broker: API version not supported
defined('RD_KAFKA_RESP_ERR_UNSUPPORTED_VERSION') or define('RD_KAFKA_RESP_ERR_UNSUPPORTED_VERSION', 35);

// Broker: Topic already exists
defined('RD_KAFKA_RESP_ERR_TOPIC_ALREADY_EXISTS') or define('RD_KAFKA_RESP_ERR_TOPIC_ALREADY_EXISTS', 36);

// Broker: Invalid number of partitions
defined('RD_KAFKA_RESP_ERR_INVALID_PARTITIONS') or define('RD_KAFKA_RESP_ERR_INVALID_PARTITIONS', 37);

// Broker: Invalid replication factor
defined('RD_KAFKA_RESP_ERR_INVALID_REPLICATION_FACTOR') or define('RD_KAFKA_RESP_ERR_INVALID_REPLICATION_FACTOR', 38);

// Broker: Invalid replica assignment
defined('RD_KAFKA_RESP_ERR_INVALID_REPLICA_ASSIGNMENT') or define('RD_KAFKA_RESP_ERR_INVALID_REPLICA_ASSIGNMENT', 39);

// Broker: Configuration is invalid
defined('RD_KAFKA_RESP_ERR_INVALID_CONFIG') or define('RD_KAFKA_RESP_ERR_INVALID_CONFIG', 40);

// Broker: Not controller for cluster
defined('RD_KAFKA_RESP_ERR_NOT_CONTROLLER') or define('RD_KAFKA_RESP_ERR_NOT_CONTROLLER', 41);

// Broker: Invalid request
defined('RD_KAFKA_RESP_ERR_INVALID_REQUEST') or define('RD_KAFKA_RESP_ERR_INVALID_REQUEST', 42);

// Broker: Message format on broker does not support request
defined('RD_KAFKA_RESP_ERR_UNSUPPORTED_FOR_MESSAGE_FORMAT') or define('RD_KAFKA_RESP_ERR_UNSUPPORTED_FOR_MESSAGE_FORMAT', 43);

// Broker: Policy violation
defined('RD_KAFKA_RESP_ERR_POLICY_VIOLATION') or define('RD_KAFKA_RESP_ERR_POLICY_VIOLATION', 44);

// Broker: Broker received an out of order sequence number
defined('RD_KAFKA_RESP_ERR_OUT_OF_ORDER_SEQUENCE_NUMBER') or define('RD_KAFKA_RESP_ERR_OUT_OF_ORDER_SEQUENCE_NUMBER', 45);

// Broker: Broker received a duplicate sequence number
defined('RD_KAFKA_RESP_ERR_DUPLICATE_SEQUENCE_NUMBER') or define('RD_KAFKA_RESP_ERR_DUPLICATE_SEQUENCE_NUMBER', 46);

// Broker: Producer attempted an operation with an old epoch
defined('RD_KAFKA_RESP_ERR_INVALID_PRODUCER_EPOCH') or define('RD_KAFKA_RESP_ERR_INVALID_PRODUCER_EPOCH', 47);

// Broker: Producer attempted a transactional operation in an invalid state
defined('RD_KAFKA_RESP_ERR_INVALID_TXN_STATE') or define('RD_KAFKA_RESP_ERR_INVALID_TXN_STATE', 48);

// Broker: Producer attempted to use a producer id which is not currently assigned to its transactional id
defined('RD_KAFKA_RESP_ERR_INVALID_PRODUCER_ID_MAPPING') or define('RD_KAFKA_RESP_ERR_INVALID_PRODUCER_ID_MAPPING', 49);

// Broker: Transaction timeout is larger than the maximum value allowed by the broker's max.transaction.timeout.ms
defined('RD_KAFKA_RESP_ERR_INVALID_TRANSACTION_TIMEOUT') or define('RD_KAFKA_RESP_ERR_INVALID_TRANSACTION_TIMEOUT', 50);

// Broker: Producer attempted to update a transaction while another concurrent operation on the same transaction was ongoing
defined('RD_KAFKA_RESP_ERR_CONCURRENT_TRANSACTIONS') or define('RD_KAFKA_RESP_ERR_CONCURRENT_TRANSACTIONS', 51);

// Broker: Indicates that the transaction coordinator sending a WriteTxnMarker is no longer the current coordinator for a given producer
defined('RD_KAFKA_RESP_ERR_TRANSACTION_COORDINATOR_FENCED') or define('RD_KAFKA_RESP_ERR_TRANSACTION_COORDINATOR_FENCED', 52);

// Broker: Transactional Id authorization failed
defined('RD_KAFKA_RESP_ERR_TRANSACTIONAL_ID_AUTHORIZATION_FAILED') or define('RD_KAFKA_RESP_ERR_TRANSACTIONAL_ID_AUTHORIZATION_FAILED', 53);

// Broker: Security features are disabled
defined('RD_KAFKA_RESP_ERR_SECURITY_DISABLED') or define('RD_KAFKA_RESP_ERR_SECURITY_DISABLED', 54);

// Broker: Operation not attempted
defined('RD_KAFKA_RESP_ERR_OPERATION_NOT_ATTEMPTED') or define('RD_KAFKA_RESP_ERR_OPERATION_NOT_ATTEMPTED', 55);

// Disk error when trying to access log file on the disk
defined('RD_KAFKA_RESP_ERR_KAFKA_STORAGE_ERROR') or define('RD_KAFKA_RESP_ERR_KAFKA_STORAGE_ERROR', 56);

// The user-specified log directory is not found in the broker config
defined('RD_KAFKA_RESP_ERR_LOG_DIR_NOT_FOUND') or define('RD_KAFKA_RESP_ERR_LOG_DIR_NOT_FOUND', 57);

// SASL Authentication failed
defined('RD_KAFKA_RESP_ERR_SASL_AUTHENTICATION_FAILED') or define('RD_KAFKA_RESP_ERR_SASL_AUTHENTICATION_FAILED', 58);

// Unknown Producer Id
defined('RD_KAFKA_RESP_ERR_UNKNOWN_PRODUCER_ID') or define('RD_KAFKA_RESP_ERR_UNKNOWN_PRODUCER_ID', 59);

// Partition reassignment is in progress
defined('RD_KAFKA_RESP_ERR_REASSIGNMENT_IN_PROGRESS') or define('RD_KAFKA_RESP_ERR_REASSIGNMENT_IN_PROGRESS', 60);

// Delegation Token feature is not enabled
defined('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_AUTH_DISABLED') or define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_AUTH_DISABLED', 61);

// Delegation Token is not found on server
defined('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_NOT_FOUND') or define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_NOT_FOUND', 62);

// Specified Principal is not valid Owner/Renewer
defined('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_OWNER_MISMATCH') or define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_OWNER_MISMATCH', 63);

// Delegation Token requests are not allowed on this connection
defined('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_REQUEST_NOT_ALLOWED') or define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_REQUEST_NOT_ALLOWED', 64);

// Delegation Token authorization failed
defined('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_AUTHORIZATION_FAILED') or define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_AUTHORIZATION_FAILED', 65);

// Delegation Token is expired
defined('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_EXPIRED') or define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_EXPIRED', 66);

// Supplied principalType is not supported
defined('RD_KAFKA_RESP_ERR_INVALID_PRINCIPAL_TYPE') or define('RD_KAFKA_RESP_ERR_INVALID_PRINCIPAL_TYPE', 67);

// The group is not empty
defined('RD_KAFKA_RESP_ERR_NON_EMPTY_GROUP') or define('RD_KAFKA_RESP_ERR_NON_EMPTY_GROUP', 68);

// The group id does not exist
defined('RD_KAFKA_RESP_ERR_GROUP_ID_NOT_FOUND') or define('RD_KAFKA_RESP_ERR_GROUP_ID_NOT_FOUND', 69);

// The fetch session ID was not found
defined('RD_KAFKA_RESP_ERR_FETCH_SESSION_ID_NOT_FOUND') or define('RD_KAFKA_RESP_ERR_FETCH_SESSION_ID_NOT_FOUND', 70);

// The fetch session epoch is invalid
defined('RD_KAFKA_RESP_ERR_INVALID_FETCH_SESSION_EPOCH') or define('RD_KAFKA_RESP_ERR_INVALID_FETCH_SESSION_EPOCH', 71);

// No matching listener
defined('RD_KAFKA_RESP_ERR_LISTENER_NOT_FOUND') or define('RD_KAFKA_RESP_ERR_LISTENER_NOT_FOUND', 72);

// Topic deletion is disabled
defined('RD_KAFKA_RESP_ERR_TOPIC_DELETION_DISABLED') or define('RD_KAFKA_RESP_ERR_TOPIC_DELETION_DISABLED', 73);

// Unsupported compression type
defined('RD_KAFKA_RESP_ERR_UNSUPPORTED_COMPRESSION_TYPE') or define('RD_KAFKA_RESP_ERR_UNSUPPORTED_COMPRESSION_TYPE', 74);

// Err--2?
defined('RD_KAFKA_CONF_UNKNOWN') or define('RD_KAFKA_CONF_UNKNOWN', -2);

// Unknown broker error
defined('RD_KAFKA_CONF_INVALID') or define('RD_KAFKA_CONF_INVALID', -1);

// Success
defined('RD_KAFKA_CONF_OK') or define('RD_KAFKA_CONF_OK', 0);

// Broker: Invalid message
defined('RD_KAFKA_MSG_PARTITIONER_RANDOM') or define('RD_KAFKA_MSG_PARTITIONER_RANDOM', 2);

// Broker: Unknown topic or partition
defined('RD_KAFKA_MSG_PARTITIONER_CONSISTENT') or define('RD_KAFKA_MSG_PARTITIONER_CONSISTENT', 3);

// Err-100?
defined('RD_KAFKA_LOG_PRINT') or define('RD_KAFKA_LOG_PRINT', 100);

// Err-101?
defined('RD_KAFKA_LOG_SYSLOG') or define('RD_KAFKA_LOG_SYSLOG', 101);

// Err-102?
defined('RD_KAFKA_LOG_SYSLOG_PRINT') or define('RD_KAFKA_LOG_SYSLOG_PRINT', 102);
