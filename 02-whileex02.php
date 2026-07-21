<?php 
//Login e senha
$loginRe = 0;
$tentativas = 0;

while($loginRe == 00 && $tentativas <=2){

    $loginRe = rand (0,1);
    echo("<br> loginRE: $loginRe");
    echo("<br> Tentativas: $tentativas");


    if($loginRe == 1){
        echo("Logou!");

    }else{
        echo("Tente novamente");
    }



    $tentativas++;
}
if($loginRe == 0){
    echo("<br> Número maximo de tentativas atingido.");
}
?>