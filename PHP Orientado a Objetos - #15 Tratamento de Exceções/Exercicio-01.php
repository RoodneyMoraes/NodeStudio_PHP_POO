<!-- FORMULARIO EM HTML-->
<form method="POST">
    <b>VALIDAÇÃO DE EMAIL</b>
    <hr>
    <input type="text" name="email" placeholder="Informe seu email">
    <button>Verificar</button>
</form>

<?php

    // TRATAMENTO DE EXCEÇÕES
    # Ocorrência anormal que afecta o funcionamento da aplicação
    # Exception é a classe base para todas Exceptions
    # message, code, file, line

    // MOSTRAR ERRO
    //ini_set("display_errors",1);

    class Validar {

        public function cadastrarEmail($email) {
            
            // VALIDANDO EMAIL
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                 throw new Exception("Este email é inválido!", 1);
            }else{
                echo "Email cadastrado com sucesso!";
            }
            
        }
    }


    // RECUPERANDO DADOS DO FORMULÁRIO
    $form_email = $_POST['email'];


    // CRIANDO UM OBJETO
    $validacao = new Validar();

    // VERIFICANDO SE A VARIAVEL SUPER GLOBAL NÃO ESTÁ VAZIA
    if(!empty($_POST)){
        // CRIANDO UM TRY CATCH
        try {
            $validacao->cadastrarEmail($form_email);
        } catch (Exception $e) {
            echo "<b>Mensagem:</b> " . $e->getMessage() . "<br>";
            echo "<b>Código:</b> " . $e->getCode() . "<br>";
            echo "<b>Linha:</b> " . $e->getLine() . "<br>";
            echo "<b>Arquivo:</b> " . $e->getFile() . "<br>";
        }
    }
        


?>