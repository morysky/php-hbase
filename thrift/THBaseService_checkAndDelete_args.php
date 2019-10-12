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

class THBaseService_checkAndDelete_args extends TBase
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'table',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'row',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'family',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'qualifier',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'value',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'tdelete',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\TDelete',
        ),
    );

    /**
     * to check in and delete from
     * 
     * @var string
     */
    public $table = null;
    /**
     * row to check
     * 
     * @var string
     */
    public $row = null;
    /**
     * column family to check
     * 
     * @var string
     */
    public $family = null;
    /**
     * column qualifier to check
     * 
     * @var string
     */
    public $qualifier = null;
    /**
     * the expected value, if not provided the
     * check is for the non-existence of the
     * column in question
     * 
     * @var string
     */
    public $value = null;
    /**
     * the TDelete to execute if the check succeeds
     * 
     * @var \TDelete
     */
    public $tdelete = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'THBaseService_checkAndDelete_args';
    }


    public function read($input)
    {
        return $this->_read('THBaseService_checkAndDelete_args', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('THBaseService_checkAndDelete_args', self::$_TSPEC, $output);
    }

}