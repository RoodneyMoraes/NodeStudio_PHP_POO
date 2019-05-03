<?php

    // TRABALHANDO COM NAMESPACE
    require_once 'classes/produto.php';
    require_once 'models/produto.php';


    // 1º EXEMPLO DE CHAMAR UM NAMESPACE
    //$produto = new \classes\Produto();
    //$produto->mostrarDetalhes();

    //$produto = new \models\Produto();
    //$produto->mostrarDetalhes();


    // 2º EXEMPLO DE CHAMAR UM NAMESPACE
    //use classes\Produto;
    //use models\Produto;


    // 3º EXEMPLO DE CHAMAR UM NAMESPACE DANDO APELIDO
    use classes\Produto as productClasses;
    use models\Produto as productModels;

    $produto = new productClasses();
    $produto->mostrarDetalhes();

    echo "<br>";

    $produto = new productModels();
    $produto->mostrarDetalhes();

?>