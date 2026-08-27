<?php

$email = "jp@gmail.com";
$senha = "1234";
$status = "desativado";

echo "Bem vindo ao DeuGreen <br>";

if ($email == "jp@gmail.com" && $senha == "123" && $status == "Ativo"){
    echo "Acesso liberado <br>";
    header("Location: https://www.DeuGreen.com");

}
else{
    echo "Email ou senha invalido!";
}

?>