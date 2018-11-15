<?php

namespace WebLinuxGame\Utils\Helper\Factory;

use  WebLinuxGame\Utils\Helper\Traits\ArrTrait;

use WebLinuxGame\Utils\Helper\Interfaces\TypeInterface;

/**
 * 类型工厂
 * Class Type
 * @package WebLinuxGame\Utils\Helper\Factory
 */
class Type implements TypeInterface
{

    use ArrTrait;

    public static function type(string $type, $data = null)
    {
        $method = static::callByStr($type, 'is');
        if (method_exists(self::class, $method)) {
            return self::$method($data);
        }
        return false;
    }

    protected static function callByStr(string $name = '', string $prefix = '')
    {
        if (empty($name)) {
            return null;
        }
        if (empty($prefix)) {
            return $name;
        }
        return $prefix . ucfirst($name);
    }


    public static function make()
    {

    }

}