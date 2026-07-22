<?php 

// Quantidade de carros montados
// Que execute pelo menos 1 vez (do... while)
// Contar quantos carros são vermelhos
// Somar o valor total dos carros vermelhos

// Entrada - Variáveis
$qtdMontados = 0;
$qtdVermelhos = 0;
$somaValorRed = 0;
$carroMontado = 0;
$valorCarroMOntado = 0;
$sontinuar = 0;
do{
    $qtdMontados++;

    // Flag: 0-azul, 1-vermelho, 2-preto, 3-prata

    $carroMontado = rand(0,3);
    $valorCarroMOntado = rand(70000,10000);

    echo("Cor do carro: $carroMontado <br>");
    echo("Valor do carro: R$" . number_format($valorCarroMOntado,2,",",".") .  "<br>");

    if($carroMontado == 1){
        $qtdVermelhos++;
        $somaValorRed = $somaValorRed + $valorCarroMOntado; 
        
    }

    // Flag de saida : 0(F) ou 1(V)
    $continuar = rand(0,1);

    echo("Deseja continuar: $continuar<br>");
    echo("<hr>");


}while($continuar == 1);

echo("Quantidade de carros vermelhos: $qtdVermelhos <br>");
echo("Valor total de carros vermelhos: R$" . number_format($somaValorRed,2,",",".") . "<br>");

    



























?>