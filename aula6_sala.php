<?php

    //passagem de parametro por valor
    function somar(int $num_aleatorio, ?int $numeroB = 0){ // com o = 0 fica opcional passar o valor
        //a ? deixa o valor da variavel nulo, mas tem que dar um tipo pra variavel
        if ($numeroB == null) {
            //faz algo
        }
        print $num_aleatorio + $numeroB . "\n";

        $num_aleatorio = 7; //nao sao e mesma, uma variavel de funcao nao se mistura com uma varial global (externa)
    }

    $num_aleatorio = 13;
    somar($num_aleatorio, 2);

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------

    //passagem por referencia
    function adicionarNumero (&$numeros){ // sem o & funcao faz uma do valor da variavel, mas com & passa o valor da variavel 
        array_push($numeros, 10);
    }

    $numeros = [1,2,3,4];

    adicionarNumero($numeros);
    print_r($numeros);

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------

     function SOMAR2(...$numeros){

        //a variavel $numeros e uma lista de todos os numeros passados

        $soma = 0;
        print array_sum($numeros);

     }

     somar(29,8,8,2);

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------

      function login($usuario): bool{

        if ($usuario == "admin") {
            return true;
        }else{
            return false;
        }
        //oi

        //return 1; retorna o valor, pode usar o valor do retorno em outras funcoes. oq esta para baixo o return nao e executado

    }

    var_dump(login("visitante"));

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------

function recursiva($numero){

    print "$numero \n";
    sleep(1);
    
    //caso base ou caso de parada 
    if ($numero == 0) {
        return 0;
       
    }

    //recursao
    recursiva($numero - 1);

}

    recursiva(10);
