<?php

$arr1 = array(
    "a"=>"maça",
    "b"=>"banana",
    "c"=>"cereja");
$arr2 = array(
    "a"=>"abacade",
    "b"=>"beterraba",
    "c"=>"cenoura");
   
    $arr3 = array_keys($arry1);
    $arr4 = array_keys($array2);
   
    if($arr3 === $arr4){
        echo("São exatamente iguais!");
    }else {
        echo("Não são Iguais");
    }

?>