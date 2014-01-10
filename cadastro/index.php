<style>
    .m{
        color:Blue;
    }
    .f{
        color:Yellow;
    }
</style>

<?php
    require_once("menu.php");

    session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $pessoa){
            $sexo = $pessoa["sexo"];
            $aceito = $pessoa["aceito"];
            $estado = $pessoa["estado"];
            $observaçoes = $pessoa["observaçoes"];
            
            if($pessoa != null){
                echo "<dt class='$sexo'>" . $pessoa["nome"] . "</dt>";
                echo "<dt>Sexo: " . $sexo . "</dd>";
                echo "<dd>Estado: " . $pessoa["estado"] . "</dd>";
                echo "<dd>Observaçoes:" . $observaçoes . "</dd>";
                
                echo "<dt>Aceita o contrato: ";
                if($aceito){
                    echo "Sim";
                    }
                    else{
                        echo "Não";
                    }
                    echo "</dd>";
                    
                    
            }
        }
        echo "</dl>";
    }
    else{
        echo "Não existem pessoas cadastradas";
    
    }
?>
