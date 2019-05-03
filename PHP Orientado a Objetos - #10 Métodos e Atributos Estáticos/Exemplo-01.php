<?php
    // METODOS E ATRIBUTOS ESTATICOS
    class Login {

        public static $user;

        public static function verificarLogin(){
            echo "O usuário ".self::$user." está logado!";
        }
        
        public function sairSistema() {
            echo "<hr> O usuário ".self::$user." deslogou!";
        }
    }

    // ACESSANDO METODOS E ATRIBUTOS ESTATICOS
    Login::$user = "Roodney";
    Login::verificarLogin();

    // INSTANCIANDO A CLASS LOGIN
    $login = new Login();
    $login->sairSistema()

?>