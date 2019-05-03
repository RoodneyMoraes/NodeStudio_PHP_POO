<?php

    // HERANÇA É UM RECURSO QUE PERMITE QUE CLASSES COMPARTILHE ATRIBUTOS E METODOS
    // AFIM DE APROVEITAR CODIGOS OU COMPORTAMENTOS GENERALIZADOS
    class Equipamento {

        private $ano;
        private $marca;
        private $cor;
        private $peso;

        public function getAno() {
            return $this->ano;
        }

        public function setAno($a){
            $this->ano = $a;
        }

        public function getMarca() {
            return $this->marca;
        }

        public function setMarca($m) {
            $this->marca = $m;
        }

        public function getCor() {
            return $this->cor;
        }

        public function setCor($c) {
            $this->cor = $c;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function setPeso($p) {
            $this->peso = $p;
        }



        public function Descarregar() {
            $msg = "Descarregar";
            return $msg;
        }

        public function Jogar() {
            $msg = "Jogar";
            return $msg;
        }

    }

  
?>