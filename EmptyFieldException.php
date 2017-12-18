<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.12.17
 * Time: 17:07
 */
class EmptyFieldException extends Exception{
    public function getMsg () {
        echo 'Ошибка! Заполните пожалуйста все поля!';
    }
}
