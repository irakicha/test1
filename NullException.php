<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.12.17
 * Time: 17:22
 */
class NullException extends Exception
{
    public function getMsg () {
        echo 'Ошибка! На 0 делить нельзя!';
    }
}