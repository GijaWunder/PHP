lottoland

oq precisa: num minimo; num maximo; valores; universo (mega sena 1 a 60)

<?php

    function menu(): void{

        $continuar = true;

        do{

            print("\nEscolha uma loteria: \n");
            print("1- Mega Sena\n");
            print("2- Quina\n");
            print("3- Lotofacil\n");
            print("4- Lotomania\n");

            $opcao = trim(readline());

            switch($opcao){
                case "1":
                    print("Você escolheu a Mega Sena.\n");
                    megaSena();

                    break;

                case "2":
                    print("Você escolheu a Quina.");
                    break;

                case "0";
                    print("Você escolheu sair.\n");
                    $continuar = false;
                    break;

                default:

                    print("Opcao errada");
                    break;

            }

        }while ($continuar == true);

    }

    megaSena();

    function megaSena(): void{

        $sorteados = [];

        //$quantidadeJogos = readline("Quantos jogos deseja?\n");
        $quantidadeDezena = readline("Quantas dezenas para cada jogo?\n");

      
        while(count($sorteados) < $quantidadeDezena){
            $dezenaSorteada = rand(1, 60);

            if(!in_array($dezenaSorteada, $sorteados)){
                $sorteados[] = $dezenaSorteada;
            }

         

        }

        sort($sorteados);
        
        print_r($sorteados);


    }
