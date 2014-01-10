<?php
    $nome = $_REQUEST["nome"];
    $senha = $_REQUEST["senha"];
    
    $salvarSenha = false;
    if(isset($_REQUEST["salvar"])) {
        $salvarSenha = true;
    }
    
    echo "o usuário tentou fazer login o nome  $nome <br/>";
    
    if($salvarSenha){
        echo "o usuário permite salvar sua senha - $senha";
    }
    else{
        echo "o usuário Não permite salvar a sua senha - ". sha1($senha);
        
    }
?>
