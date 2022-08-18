<?php
/*
C- 
Calcular e apresentar o valor do volume de uma lata de óleo, utilizando a fórmula:
 Volume : PI * Raio  ²  * Altura
*/

//#1
if (isset($_POST['enviar'])) {
     $r = $_POST['raio'];
     $a = $_POST['altura'];
     $vol = pi() * pow($r, 2) * $a;
} else {
     $vol = "";
}

/* #2
if (! isset($_POST['val'])) $_POST['val'] = ""; {
     $r = $_POST['raio'];
     $h = $_POST['altura'];
     $vol = pi() * ($r * $r) * $a;
     var_dump($vol);
}
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
               <h1>Volume da lata</h1><br>
                    <form action="#" method="post">
                         <label for="raio">Raio</label><br>
                         <input type="number" name="raio" value="<?php echo $r ?>" required><br><br>

                         <label for="altura">Altura</label><br>
                         <input type="number" name="altura" value="<?php echo $a ?>" required><br><br>

                         <label for="res">Resultado</label><br>
                         <input type="text"  id="res" value="<?php echo $vol ?>" disabled><br><br>
                         
                         <button type="submit" name="enviar">Enviar</button>
                         <button type="submit" name="apagar">Apagar</button>
                    </form>
          </div>
     </body>
</html>