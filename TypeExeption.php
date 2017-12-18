<?php
/**
 * Created by PhpStorm.
 * User: ira
 * Date: 18.12.17
 * Time: 23:31
 */


class TypeExeption extends Exception{
    public function getMsg () {
        echo 'Ошибка! Вы ввели не число!';
    }
}