<?php 
/**Atividade 04 – Avaliações
Clientes dão notas de 1 a 5. Não se sabe quantas vezes e precisa informar ao
menos 1.
● Nota: rand(1,5).
● Continue conforme rand(0,1).
● Conte as avaliações.
● Some as notas.
● Calcule a média. */

$nota = 0;
$quant = 0;
$total = 0;

do{

    $nota = rand(1,5);

    echo("A avalição de um cliente foi: $nota <br>");

    $quant++;

    $total += $nota;

    $continuar = rand(0,1);
    echo("<hr>");   

}while ($continuar == 1);

    echo("Total de avaliação: $total <br>");
    echo("Quantidade de avaliação: $quant <br>");

    $media = $total / $quant;

    echo("Média de avaliações: $media");














?>