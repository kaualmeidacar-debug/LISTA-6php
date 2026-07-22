<?php 
/**Atividade 02 – Partidas
Um jogador joga videogame. E ele joga pelo menos uma vez.
● Gere a pontuação com rand(0,100).
● Gere $continuar = rand(0,1).
● Conte as partidas.
● Some a pontuação.
● Mostre a média ao final. */

$pontuacao = 0;
$total = 0;
$partidas = 0;
$media = 0;
do{

    $pontuacao = rand(0,100);
    echo("Partida: $partidas <br>");
    echo("Pontuação: $pontuacao  <br>");

    $partidas++;
    

    $total += $pontuacao;

    $continuar = rand(0,1);

    if($continuar == 1){
        echo("O jogador decidiu começar outra partida. <br>");
    }else{
        echo("O jogador decidiu para de jogar. <br>");
    }

    echo("<hr>");

}while ($continuar == 1);

echo ("Partidas: $partidas <br>");
echo ("Pontuação total: $total pts <br>");

$media = $total / $partidas;

echo ("Média de pontos: <b>$media pts</b>");

?>