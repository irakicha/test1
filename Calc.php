<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.12.17
 * Time: 17:28
 */

class Calc
{
    public $a;
    public $b;
    public $c;
    public $result;

    function __construct($a, $b, $c){

        $a = trim($a);
        $b = trim($b);

        try{
            if(($a == NULL) || ($b == NULL)){
                throw new EmptyFieldException;
            }
        } catch (EmptyFieldException $e) {
            echo $e->getMsg();
            die;
        }

        try{
            if((!is_numeric($a)) || (!is_numeric($b))){
                throw new TypeExeption();
            }
        } catch (TypeExeption $e) {
            echo $e->getMsg();
            die;
        }


        if ($c == "+"){
            $this->result = $a + $b;
        } elseif ($c == "-"){
            $this->result = $a - $b;
        } elseif ($c == "*"){
            $this->result = $a * $b;
        } elseif ($c == "/"){
            try{
                if($b == 0){
                    throw new NullException;
                } else {
                    $this->result = $a / $b;
                }

            } catch (NullException $e){
                $e ->getMsg();
                exit();
            }

        }
    }

}
