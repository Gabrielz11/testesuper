<?php

echo(" 1 e 2 - Crie um array e popule com 7 números  = done ");

$array = array(1,2,3,4,5,6,7);

echo(" 3 - imprima o número da posição 3 =   ");

print_r($array[3]);

echo(" ----- ");

print_r(" 4 - CRIAR VARIAVEL COM TODAS AS POSIÇÕES DO ARRAY EM STRING =  ");

$separado = implode(',',array_keys($array));

var_dump($separado);

echo(" ----- ");
print_r(" 5 - CRIAR UM NOVO ARRAY A PARTIR DA VARIÁVEL NO FORMATO DE STRING = ");

$array2 = (explode(",",$separado));
var_dump($array2);


print_r(" 5.1 - DESTRUA O ANTERIOR = ");
//destruindo o array anterior
$array = array_diff( $array, $array);
var_dump($array);

echo(" ----- ");


print_r(" 6 - CRIAR CONDIÇÃO = ");

if (in_array("14",$array2)){
    print_r("O valor existe no array!");
}else{
	print_r("O valor não existe no array!");
}

echo(" ----- ");

print_r(" 7 - FAÇA A BUSCA EM CADA POSIÇÃO = ");

echo(" ----- ");

print_r(" 8 - REMOVA A ÚLTIMA POSIÇÃO DO ARRAY = ");

echo(" ----- ");

print_r(" 9 - CONTE QUANTOS ELEMENTOS TEM NESTE ARRAY = ");

echo(" ----- ");

print_r(" 10 - INVERTA AS POSIÇÕES = ");

echo(" ----- ");