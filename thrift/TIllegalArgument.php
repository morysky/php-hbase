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
 * A TIllegalArgument exception indicates an illegal or invalid
 * argument was passed into a procedure.
 */
class TIllegalArgument extends TException
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'message',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $message = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'TIllegalArgument';
    }


    public function read($input)
    {
        return $this->_read('TIllegalArgument', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('TIllegalArgument', self::$_TSPEC, $output);
    }

}