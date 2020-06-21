<?php
namespace Porpoise;

class Object
{
    protected $array = array();

    function __set($key, $value)
    {
        $this->array[$key] = $value;
    }

    function __get($key)
    {
        return $this->array[$key];
    }

    function __call($func, $param)
    {
        return "magic function\n";
    }

    static function __callStatic($func, $param)
    {
        return "magic static function\n";
    }

    function __toString()
    {
        return __CLASS__;
    }

    function __invoke($param)
    {
        return "invoke";
    }
}
