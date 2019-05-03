<?php

    // REFERENCIA E CLONAGEM DE OBJETO
    class Pessoa {

        public $idade;

        public function __clone() {
            echo "<b>O objeto foi clonado!</b><hr>";
        }

    }

    // INSTANCIANDO UMA CLASSE
    $pessoa = new Pessoa();
    $pessoa->idade = 25;

    // CLONANDO UM OBJETO
    $pessoa2 = clone $pessoa;
    $pessoa2->idade = 35;

    // EXIBINDO DADOS
    echo "Exibindo o valor do objeto <b>pessoa</b> --- " . $pessoa->idade . "<br>";
    echo "Exibindo o valor do objeto <b>pessoa2</b> --- " . $pessoa2->idade . "<br>";


?>