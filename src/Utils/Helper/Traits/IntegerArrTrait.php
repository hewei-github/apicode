<?php

namespace WebLinuxGame\Utils\Helper\Traits;

/**
 * @desc: 整型数组
 */
trait IntegerArrTrait
{
    public static function intArr(...$args)
    { 
        $argc = func_num_args();
        if(0 ==$argc){
            return null ;
        }
        $argv = func_get_args();
        $filter = function($v){
            return is_int($v);
        };
        if(1 == $argc){
             if(is_numeric($argv[0]) && is_integer($argv[0])){
                return array($argv[0]);
             }
             if(is_array($argv[0])){
                $data = array_filter($argv[0],$filter,ARRAY_FILTER_USE_BOTH);
                if(!empty($data)){
                       return $data; 
                }
             }
        }
        return array_filter($argv,$filter,ARRAY_FILTER_USE_BOTH);
    }

    public static function isIntArr($data = null)
    {
        if(empty($data) || !is_array($data)){
            return false;
        }
        foreach($data as $it){
                if(!is_int($it)){
                        return false;
                }
        }
        return true; 
    }
}