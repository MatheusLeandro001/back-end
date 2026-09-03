<?php

$opcao = 2;
echo '<h1 style ="color: black;">TRUCO ♣️</h1> <br>';
echo "1 - Jogar partida <br>";
echo "2 - Rank <br>";
echo "3 - Loja de Baralhos <br>";
echo "4 - Personagens <br>";
echo "5 - Histórico de Partidas <br>";
echo "6 - Sair <br><br>";
switch($opcao){
    case 1:
        echo "Você escolheu: Jogar Partida<br>";
        break;
    case 2:
        echo "Você escolheu: Rank<br>";
        echo "Ranked Bronze <br>";
        echo "Ranked Prata<br>";
        echo "Ranked Ouro<br>";
        echo "Ranked Platina<br>";
        echo "Ranked Diamante<br>";
        echo "Ranked Elite<br><br>";
        break; 
    case 3:
        echo "Você escolheu: Loja<br>";
        echo "Baralhos<br>";
        echo "Skins<br>";
        echo "Mesas<br><br>";
        break;
    case 4:
        echo "Você escolheu: Personagens<br>";
        echo "Zé<br>";
        echo "Juarez<br>";
        echo "Osmar<br><br>";
        break;
    case 5:
        echo "Você escolheu: Histórico<br>";
        echo "Ganhou de 12 x 7<br>";
        echo "Ganhou de 12 x 10<br>";
        echo "Ganhou de 12 x 3<br><br>";
        break;
    case 6:
        echo "Você escolheu: Sair<br>";
        break;
    default:
        echo "Opção inválida";
        break;
}
?>
