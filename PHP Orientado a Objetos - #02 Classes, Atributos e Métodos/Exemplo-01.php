<?php

    // CRIANDO CLASSES, ATRIBUTOS E METODOS
    class Pessoa {

        public $nome;
        public $idade;

        public function Falar(){
            echo $this->nome . " de " . $this->idade . " anos, acabou de falar!<br>";
        }
    }

    $roodney = new Pessoa();
    $roodney->nome = "Roodney Moraes de Souza";
    $roodney->idade = 23;
    $roodney->Falar();

    print_r($roodney);




?>