<?php

namespace Container3vGn1b7;
include_once \dirname(__DIR__, 4).'/vendor/php-amqplib/php-amqplib/PhpAmqpLib/Channel/AbstractChannel.php';
include_once \dirname(__DIR__, 4).'/vendor/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AbstractConnection.php';
include_once \dirname(__DIR__, 4).'/vendor/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AMQPStreamConnection.php';

class AMQPStreamConnection_99651dd extends \PhpAmqpLib\Connection\AMQPStreamConnection implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \PhpAmqpLib\Connection\AMQPStreamConnection|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0f4ea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdf904 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1fcaf = [
        'channels' => true,
    ];

    public function reconnect()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'reconnect', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->reconnect();
    }

    public function __destruct()
    {
        $this->initializerdf904 || $this->valueHolder0f4ea->__destruct();
    }

    public function select($sec, $usec = 0)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'select', array('sec' => $sec, 'usec' => $usec), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->select($sec, $usec);
    }

    public function set_close_on_destruct($close = true)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'set_close_on_destruct', array('close' => $close), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->set_close_on_destruct($close);
    }

    public function write($data)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'write', array('data' => $data), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->write($data);
    }

    public function get_free_channel_id()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'get_free_channel_id', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->get_free_channel_id();
    }

    public function send_content($channel, $class_id, $weight, $body_size, $packed_properties, $body, $pkt)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'send_content', array('channel' => $channel, 'class_id' => $class_id, 'weight' => $weight, 'body_size' => $body_size, 'packed_properties' => $packed_properties, 'body' => $body, 'pkt' => $pkt), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->send_content($channel, $class_id, $weight, $body_size, $packed_properties, $body, $pkt);
    }

    public function prepare_content($channel, $class_id, $weight, $body_size, $packed_properties, $body, $pkt)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'prepare_content', array('channel' => $channel, 'class_id' => $class_id, 'weight' => $weight, 'body_size' => $body_size, 'packed_properties' => $packed_properties, 'body' => $body, 'pkt' => $pkt), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->prepare_content($channel, $class_id, $weight, $body_size, $packed_properties, $body, $pkt);
    }

    public function channel($channel_id = null)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'channel', array('channel_id' => $channel_id), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->channel($channel_id);
    }

    public function close($reply_code = 0, $reply_text = '', $method_sig = [0, 0])
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'close', array('reply_code' => $reply_code, 'reply_text' => $reply_text, 'method_sig' => $method_sig), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->close($reply_code, $reply_text, $method_sig);
    }

    public function getSocket()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'getSocket', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->getSocket();
    }

    public function getIO()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'getIO', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->getIO();
    }

    public function checkHeartBeat()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'checkHeartBeat', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->checkHeartBeat();
    }

    public function getLastActivity()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'getLastActivity', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->getLastActivity();
    }

    public function set_connection_block_handler($callback)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'set_connection_block_handler', array('callback' => $callback), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->set_connection_block_handler($callback);
    }

    public function set_connection_unblock_handler($callback)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'set_connection_unblock_handler', array('callback' => $callback), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->set_connection_unblock_handler($callback);
    }

    public function isConnected()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'isConnected', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->isConnected();
    }

    public function isBlocked()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'isBlocked', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->isBlocked();
    }

    public function isWriting()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'isWriting', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->isWriting();
    }

    public function connectOnConstruct()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'connectOnConstruct', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->connectOnConstruct();
    }

    public function getServerProperties()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'getServerProperties', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->getServerProperties();
    }

    public function getHeartbeat()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'getHeartbeat', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->getHeartbeat();
    }

    public function getLibraryProperties()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'getLibraryProperties', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->getLibraryProperties();
    }

    public function getChannelId()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'getChannelId', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->getChannelId();
    }

    public function setBodySizeLimit($max_bytes)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'setBodySizeLimit', array('max_bytes' => $max_bytes), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->setBodySizeLimit($max_bytes);
    }

    public function getConnection()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'getConnection', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->getConnection();
    }

    public function getMethodQueue()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'getMethodQueue', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->getMethodQueue();
    }

    public function hasPendingMethods()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'hasPendingMethods', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->hasPendingMethods();
    }

    public function dispatch($method_sig, $args, $amqpMessage)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'dispatch', array('method_sig' => $method_sig, 'args' => $args, 'amqpMessage' => $amqpMessage), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->dispatch($method_sig, $args, $amqpMessage);
    }

    public function next_frame($timeout = 0)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'next_frame', array('timeout' => $timeout), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->next_frame($timeout);
    }

    public function wait_content()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'wait_content', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->wait_content();
    }

    public function wait($allowed_methods = null, $non_blocking = false, $timeout = 0)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'wait', array('allowed_methods' => $allowed_methods, 'non_blocking' => $non_blocking, 'timeout' => $timeout), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return $this->valueHolder0f4ea->wait($allowed_methods, $non_blocking, $timeout);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->channels, $instance->version_major, $instance->version_minor, $instance->server_properties, $instance->mechanisms, $instance->locales, $instance->wait_tune_ok, $instance->known_hosts, $instance->input, $instance->vhost, $instance->insist, $instance->login_method, $instance->login_response, $instance->locale, $instance->heartbeat, $instance->last_frame, $instance->channel_max, $instance->frame_max, $instance->construct_params, $instance->close_on_destruct, $instance->is_connected, $instance->io, $instance->wait_frame_reader, $instance->connection_timeout, $instance->blocked, $instance->writing, $instance->frame_queue, $instance->method_queue, $instance->auto_decode, $instance->constants, $instance->debug, $instance->connection, $instance->protocolVersion, $instance->maxBodySize, $instance->protocolWriter, $instance->waitHelper, $instance->methodMap, $instance->channel_id, $instance->msg_property_reader, $instance->wait_content_reader, $instance->dispatch_reader);

        \Closure::bind(function (\PhpAmqpLib\Connection\AbstractConnection $instance) {
            unset($instance->connection_block_handler, $instance->connection_unblock_handler, $instance->prepare_content_cache, $instance->prepare_content_cache_max_size, $instance->channel_rpc_timeout);
        }, $instance, 'PhpAmqpLib\\Connection\\AbstractConnection')->__invoke($instance);

        $instance->initializerdf904 = $initializer;

        return $instance;
    }

    public function __construct($host, $port, $user, $password, $vhost = '/', $insist = false, $login_method = 'AMQPLAIN', $login_response = null, $locale = 'en_US', $connection_timeout = 3, $read_write_timeout = 3, $context = null, $keepalive = false, $heartbeat = 0, $channel_rpc_timeout = 0, $ssl_protocol = null)
    {
        static $reflection;

        if (! $this->valueHolder0f4ea) {
            $reflection = $reflection ?? new \ReflectionClass('PhpAmqpLib\\Connection\\AMQPStreamConnection');
            $this->valueHolder0f4ea = $reflection->newInstanceWithoutConstructor();
        unset($this->channels, $this->version_major, $this->version_minor, $this->server_properties, $this->mechanisms, $this->locales, $this->wait_tune_ok, $this->known_hosts, $this->input, $this->vhost, $this->insist, $this->login_method, $this->login_response, $this->locale, $this->heartbeat, $this->last_frame, $this->channel_max, $this->frame_max, $this->construct_params, $this->close_on_destruct, $this->is_connected, $this->io, $this->wait_frame_reader, $this->connection_timeout, $this->blocked, $this->writing, $this->frame_queue, $this->method_queue, $this->auto_decode, $this->constants, $this->debug, $this->connection, $this->protocolVersion, $this->maxBodySize, $this->protocolWriter, $this->waitHelper, $this->methodMap, $this->channel_id, $this->msg_property_reader, $this->wait_content_reader, $this->dispatch_reader);

        \Closure::bind(function (\PhpAmqpLib\Connection\AbstractConnection $instance) {
            unset($instance->connection_block_handler, $instance->connection_unblock_handler, $instance->prepare_content_cache, $instance->prepare_content_cache_max_size, $instance->channel_rpc_timeout);
        }, $this, 'PhpAmqpLib\\Connection\\AbstractConnection')->__invoke($this);

        }

        $this->valueHolder0f4ea->__construct($host, $port, $user, $password, $vhost, $insist, $login_method, $login_response, $locale, $connection_timeout, $read_write_timeout, $context, $keepalive, $heartbeat, $channel_rpc_timeout, $ssl_protocol);
    }

    public function & __get($name)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, '__get', ['name' => $name], $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        if (isset(self::$publicProperties1fcaf[$name])) {
            return $this->valueHolder0f4ea->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f4ea;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder0f4ea;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        if (isset(self::$publicProperties1fcaf[$name])) {
            return ($this->valueHolder0f4ea->$name = $value);
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f4ea;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder0f4ea;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, '__isset', array('name' => $name), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        if (isset(self::$publicProperties1fcaf[$name])) {
            return isset($this->valueHolder0f4ea->$name);
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f4ea;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder0f4ea;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, '__unset', array('name' => $name), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        if (isset(self::$publicProperties1fcaf[$name])) {
            unset($this->valueHolder0f4ea->$name);

            return;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f4ea;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder0f4ea;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, '__clone', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        $this->valueHolder0f4ea = clone $this->valueHolder0f4ea;
    }

    public function __sleep()
    {
        $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, '__sleep', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;

        return array('valueHolder0f4ea');
    }

    public function __wakeup()
    {
        unset($this->channels, $this->version_major, $this->version_minor, $this->server_properties, $this->mechanisms, $this->locales, $this->wait_tune_ok, $this->known_hosts, $this->input, $this->vhost, $this->insist, $this->login_method, $this->login_response, $this->locale, $this->heartbeat, $this->last_frame, $this->channel_max, $this->frame_max, $this->construct_params, $this->close_on_destruct, $this->is_connected, $this->io, $this->wait_frame_reader, $this->connection_timeout, $this->blocked, $this->writing, $this->frame_queue, $this->method_queue, $this->auto_decode, $this->constants, $this->debug, $this->connection, $this->protocolVersion, $this->maxBodySize, $this->protocolWriter, $this->waitHelper, $this->methodMap, $this->channel_id, $this->msg_property_reader, $this->wait_content_reader, $this->dispatch_reader);

        \Closure::bind(function (\PhpAmqpLib\Connection\AbstractConnection $instance) {
            unset($instance->connection_block_handler, $instance->connection_unblock_handler, $instance->prepare_content_cache, $instance->prepare_content_cache_max_size, $instance->channel_rpc_timeout);
        }, $this, 'PhpAmqpLib\\Connection\\AbstractConnection')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdf904 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdf904;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdf904 && ($this->initializerdf904->__invoke($valueHolder0f4ea, $this, 'initializeProxy', array(), $this->initializerdf904) || 1) && $this->valueHolder0f4ea = $valueHolder0f4ea;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0f4ea;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder0f4ea;
    }


}

if (!\class_exists('AMQPStreamConnection_99651dd', false)) {
    \class_alias(__NAMESPACE__.'\\AMQPStreamConnection_99651dd', 'AMQPStreamConnection_99651dd', false);
}
