<?php

    // PEGANDO A CLASS MASTER
    require_once 'master.class.php';

    class Celular extends Equipamento {

            public function Telefonar() {
                $msg = "Telefonar!";
                return $msg;
            }

    }

   class Notebook extends Equipamento {

        public function Programar() {
            $msg = "Programar!";
            return $msg;
        }  
        
   }


    // RECUPERANDO DADOS DO FORMULARIO 
    $equipamento = $_POST['equipamento'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $cor = $_POST['cor'];
    $peso = $_POST['peso'];


    // INSTANCIANDO E SETANDO E PEGANDO OS VALORES DA CLASSE CELULAR
    $celular = new Equipamento();
    $celular->setMarca($marca);
    $celular->setAno($ano);
    $celular->setCor($cor);
    $celular->setPeso($peso);


    // INSTANCIANDO E SETANDO E PEGANDO OS VALORES DA CLASSE NOTEBOOK
    $notebook = new notebook();
    $notebook->setMarca($marca);
    $notebook->setAno($ano);
    $notebook->setCor($cor);
    $notebook->setPeso($peso);
    



   // VERIFICANDO SE EXISTE ALGUM REGISTRO
    if(isset($equipamento)) {

        echo "<h1>CADASTRO REALIZADO COM SUCESSO!</h1>";

        if($equipamento == "celular"){

            $m = $celular->getMarca();
            $a = $celular->getAno();
            $c = $celular->getCor();
            $p = $celular->getPeso();
            $acao_1 = $celular->Descarregar();
            $acao_2 = $celular->Jogar();
            $acao_3 = $celular->Telefonar();
           
            $html = "
                Equimento : <b>$equipamento</b><br>
                Marca : <b>$m</b><br>
                Ano : <b>$a</b><br>
                Cor : <b>$c</b><br>
                Peso : <b>$p</b><br>
                Ações: <b>$acao_1 e $acao_2.</b><br>
                Ação exclusiva: <b>$acao_3</b><br><br>
                <a href='../Exercicio-01.php'>Voltar</a>
            ";

            echo $html;

        }

        if($equipamento == "notebook"){

            $m = $notebook->getMarca();
            $a = $notebook->getAno();
            $c = $notebook->getCor();
            $p = $notebook->getPeso();
            $acao_1 = $notebook->Descarregar();
            $acao_2 = $notebook->Jogar();
            $acao_3 = $notebook->Programar();
           
            $html = "
                Equimento : <b>$equipamento</b><br>
                Marca : <b>$m</b><br>
                Ano : <b>$a</b><br>
                Cor : <b>$c</b><br>
                Peso : <b>$p</b><br>
                Ações: <b>$acao_1 e $acao_2.</b><br>
                Ação exclusiva: <b>$acao_3</b><br><br>
                <a href='../Exercicio-01.php'>Voltar</a>
            ";

            echo $html;

        }

    }


?>