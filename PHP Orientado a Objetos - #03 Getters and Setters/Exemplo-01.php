<?php

    // GETTERS AND SETTERS
    class Login {

        private $email;
        private $senha;

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($e){
            $validandoEmail = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $validandoEmail;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($s){
            $this->senha = $s;
        }


        public function Logar(){
            if($this->email == "teste@teste.com.br" and $this->senha == "12345678"){
                echo "Logado com Sucesso!";
            }else{
                echo "Dados inválidos!";
            }
        }

    }

    $logar = new Login();
    $logar->setEmail("teste()/@teste.com.br");
    $logar->setSenha("12345678");
    
    //print_r($logar);

    $logar->Logar();
    echo "<br>";
    echo "Email: ". $logar->getEmail();
    echo "<br>";
    echo "Senha: ". $logar->getSenha();

?>