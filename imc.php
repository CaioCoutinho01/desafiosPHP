<?php

$peso = readline("Digite seu peso ") . PHP_EOL;
$altura = readline("Digite sua altura ") . PHP_EOL;
$imc = $peso / $altura ** 2;

echo ("Seu IMC é de $imc.") . PHP_EOL;

if  ($imc < 18.5){
    echo "Seu IMC está abaixo do recomendado";
} else if ($imc > 24.9){
    echo "Seu IMC está acima do recomendado";
}else {
    echo "Seu IMC está dentro do recomendado " . PHP_EOL;
}



