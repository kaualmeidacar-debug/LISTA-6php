<?php

// Contador/iterador
$i = 0; // inicializacao
$nota = 0;
$contAprovados = 0;
$contReprovados = 0;
while ($i <= 2) {
    // echo ("I: " . $i . "<br>");

    $nota = rand(0, 10);

    if ($nota > 6) {
        echo ("<br> $nota - Aprovado");
        $contAprovados++;
    } else {
        echo ("<br> $nota - Reprovado");
        $contReprovados++;
    }





    $i++;
}

echo ("Fim do laço de repetição.");
echo ("Quantidade de aprovados: $contAprovados");
echo ("Quantidade de reprovados: $contReprovados");
