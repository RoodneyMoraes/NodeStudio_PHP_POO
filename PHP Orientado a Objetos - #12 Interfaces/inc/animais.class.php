<?php
  
    require_once 'interface.class.php';

    class DadosAnimais implements Animal {

        public $nome;

        public function andar($n) {
            $this->nome = $n;
            return $acao = "<b> andar </b>";
        }

        public function correr($n) {
            $this->nome = $n;
            return $acao = "<b> correr </b>";
        }

        public function voar($n) {
            $this->nome = $n;
            return $acao = "<b> voar </b>";
        }

        public function nadar($n) {
            $this->nome = $n;
            return $acao = "<b> nadar </b>";
        }

    }

?>