<?php
/**
 * Created by PhpStorm.
 * User: weblinuxgame
 * Date: 2018/11/12
 * Time: 10:01
 */

namespace WebLinuxGame\Utils\Helper\Traits;


trait BusinessCode
{

    protected static $businessConfig = [];

    public static function loadConfig(string $file = '')
    {
        if(empty($file)){
           $file = '';
        }
        $config = [];
        foreach ($config as $module => $item) {
            if (empty($item)) {
                continue;
            }
            if (empty(static::$businessConfig['code'])) {
                static::$businessConfig['code'] = [];
            }
            if (static::uniqueness($item['name'], $item['code'], $item['msg'])) {
                $id = count(static::$businessConfig['code']);
                array_push(static::$businessConfig['code'], $item);
                static::$businessConfig[$module] = $id;
            }
        }
    }

    protected static function uniqueness(string $name = '', int $code = null, string $msg = '')
    {
        return true;
    }

    protected static function __code(string $name = '', string $attr = '')
    {
        return false;
    }

}