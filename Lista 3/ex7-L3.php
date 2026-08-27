<?php

<?php

$valor = 100;
$valorMinimo = 50;

$idadeCliente = 18;
$idadaMinima = 18;

$estoque = 10;
$quantidadePedida = 5;

if($valor < $valorMinimo){
    echo "Valor abaixo do mínimo!";
}
else{
    echo "Valor aceito!";
}

if($idadeCliente < $idadaMinima){
    echo "Menor de idade... Volte quando for maior de idade!";
}
else{
    echo "Acesso Liberado!!!";
}

if($quantidadePedida > $estoque){
    echo "Quantidade indisponível!";
}
else{
    echo "Pedido realizado com sucesso!";
}