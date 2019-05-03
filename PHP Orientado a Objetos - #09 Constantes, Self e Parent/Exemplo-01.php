<?php

    // CONSTANTES, REFERENCIANDO AS CONSTANTES COM SELF E PARENT
    class Pessoa {
        
        const nome = "Roodney";

        public function exibirNome() {
            echo "Exibindo o nome usando a refencia <b>self::nome</b> no escopo local valor da variavel: -- " . self::nome;
        }

    }

    // EXTENDENDO A CLASSE PESSOA
    class Roodney extends Pessoa {

        const nome = "Moraes";

        public function exibirNome() {
            echo "Exibindo o nome usando a refencia <b>self::nome</b> no escopo local valor da variavel: -- " . self::nome;
        }

        public function exibirNome2() {
            echo "Exibindo o nome usando a refencia <b>parent::nome</b> no escopo pai da class principal valor da variavel: -- " . parent::nome;
        }
    }

    // INSTANCIANDO A CLASSE PESSOA
    $pessoa = new Pessoa();
    $pessoa->exibirNome();

    echo "<br>";

    // INSTANCIANDO A CLASSE PESSOA
    $roodney = new Roodney();
    $roodney->exibirNome();
    echo "<br>";
    $roodney->exibirNome2();

?>