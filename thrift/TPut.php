<?php
/**
 * Autogenerated by Thrift Compiler (0.12.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

/**
 * Used to perform Put operations for a single row.
 * 
 * Add column values to this object and they'll be added.
 * You can provide a default timestamp if the column values
 * don't have one. If you don't provide a default timestamp
 * the current time is inserted.
 * 
 * You can specify how this Put should be written to the write-ahead Log (WAL)
 * by changing the durability. If you don't provide durability, it defaults to
 * column family's default setting for durability.
 */
class TPut extends TBase
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'row',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'columnValues',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\TColumnValue',
                ),
        ),
        3 => array(
            'var' => 'timestamp',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        5 => array(
            'var' => 'attributes',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRING,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRING,
                ),
        ),
        6 => array(
            'var' => 'durability',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        7 => array(
            'var' => 'cellVisibility',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\TCellVisibility',
        ),
    );

    /**
     * @var string
     */
    public $row = null;
    /**
     * @var \TColumnValue[]
     */
    public $columnValues = null;
    /**
     * @var int
     */
    public $timestamp = null;
    /**
     * @var array
     */
    public $attributes = null;
    /**
     * @var int
     */
    public $durability = null;
    /**
     * @var \TCellVisibility
     */
    public $cellVisibility = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'TPut';
    }


    public function read($input)
    {
        return $this->_read('TPut', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('TPut', self::$_TSPEC, $output);
    }

}