<form>
    <h1>SISTEMA DE LOGIN!</h1>
    Nome:
        <input type="text" name="nome" placeholder="Digite seu nome!" required>
    Ação:
    <select name="acao" id="acao" required>
        <option value="" selected disabled>Escolha uma Ação</option>
        <option value="logar">Logar</option>
        <option value="deslogar">Deslogar</option>
    </select>
        <button>Logar</button>
        <button type="reset">Limpar dados</button>
        <a href="Exercicio-01.php">Voltar</a>
</form>


<?php

    // CLASSE ESTATICA
    require_once 'inc/static.class.php';

    // RECUPERANDO DADOS DO FORMULARIO
    $nome = $_GET['nome'];
    $acao = $_GET['acao'];

    if(!empty($nome)){

        if($acao == "logar"){
            // ACESSANDO METODOS E ATRIBUTOS ESTATICOS
            Login::$user = $nome;
            Login::verificarLogin();
        }

        if($acao == "deslogar"){
            // INSTANCIANDO A CLASS LOGIN
            Login::$user = $nome;
            $login = new Login();
            $login->sairSistema();
        }

    }
?>