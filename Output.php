<?php
/**
 * Created by PhpStorm.
 * User: ira
 * Date: 18.12.17
 * Time: 23:13
 */


function __autoload($classname) {
    $filename = $classname .".php";
    include_once($filename);
}

$output = new Calc($_POST['x'],$_POST['y'],$_POST['action']);
echo $output->result;