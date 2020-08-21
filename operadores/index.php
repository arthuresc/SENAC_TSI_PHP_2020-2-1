<?php
print("Olá Mundo!");

$saldo = 34.5;

//Aspas duplas aceitam string especial

echo "<br><br><br>Seu saldo é $saldo"; 

//Aspas simples apenas a string pura

echo '<br><br><br>Seu saldo é $saldo';

$saldo = $saldo - 10; //Operador aritmético 

echo "Agora o seu saldo é $saldo";

$saldo *= 1000;

echo "Agora o seu saldo é $saldo";