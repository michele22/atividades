<html>
    <head>
        <title>Cadastro de pessoas</title> 
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="remover.php" method="post">
            <label>Digite código da pessoa para editar:</label>
            <br/>
            <input type="text" name="id" />
            <br/>
            <label>Digite o novo nome da pessoa:</label>
            <br/>
            <?php require_once("campos_pessoa.php"); ?>
            <input type="submit" value="Editar" />
        </form>
    </body>
</html>

<?php
    session_start();
    
    if(isset($_SESSION["cadastros"])) {
        
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id=> $pessoa){
            if($pessoa!=null){
                print "[$id] => " .  $pessoa["nome"] . "<br/>";
            }
        }
   
    }
    else{
        print "Não existe pessoas cadastradas";
        
    }
