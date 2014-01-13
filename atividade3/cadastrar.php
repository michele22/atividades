<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])) {
        $_SESSION["cadastros"] = array();
    }
    $nome = $_REQUEST ["nome"];
    $cor = $_REQUEST["cor"];
    $prazo = $_REQUEST["prazo"];
    
    
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }
    
    $produtos = array();
    $produtos["nome"] = $nome;
    $produtos["cor"] = $cor;
    $produtos["aceito"] = $aceito;
    $produtos["prazo"] = $prazo;
    /* FIM - Preencher o cadastro da produtos */
    
    /* Colocar o cadatro novo no final da lista */
    array_push($_SESSION["cadastros"], $produtos);
        
    print "Cadastro efetuado com sucesso !";
    ?>  
