<?php

    // ASSOCIAÇÃO
    // ACONTECE QUANDO UM OBJETO "UTILIZA" OUTRO, PORÉM, SEM QUE ELES DEPENDAM UM DO OUTRO.

    class Pedido {

        public $numero;
        public $cliente;

    }

    class Cliente {

        public $nome;
        public $endereco;

    }

    // CRIANDO UM OBJETO CLIENTE
    $cliente = new Cliente();
    $cliente->nome = "Roodney Moraes de Souza";
    $cliente->endereco = "Rodvia Dom Paulo Rolim Loureiro, Nº 870";

    // CRIANDO UM OBJETO PEDIDO
    $pedido = new Pedido();
    $pedido->numero = "1";
    $pedido->cliente = $cliente;

    // CRIANDO UM ARRAY DOS DADOS
    $data = array(

        'numero' => $pedido->numero,
        'nome_cliente' => $pedido->cliente->nome,
        'endreco_cliente' => $pedido->cliente->endereco

    );

    // EXIBINDO O OBJETO PEDIDO DEPOIS DE SER ASSICIADO
    print_r($pedido);

    echo "<hr>";

    //EXIBINDO OS DADOS DO ARRAY
    print_r($data);



?>