<?php
     if (! isset($_GET['nome'])) $_GET['nome'] = ""; //se não tiver ligada
     if (! isset($_GET['cpf'])) $_GET['cpf'] = "";
     $nome = $_GET['nome'];
     $cpf = $_GET['cpf'];
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
               <h2>Envio de Dados Usando método GET - Váriaveis Vísiveis na URL</h2><br>
               <form action="#" method="get">
                    <label for="nome">Nome:</label><br>
                    <input type="text" name="nome" id="" value="<?php echo "{$nome}"; ?>"><br><br>
                    <label for="cpf">CPF</label><br>
                    <input type="text" name="cpf" id="" placeholder="123456789-99" value="<?php echo "{$cpf}"; ?>"><br><br>
                    <button type="submit">Enviar</button><br><br><br>
                    <?php echo "Nome: {$nome} &nbsp; &nbsp; &nbsp; cpf: {$cpf}" ?> <!-- Carrega na página -->
               </form>
          </div>
     </body>
</html>