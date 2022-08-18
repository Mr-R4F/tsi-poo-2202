<?php
     if (! isset($_POST['nome'])) $_POST['nome'] = "";
     if (! isset($_POST['nota1'])) $_POST['nota1'] = 0;
     if (! isset($_POST['nota2'])) $_POST['nota2'] = 0;
     if (! isset($_POST['oper'])) $_POST['oper'] = "";

     $nome = $_POST['nome'];
     $nota1 = (double) $_POST['nota1'];  //coersão conversão de uma var p/ outra. (double) - armazena números grandes; (64bits)
     $nota2 = (double) $_POST['nota2'];
     $media = ($nota1 + $nota2) / 2;

     if ($_POST['oper'] == "limpar") $nome = $nota = $nota2 = $media = "";
     //open cv - IA
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
               <h1>Cálculo da Média Aritmética</h1>
               <form action="#" method="post">
                    <input type="hidden" name="oper">
                    <input type="text" name="nome" id="" placeholder="Nome do Aluno" value="<?php echo $nome;?>"><br>
                    <input type="text" name="" id="" value="<?php echo $nota1;?>"><br>
                    <input type="text" name="" id="" value="<?php echo $nota2;?>"><br>
                    <label for="vlmedia">Valor da média: <?php echo "{$media}";?></label><br>
                    <button type="submit">Calcular</button>
                    <button onclick="this.oper.value='Limpar'; submit();">Nova Média</button>
               </form>
          </div>
     </body>
</html>