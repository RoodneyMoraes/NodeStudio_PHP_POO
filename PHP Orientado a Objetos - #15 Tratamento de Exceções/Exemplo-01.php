<?php

    // TRATAMENTO DE EXCEÇÕES
    # Ocorrência anormal que afecta o funcionamento da aplicação
    # Exception é a classe base para todas Exceptions
    # message, code, file, line

    // MOSTRAR ERRO
    ini_set("display_errors",1);

    class NewsLetter {

        public function cadastrarEmail($email) {
            
            // VALIDANDO EMAIL
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                 throw new Exception("Este email é inválido!", 5);
            }else{
                echo "Email cadastrado com sucesso!";
            }
            
        }
    }

    // CRIANDO UM OBJETO
    $newsletter = new NewsLetter();

    // CRIANDO UM TRY CATCH
    try {
        $newsletter->cadastrarEmail("roodney@");
    } catch (Exception $e) {
        echo "<b>Mensagem:</b> " . $e->getMessage() . "<br>";
        echo "<b>Código:</b> " . $e->getCode() . "<br>";
        echo "<b>Linha:</b> " . $e->getLine() . "<br>";
        echo "<b>Arquivo:</b> " . $e->getFile() . "<br>";
    }
    


?>