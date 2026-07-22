<?php

/**Atividade 01 – Compras
Um cliente faz compras. Não se sabe quantas e ele compra pelo menos um produto.
● Gere o valor do produto com rand(10,50).
● Gere $continuar = rand(0,1).
● Conte quantos produtos foram comprados.
● Some o valor total da compra.
● Mostre:
○ valor de cada produto;
○ quantidade de produtos;
○ total da compra. */


// Entrada 
$quantidade = 0;
$total = 0;

// Faça ao menos uma vez
do {

    //Valor sorteado do produto
    $produto = rand(10, 50);

    echo ("Produto: R$$produto <br>");

    // A quantidade sempre vai aumentar se o continuar for 1
    $quantidade++;

    // A quantidade sempre vai aumentar se o continuar for 1
    $total += $produto;

    $continuar = rand(0, 1);

    if($continuar == true){
        echo("O cliente decidiu fazer outro compra. <br>");
    }else{
        echo("O cliente decidiu encerrar as compras. <br>");
    }

    // Vai reptir se o valor for: 1!
} while ($continuar == 1);

echo ("<br>Quantidade de produtos: $quantidade <br>");
echo ("Total da compra: R$ $total");

?>