<?php 

// pedidos realizados

$continuar = 0;
$quantPedidos = 0;

do{

    $quantPedidos++;
    echo("Pedido número: $quantPedidos <br>");

    // flag: 0-se não deseja comprar novamente
    // flag: 1-se deseja continuar comprando

    $continuar = rand(0,1);
    echo("Continuar: $continuar <br>");

    if($continuar == true){
        echo("O cliente decidiu fazer outro pedido. <br>");
    }else{
        echo("O cliente decidiu encerrar as compras. <br>");
    }

    echo("<hr>");

}while($continuar == true);

// quantos vendas foram realizadas

echo("<strong>Foram realizados: $quantPedidos </strong>");







?>