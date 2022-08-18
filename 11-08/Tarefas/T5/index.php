<?php 
/*
E- 
Efetuar o cálculo e a apresentação do valor de uma prestação em atraso, utilizando a fórmula
PRESTACAO ← VALOR + (VALOR * TAXA/100) * TEMPO
*/

if(isset($_POST['enviar'])) {
     $val = $_POST['valor'];
     $tax = $_POST['taxa'];
     $tmp = $_POST['tempo'];

     $prest = $val + ($val * ($tax / 100)) * $tmp;
} else {
     $val = $tax = $tmp = "";
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
               <h1>Calculadora de prestações</h1><br>
               <form action="#" method="post">
                    <label for="val">Valor</label><br>
                    <input type="number" name="valor" id="val" value="<?php echo $val ?>"  required><br><br>

                    <label for="tx">Taxa</label><br>
                    <input type="number" name="taxa" id="tx" value="<?php echo $tax ?>"  required><br><br>

                    <label for="tmp">Tempo</label><br>
                    <input type="number" name="tempo" id="tmp" value="<?php echo $tmp ?>"  required><br><br>

                    <label for="prest">Sua prestação  é: (R$)</label><br>
                    <input type="number" id="prest"  value="<?php echo  $prest ?>" disabled><br><br>

                    <button type="submit" name="enviar">Enviar</button>
                    <button type="submit" name="apagar">Apagar</button>
               </form>
          </div>
     </body>
</html>