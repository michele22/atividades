if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $produtos){
            $cor = $produtos["cor"];
            $aceito = $produtos["aceito"];
            $prazo = $produtos["prazo"];
            
            if($produtos != null){
                echo "<dt class='$cor'>" . $produtos["nome"] . "</dt>";
                echo "<dt class='$cor'>Cor: " . $cor . "</dd>";
                echo "<dd class='$cor'>Prazo: " . $produtos["prazo"] . "</dd>";
                
                echo "<dt>Aceito o produto: ";
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
        echo "Não existem produtos cadastrados";
    
    }
?>
