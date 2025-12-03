<?php 

const CHEQUE_ESPECIAL = 500;
$clientes = []; //lista global

function cadastrarCliente(&$clientes): bool{

    global $clientes;

    $nome = readline('Informe seu nome: ');
    $cpf = readline('Informe seu CPF: ');

    //validar cliente
    if (isset($clientes[$cpf])) {
        print("Esse CPF já possui cadastro!\n");
        return false;
    }

    $clientes[$cpf] = [
        'nome' => $nome, 
        'cpf' => $cpf,
        'contas' => []
    ];

    return true;

}


function cadastrarConta(array $clientes): bool{

    $cpf = readline("Informe seu CPF: \n");

    if(!isset($clientes[$cpf])){
        print("Cliente não encontrado! \n");
        return false;
    }

    $numConta = rand(10000, 100000);

    $clientes[$cpf]['contas'][$numConta] = [
        'saldo' => 0,
        'cheque_especial' => CHEQUE_ESPECIAL,
        'extrato' => []

    ];

    print("Conta criada com sucesso\n");
    print("O número da sua conta é: $numConta\n");
    return true;

}

function depositar(array &$clientes){

    $cpf = readline("Informe seu CPF novamente: \n");

    $numConta = readline("Informe o número da sua conta: \n");

    $valorDeposito = (float) readline("Informe o valor do depósito: \n");

    if($valorDeposito <= 0){
        print("Valor de depósito inválido! \n");
        return false;

    }

    $clientes[$cpf]['contas'][$numConta]['saldo'] += $valorDeposito;

    $dataHora = date('d/m/Y H:i');
    $clientes[$cpf]['contas'][$numConta]['extrato'][] = "Déposito de R$ $valorDeposito em $dataHora";

    print "Depósito realizado com sucesso! \n";
    return true;
    

}

function sacar(&$clientes){

    $cpf = readline("Informe o seu CPF: \n");
    $conta = readline("Informe o numero da sua conta: \n");
    $valorSaque = readline("Informe o valor do saque: \n");

    if ( $clientes[$cpf]['contas'][$conta]['saldo'] >= $valorSaque) {
        $clientes[$cpf]['contas'][$conta]['saldo'] -= $valorSaque;

    }



}

function menu(){
    print("\n ********** MEU BANCO EM PHP ********** \n");
    print("1 - Cadastrar Cliente \n");
    print("2 - Cadastrar Conta \n");
    print("3 - Depositar \n");
    print("4 - Sacar \n");
    print("5 - Consultar Saldo \n"); //fazer 
    print("6 - Consultar Extrato \n");//fazer
    //vai ter mais um
    print("7 - Sair \n");

    print("Escolha uma opção: \n");

}

while(true){
    menu();

    $opcao = readline();

    switch ($opcao) {
        case '1':
            
            cadastrarCliente($clientes);
            break;

        case '2':
            cadastrarConta($clientes);
            break;

        case '3': 
            depositar($clientes);
            break;

        case '4':
            sacar($clientes);
            break;

        case '7':
            print('Obrigado por usar nosso banco!');
            die();
        
        default:
            print'Opção inválida!';
            break;
    }
}

