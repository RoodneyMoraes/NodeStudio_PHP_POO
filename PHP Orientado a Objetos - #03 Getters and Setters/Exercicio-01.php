<form>

    <input type="text" name="nome" placeholder="Digite seu nome!" required>
    <input type="number" name="idade" placeholder="Digite sua idade!" required>

    <input type="submit" value="Enviar">
    <a href="Exercicio-01.php">Limpar</a>
    
</form>



<?php

 // GETTERS AND SETTERS
 class Formulario {

    private $nome;
    private $idade;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        if(empty($n)){
            echo "O campo nome está vazio!<br>";
        }
        $this->nome = $n;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($i){
        if(empty($i)){
            echo "O campo idade está vazio!<br>";
        }
        $this->idade = $i;
    }


    public function dados(){
        $n = $this->nome;
        $i = $this->idade;

        if(!empty($n) and !empty($i)){
            $r = $n . " e você tem " . $i . " anos com os getters e setters!<br>";
        }
       
        return $r;
    }

}



    $pessoa = new Formulario();
    $pessoa->setNome($_GET['nome']);
    $pessoa->setIdade($_GET['idade']);
    $resultado = $pessoa->dados();

    if(isset($_GET['nome']) and isset($_GET['idade'])){
        echo $resultado;
    }

?>