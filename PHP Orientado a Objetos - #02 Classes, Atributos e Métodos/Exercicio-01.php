<form>

    <input type="text" name="nome" placeholder="Digite seu nome!">
    <input type="number" name="idade" placeholder="Digite sua idade!">

    <input type="submit" value="Enviar">
    <a href="Exercicio-01.php">Limpar</a>
    
</form>



<?php

    // CRIANDO CLASSES, ATRIBUTOS E METODOS
    class Formulario {

        public $nome;
        public $idade;

        public function dados($n, $i){
            $this->nome = $n;
            $this->idade = $i;

            return $n . " e você tem " . $i . " anos!<br>";
        }
    }

    $pessoa = new Formulario();
    $resultado = $pessoa->dados($_GET['nome'], $_GET['idade']);

    if(isset($_GET['nome']) and isset($_GET['idade'])){
        echo $resultado;
    }

?>