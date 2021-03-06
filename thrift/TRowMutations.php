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
 * A TRowMutations object is used to apply a number of Mutations to a single row.
 */
class TRowMutations extends TBase
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'row',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'mutations',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\TMutation',
                ),
        ),
    );

    /**
     * @var string
     */
    public $row = null;
    /**
     * @var \TMutation[]
     */
    public $mutations = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'TRowMutations';
    }


    public function read($input)
    {
        return $this->_read('TRowMutations', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('TRowMutations', self::$_TSPEC, $output);
    }

}
