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
        public $cor;
        public $ano;

        protected function Andar() {
            echo "Andou";
        }

        private function Parar() {
            echo "Parou";
        }

        public function mostrarAcaoParar() {
            $this->Parar();
        } 
    
    }

    class Carro extends Veiculo {

        public function ligarLimpador() {
            echo " - Limpando em 321!";
        }

    }

    class Moto extends Veiculo {

        public function darGrau() {
            echo " - Dando Grau em 321!";
        }
        
        public function mostrarAcaoAndar() {
            $this->Andar();
        } 
    }

    // INSTANCIANDO CLASSE A MOTO
    $moto = new Moto();
    echo $moto->mostrarAcaoAndar() . " | Metodo da classe - Mostrando o metodo Andar() com o modificar <b>PROTECTED</b>";

    echo "<br>";
    
    // INSTANCIANDO CLASSE A VEICULO
    $veiculo = new Veiculo();
    echo $veiculo->mostrarAcaoParar() . " | Metodo da classe - Mostrando o metodo Parar() com o modificar <b>PRIVATE</b>";

    
?>