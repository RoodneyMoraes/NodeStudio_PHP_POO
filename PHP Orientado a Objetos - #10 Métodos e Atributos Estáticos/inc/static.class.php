<?php
    // METODOS E ATRIBUTOS ESTATICOS
    class Login {

        public static $user;

        public static function verificarLogin(){
            echo "<hr> O usuário ".self::$user." está logado!";
        }
        
        public function sairSistema() {
            echo "<hr> O usuário ".self::$user." deslogou!";
        }
    }

?>