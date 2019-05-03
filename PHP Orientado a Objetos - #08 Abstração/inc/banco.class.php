<?php
    // CLASSE ABSTRATA
    require_once 'abstract.class.php';

    class Itau extends Banco {

        public function Sacar($s) {
            
            if($s > $this->saldo){
                echo "<hr> Você não tem esse saldo R$ $s, seu saldo atual é R$ ".$this->saldo."!";
            }else {
                $this->saldo -= $s;
                echo "<hr> Você sacou: R$ ".$s;
            }
            
        }

        public function Depositar($d) {
            $this->saldo += $d;
            echo "<hr> Você depositou: R$ ".$d;
        }
    }

    class Bradesco extends Banco {

        public function Sacar($s) {
           
            if($s > $this->saldo){
                echo "<hr> Você não tem esse saldo R$ $s, seu saldo atual é R$ ".$this->saldo."!";
            }else {
                $this->saldo -= $s;
                echo "<hr> Você sacou: R$ ".$s;
            }

        }

        public function Depositar($d) {
            $this->saldo += $d;
            echo "<hr> Você depositou: R$ ".$d;
        }
    }

?>