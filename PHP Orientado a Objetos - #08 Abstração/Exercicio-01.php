<form>
    <h1>CAIXA ELETRONICO DE BANCOS - MOGI DAS CRUZES</h1>
    Banco:
        <select name="banco" id="banco" required>
            <option value="" selected disabled>Escolha um Banco</option>
            <option value="itau">Itau</option>
            <option value="bradesco">Bradesco</option>
        </select>
    Ação:
        <select name="acao" id="acao" required>
            <option value="" selected disabled>Escolha uma Ação</option>
            <option value="depositar">Depostar</option>
            <option value="sacar">Sacar</option>
            <option value="saldo">Verificar Saldo</option>
        </select>
    Valor:
        <input type="text" name="valor" placeholder="Informe o valor!">
        <button>Enviar dados</button>
        <button type="reset">Limpar dados</button>
        <a href="Exercicio-01.php">Voltar</a>
</form>

<?php

    // CLASSE ABSTRATA
    require_once 'inc/banco.class.php';

    // RECUPERANDO VALORES
    $banco = $_GET['banco'];
    $acao = $_GET['acao'];
    $valor = $_GET['valor'];

    // INSTANCIANDO A CLASSE ITAU
    $itau = new Itau();
    $itau->setSaldo(1000);

    $bradesco = new Bradesco();
    $bradesco->setSaldo(5020);

    // VERIFICANDO QUAL BANCO FOI ESCOLHIDO
    if($banco == "itau"){

        if($acao == "saldo"){
            echo "<hr> Saldo Atual: R$ ".$itau->getSaldo();
        }else{
            echo "<hr> Saldo Anterior: R$ ".$itau->getSaldo();
            if($acao == "sacar")$itau->Sacar($valor);
            if($acao == "depositar")$itau->Depositar($valor);
            echo "<hr> Saldo Atual: R$ ".$itau->getSaldo();
        }
    }

    // VERIFICANDO QUAL BANCO FOI ESCOLHIDO
    if($banco == "bradesco"){

        if($acao == "saldo"){
            echo "<hr> Saldo Atual: R$ ".$bradesco->getSaldo();
        }else{
            echo "<hr> Saldo Anterior: R$ ".$bradesco->getSaldo();
            if($acao == "sacar")$bradesco->Sacar($valor);
            if($acao == "depositar")$bradesco->Depositar($valor);
            echo "<hr> Saldo Atual: R$ ".$bradesco->getSaldo();
        }

    }

    

?>