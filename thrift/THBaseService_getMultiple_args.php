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

class THBaseService_getMultiple_args extends TBase
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'table',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'tgets',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\TGet',
                ),
        ),
    );

    /**
     * the table to get from
     * 
     * @var string
     */
    public $table = null;
    /**
     * a list of TGets to fetch, the Result list
     * will have the Results at corresponding positions
     * or null if there was an error
     * 
     * @var \TGet[]
     */
    public $tgets = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'THBaseService_getMultiple_args';
    }


    public function read($input)
    {
        return $this->_read('THBaseService_getMultiple_args', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('THBaseService_getMultiple_args', self::$_TSPEC, $output);
    }

}
