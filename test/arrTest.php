<?php


use WebLinuxGame\Utils\Helper\Factory\Type;


class  TestType
{
    public function testIsType()
    {
       // $data = [12, 3, 1];
       // assert(Type::type('intArr', $data), var_export($data, true) . '非整型数组');
        $arr = ['1', '3'];
        var_dump(Type::type('intArr', $arr));
    }
}

