<?php

$array = ['0' => ['nome' => 'Arthur', 'pass' => '123456'], 1 => ['nome' => 'Isabela', 'pass' => '456789']];

$arrayTeste = ['nome' => 'Arthur', 'pass' => '123456'];

foreach($array as $person){
    if($person === $arrayTeste){
        echo 'Acertou';
        break;        
    }else{
        echo 'Errou';
    }

}

$index = array_search($arrayTeste, $array);

echo $index;

if($array[$index] === $arrayTeste){
    $_SESSION['login'] = $login;
    echo 'Acertou';
}else{
    echo 'Errou';
}