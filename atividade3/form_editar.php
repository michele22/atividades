<html>
    <head>
        <title>Cadastro de Produto</title> 
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="remover.php" method="post">
            <label>Digite código do produto para editar:</label>
            <br/>
            <input type="text" name="id" />
            <br/>
            <label>Digite o novo nome do produto:</label>
            <br/>
            <?php require_once("campos_produtos.php"); ?>
            <input type="submit" value="Editar" />
        </form>
    </body>
</html>

<?php
    session_start();
    
    if(isset($_SESSION["cadastros"])) {
        
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id=> $produtos){
            if($produtos!=null){
                print "[$id] => " .  $produtos["nome"] . "<br/>";
            }
        }
   
    }
    else{
        print "Não existe produto cadastrados";
        
    }
