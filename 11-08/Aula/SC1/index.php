<?php
/*
$x = 10;
var_dump(isset($x) ? "O valor da variável é: {$x}" : "Variavel não existe"); //Checa se a variável existe ou está ON.
echo "<br>";
var_dump(empty($x) ? "\n O valor da variável é: {$x}" : "\n O valor da variável não é FALSE"); //checa se o valor do $x é FALSO
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
               <h3>Meu primeiro Form Modelo</h3><br>
               <form action="#" method="post">
                    <label for="">Nome:</label><br>
                    <input type="text" name="nome" id="" size="40" maxlength="40"><br>

                    <label for="">Idade:</label><br>
                    <input type="text" name="idade" id=""><br><br>

                    <label for="">Telefone:</label><br>
                    <input type="text" name="telefone" id=""><br>

                    <label for="redacao">Minha redação:</label><br>
                    <textarea name="redacao" id="" cols="30" rows="10"></textarea><br><br>

                    <button type="submit">Cadastrar</button>
                    <button type="reset">Limpar</button>
               </form>
          </div>
     </body>
</html>