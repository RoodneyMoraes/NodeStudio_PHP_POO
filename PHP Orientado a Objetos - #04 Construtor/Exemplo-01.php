<?php

    // CONSTRUTOR
    class Login {

        private $email;
        private $senha;
        private $nome;

        public function __construct($email, $senha, $nome){
            $this->setNome($nome);
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($n){
            $this->nome = $n;
        }

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

    $logar = new Login("teste()/@teste.com.br","12345678", "Roodney Moraes");
    
    //print_r($logar);

    $logar->Logar();
    echo "<br>";
    echo "Nome: ". $logar->getNome();
    echo "<br>";
    echo "Email: ". $logar->getEmail();
    echo "<br>";
    echo "Senha: ". $logar->getSenha();

?>