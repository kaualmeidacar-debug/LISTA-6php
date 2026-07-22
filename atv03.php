<?php 
/**Atividade 03 – Depósitos
Uma pessoa faz depósitos. E, ele faz pelo menos 1 depósito.
● Valor: rand(50,200).
● Continue enquanto rand(0,1) retornar 1.
● Conte os depósitos.
● Some o dinheiro depositado.
● Exiba o total. */

$numDepositos = 0;
$valorDepositado = 0;
$totalDepositado = 0;

do{
    
    $valorDepositado = rand(50,100);
    
    echo("Valor depositado: R$ $valorDepositado <br>");

    $numDepositos++;

    $totalDepositado += $valorDepositado;
    
    $continuar = rand(0,1);

    if($continuar == 1){
        echo("A pessoa decidiu fazer mais depósitos.");
    }else{
        echo("A pessoa decidiu para.");
    }
    echo("<hr>");

}while ($continuar == 1);

echo("Quantidade de depósitos: $numDepositos <br>");
echo("Valor total depósitado: R$ $totalDepositado <br>");















?>