<?php
/*
B-
Ler uma temperatura em graus Fahrenheit e apresentá-la convertida em graus Celsius. A fórmula de
conversão é C ← (F - 32) * (5/9) , sendo F a temperatura em Fahrenheit e C a temperatura em Celsius.
*/

//#1
if (isset($_POST['enviar'])) {
     $f = (double) $_POST['temp']; 
     $c = ($f - 32) * (5 / 9);
} else {
     $c = "";
}

/* #2
if (! isset($_POST['temp'])) $_POST['temp'] = "";
$f = (double) $_POST['temp']; 
$c = ($f - 32) * 5 / 9;
*/
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="stylesheet" href="../CSS/style.css">
          <title>Document</title>
     </head>
     <body>
          <div class="container">
               <h1>Conversor de Temperatura v2</h1><br>
               <form action="#" method="post">
                    <label for="fahrenheit">Fahrenheit</label><br>
                    <input type="number" name="temp" id="fahrenheit" value="<?php echo $f?>" required><br><br>

                    <label for="celsius">Celsius</label><br>
                    <input type="text" name="result" id="celsius"  value="<?php echo $c?>" disabled><br><br>
                              
                    <button type="submit" name="enviar">Enviar</button>
                    <button type="submit" name="apagar">Apagar</button>
               </form>
          </div>
     </body>
</html>