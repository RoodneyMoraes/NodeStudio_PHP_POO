<?php

    /*
    // PUBLIC - FARÁ COM QUE NÃO HAJA OCULTAÇÃO NUNHUMA, TODA PROPRIEDADE
    OU METODO DECLARADO COM PUBLIC SERÃO ACESSIVEIS POR TODOS QUE QUISEREM ACESSA-LOS.

    // PROTECTED - VISIBILIDADE PROTECTED FAZ COM QUE TODOS OS HERDEIROS VEJAM AS PROPRIEDADES 
    OU METODOS PROTEGIDOS COMO SE FOSSEM PUBLICOS.

    // PRIVATE - AO CONTRARIO DO PUBLIC, ESSE MODIFICADOR FAZ COM QUE QUALQUER METODO OU PROPRIEDADE
    SEJA VISIVEL SÓ E SOMENTE PELA CLASSE QUE O DECLAROU.

    */
    
    class Veiculo {

        public $modelo;
        protected $cor;
        private $ano;

        public function Andar() {
            echo "Andou";
        }

        public function Parar() {
            echo "Parou";
        }

        public function getAno() {
            return $this->ano;
        }

        public function setAno($a) {
            $this->ano = $a;
        }
    
    }

    class Carro extends Veiculo {

        public function getCor() {
            return $this->cor;
        }

        public function setCor($c){
            $this->cor = $c;
        }

        public function ligarLimpador() {
            echo " - Limpando em 321!";
        }

    }

    class Moto extends Veiculo {

        public function darGrau() {
            echo " - Dando Grau em 321!";
        }
        
    }

    // INSTANCIANDO CLASSE A MOTO
    $moto = new Moto();
    $moto->modelo = "HONDA CG 150";
    echo "Exibindo o modelo da moto usando o modificador <b>PUBLIC</b> - " . $moto->modelo;

    echo "<br>";

    // INSTANCIANDO CLASSE A CARRO
    $carro = new Carro();
    $carro->setCor("Azul");
    echo "Exibindo a cor do carro usando o modificador <b>PROTECTED</b> - " . $carro->getCor();

    echo "<br>";

    // INSTANCIANDO CLASSE A VEICULO
    $veiculo = new Veiculo();
    $veiculo->setAno("1999");
    echo "Exibindoo ano do veiculo usando o modificador <b>PRIVATE</b> - " . $veiculo->getAno();

    
?>