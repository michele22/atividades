<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])) {
        $_SESSION["cadastros"] = array();
    }
    $nome = $_REQUEST ["nome"];
    $sexo = $_REQUEST["sexo"];
    $estado = $_REQUEST["estado"];
    $observaçoes = $_REQUEST["observaçoes"];
    
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }
    
    $pessoa = array();
    $pessoa["nome"] = $nome;
    $pessoa["sexo"] = $sexo;
    $pessoa["aceito"] = $aceito;
    $pessoa["estado"] = $estado;
    $pessoa["observaçoes"] = $observaçoes;
    /* FIM - Preencher o cadastro da pessoa */
    
    /* Colocar o cadatro novo no final da lista */
    array_push($_SESSION["cadastros"], $pessoa);
        
    print "cadastro efetuado com sucesso !";
    ?>  
