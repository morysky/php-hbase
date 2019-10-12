<?php

namespace Hbase;

use TGet;
use THBaseServiceClient;
use Thrift\Protocol\TBinaryProtocol;
use Thrift\Transport\TBufferedTransport;
use Thrift\Transport\TSocket;

class Hbase
{
    protected static $instance;

    protected static $thriftHost;
    protected static $thriftPort;

    protected static $table;

    protected $client;
    protected $transport;

    /**
    * Method  getInstance
    *
    * @author Morysky
    * @static
    */
    public static function init(string $host, int $port, string $table)
    {
        static::$thriftHost = $host;
        static::$thriftPort = $port;

        static::$table = $table;
    }

    /**
     * Method  getInstance
     *
     * @author Morysky
     * @static
     * @return static
     */
    public static function getInstance()
    {
        if (static::$instance instanceof static) {
            return static::$instance;
        }

        return static::$instance = new static;
    }

    public function __construct()
    {
        $socket          = new TSocket(self::$thriftHost, self::$thriftPort);
        $this->transport = new TBufferedTransport($socket);
        $protocol        = new TBinaryProtocol($this->transport);
        $this->client    = new THBaseServiceClient($protocol);

        $this->transport->open();
    }

    public function __destruct()
    {
        $this->transport->close();
    }

    public function get(string $rowKey)
    {
        $tget      = new TGet();
        $tget->row = static::getRealRowKeys($rowKey);

        $response = $this->client->get(static::$table, $tget);

        return array_map(function ($column) {
            return [
                'family'    => $column->family,
                'value'     => $column->value,
                'qualifier' => $column->qualifier,
                'timestamp' => $column->timestamp,
            ];
        }, $response->columnValues);
    }

    private static function getRealRowKeys(string $rowKey)
    {
        return substr(md5($rowKey), 24, 8) . '_' . $rowKey;
    }
}
