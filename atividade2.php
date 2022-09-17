<?php

echo (" 1 e 2 - Crie um array e popule com 7 números  = done ");

$array = array(1, 2, 3, 4, 5, 6, 7);
echo "<br>";
echo (" 3 - imprima o número da posição 3 =   ");

print_r($array[3]);
echo "<br>";

print_r(" 4 - CRIAR VARIAVEL COM TODAS AS POSIÇÕES DO ARRAY EM STRING =  ");

$separado = implode(',', array_keys($array));

var_dump($separado);
echo "<br>";

print_r(" 5 - CRIAR UM NOVO ARRAY A PARTIR DA VARIÁVEL NO FORMATO DE STRING = ");

$array2 = (explode(",", $separado));
var_dump($array2);
echo "<br>";

print_r(" 5.1 - DESTRUA O ANTERIOR = ");
//destruindo o array anterior
$array = array_diff($array, $array);
var_dump($array);

echo "<br>";


print_r(" 6 - CRIAR CONDIÇÃO = ");

if (in_array("14", $array2)) {
    print_r("O valor existe no array!");
} else {
    print_r("O valor não existe no array!");
}

echo "<br>";

print_r(" 7 - Faça uma busca em cada posição. Se o número da posição atual for menor que o
da posição anterior (valor anterior que não foi excluído do array ainda), exclua esta
posição = ");
if (count($array2) > 1) {
    foreach ($array2 as $key => $atual) {
        //verifica se é o primeiro item pois n tem anterior
        if ($key > 0) {
            $prevkey = $key - 1; //pegar o registro anterior
            $anterior = $array2[$prevkey]; //pega o item anterior do array
            if ($array2[$atual] < $array2[$prevkey]) { // comparação se o atual é menor que o anterior
                unset($array2[$atual]); //remove o atual
            }
        }
    }
}
print_r($array2);
//fiquei meio confuso, porém creio que seja isso! O array não se mexeu pois o atual não é menor que o anterior!
echo "<br>";

print_r(" 8 - REMOVA A ÚLTIMA POSIÇÃO DO ARRAY = ");
$ultimo = array_pop($array2);
var_dump($ultimo);
echo "<br>";
var_dump($array2);

echo "<br>";

print_r(" 9 - CONTE QUANTOS ELEMENTOS TEM NESTE ARRAY = ");
// Printing array size
echo count($array2);
echo "   --------   ";
echo sizeof($array2);
echo "<br>";

print_r(" 10 - INVERTA AS POSIÇÕES = ");

$invertido = array_reverse($array2, true);
var_dump($invertido);

echo "<br>";
