<?php 
/*
H- 
Elaborar um programa que calcule e apresente o volume de uma caixa retangular, por meio da fórmula
VOLUME ← COMPRIMENTO * LARGURA * ALTURA.
*/

if(isset($_POST['enviar'])) {
     $comp = $_POST['comprimento'];
     $larg = $_POST['largura'];
     $alt = $_POST['altura'];

     $vol = $comp * $larg * $alt;
} else {
     $comp = $larg = $alt = "";
}
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
               <h1>Volume da Caixa</h1><br>
                    <form action="#" method="post">
                         <label for="cp">Comprimento</label><br>
                         <input type="number" name="comprimento" id="cp" value="<?php echo $comp ?>"  required><br><br>

                         <label for="lrg">Largura</label><br>
                         <input type="number" name="largura" id="lrg" value="<?php echo $larg ?>"  required><br><br>

                         <label for="alt">Altura</label><br>
                         <input type="number" name="altura" id="alt" value="<?php echo $alt ?>"  required><br><br>

                         <label for="prest">Volume da caixa</label><br>
                         <input type="number" id="prest"  value="<?php echo  $vol ?>" disabled><br><br>

                         <button type="submit" name="enviar">Enviar</button>
                         <button type="submit" name="apagar">Apagar</button>
               </form>
          </div>
     </body>
</html>