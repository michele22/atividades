<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
       echo "Não existem produto para editar";
    }
    else{
        $id = $_REQUEST["id"];
        $nomeNovo = $_REQUEST ["nome"];
        $cor = $_REQUEST ["cor"];
        $prazo = $_REQUEST ["prazo"];
        $detalhes = $_REQUEST ["detalhes"];
        
        $aceito = false;
        if(isset($_REQUEST["aceito"])){
            $aceito = true;
        }
        
        $produtos = array();
        $produtos["nome"] = $nomeNovo;
        $produtos["cor"] = $cor;
        $produtos["prazo"] = $prazo;
        $detalhes["detalhes"] = $detalhes;
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $produtos;   
       
        echo "Edição efetuada com sucesso!";
    }


?>
