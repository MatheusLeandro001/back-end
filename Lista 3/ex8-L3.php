<?php 

$nome = "Matheus"; 
$senha = "Mt12345678";
$confimarsenha ="Mt12345678";
$data_nasc = "08/02/2010";

if ($senha == $confimarsenha){
    echo "Acesso liberado!<br>";
} else {
    echo "acesso negado!<br>";
}
if($nome != ""){
    echo "Seu nome está errado<br>";
}
else{
    echo "Seu está correto<br>";
}

echo $data_nasc

?>