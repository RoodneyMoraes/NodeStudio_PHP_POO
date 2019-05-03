<form>
    <h3>CADASTRO DE LOGIN - CONSTRUCT!</h3>
    <input type="text" name="nome" placeholder="Informe seu nome!" required>
    <input type="email" name="email" placeholder="Informe seu email!" required>
    <input type="password" name="password" placeholder="Informe sua senha!" required>
    <button>Cadastrar</button>
</form>


<?php

    // CONSTRUTOR
    class Login {

        private $email;
        private $senha;
        private $nome;

        public function __construct($nome, $email, $senha){
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
            if($this->email == "roodneysouza@gmail.com" and $this->senha == "JSL@21061995"){
                echo "Logado com Sucesso!";
            }else{
                echo "Usuario ou senha inválidos!";
            }
        }

    }
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['password'];

    $logar = new Login($nome, $email, $senha);

    if(!empty($_GET)){
        $logar->Logar();
        echo "<br>";
        echo "Nome: ". $logar->getNome();
        echo "<br>";
        echo "Email: ". $logar->getEmail();
        echo "<br>";
        echo "Senha: ". $logar->getSenha();
    }

?>