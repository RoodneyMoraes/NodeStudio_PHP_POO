<?php

    // HERANÇA É UM RECURSO QUE PERMITE QUE CLASSES COMPARTILHE ATRIBUTOS E METODOS
    // AFIM DE APROVEITAR CODIGOS OU COMPORTAMENTOS GENERALIZADOS
    class Veiculo {

        public $modelo;
        public $cor;
        public $ano;

        public function Andar() {
            echo "Andou";
        }

        public function Parar() {
            echo "Parou";
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
        
    }


    $carro = new Carro();
    $carro->modelo = "Gol";
    $carro->cor = "Vermelho";
    $carro->ano = 2017;
    var_dump($carro);
    $carro->Andar();
    $carro->ligarLimpador();

    echo "<br>";

    $moto = new Moto();
    $moto->modelo = "Honda Biz";
    $moto->cor = "Preto";
    $moto->ano = 2010;
    var_dump($moto);
    $moto->Parar();
    $moto->darGrau();




?>