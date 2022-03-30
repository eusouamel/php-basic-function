<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
    class escola{
             

        function media($nota1, $nota2){
            echo "<br> Nota 1: " .  $nota1;
            echo "<br> Nota 2: " .  $nota2;

            echo "<br>Média: " . (($nota1 + $nota2)/2);
            if((($nota1 + $nota2)/2)< 5){
                echo "<br><br>Aluno reprovado!";
            }
            if((($nota1 + $nota2)/2) == 5){
                echo "<br><br>Aluno de recuperação!";
            }
            if((($nota1 + $nota2)/2) > 5){

                echo "<br><br>Parabéns! Aluno aprovado.";
            }
        
           
        }
       

    }
   
    $imprimir = new escola;

    $imprimir -> media(5,5);
    
    



    ?>
    
</body>
</html>

