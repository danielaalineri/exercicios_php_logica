<?php

$expressao = readline('Digite a expressão matemática: ');
//echo $expressao;

//VERIFICA A EXPRRESSÃO ENVIADA
if(preg_match('/[^0-9\ \+\-\/\*\(\)]/',$expressao )){
die("A expressão é inválida. Verifique os dados enviados. \n");
}
//CALCULA O RESULTADO DA EXPRESSÃO
$resultado = eval('return ' .$expressao. ';');
//VERIFICA O RESULTADO NUMÉRICO
if(!is_numeric($resultado)){
    die("A expressão é inválida. Verifique os dados enviados. \n");

}

//IMPRIME O RESULTADO DA EXPRESSÃO
echo "Resultado: ".$resultado. "\n";

