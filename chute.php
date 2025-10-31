<?php

$chute = 0;

print ("\033[1;37;44mEscolha o intervalo de números para ser sorteado!\033[0m\n");

$n1 = (int) readline("Digite o minimo: \n");
$n2 = (int) readline("Digite o maximo: \n\n");

$sorteado = rand($n1, $n2);

while ($chute != $sorteado){

    for

    $chute = (int) readline("\nDigite um número: \n");

    if ($chute == $sorteado){
        print("\n\033[1;37;42mVocê venceu !!!!\033[0m\n");
        print("Você usou $tentativas tentativas! \n");

        
    }else{
        if($chute > $sorteado){

            print("\n\033[1;37;41mChute muito alto!\033[0m\n\n");


        }else{

            print("\n\033[1;37;41mChute muito baixo!\033[0m\n\n");

        }
        
    }

}

