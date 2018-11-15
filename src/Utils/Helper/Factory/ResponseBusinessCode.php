<?php
/**
 * Created by PhpStorm.
 * User: weblinuxgame
 * Date: 2018/11/11
 * Time: 20:15
 */

namespace WebLinuxGame\Utils\Helper\Factory;

use WebLinuxGame\Utils\Helper\Traits\BusinessCode;

abstract class ResponseBusinessCode
{
    use BusinessCode;

    public static function __callStatic($name, $arguments)
    {

    }
}