<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando</title>
</head>
<body>
    <h1>PHP</h1>
    
    <!-- php -->
    <?php

        $nome = 'Carolina';
         // echo com ''(aspas simples) concatenar não funciona VS echo"" (aspas duplas): funciona 
        echo "<h1>Bem vinda $nome</h1>";

        // fazendo contas
        $a = 10;
        $b= 20;
        $soma = $a + $b;
        
        echo "<h1>A soma é $soma </h1>";

        // CONDICIONAIS

        $status = true;
        if($status){
            echo "Esta ativo<br>";
        }

        else{
            echo "Esta desligado";
        }


        // VARIAVEIS

        for($i=1;$i<=10;$i++){
            if($i % 2 == 0){
                echo "$i <br>";
            }
        }

    ?>
    
</body>
</html>