<?php

if (isset($_POST['enviar'])) {
     $a = $_POST['a']; 
     $b =  $_POST['b']; 
     $c = $_POST['c'];

     $valdelta = getDelta($a, $b, $c);
     $analise = analiseDelta($valdelta);

     if ($valdelta >= 0) { 
          $x1 = getX1 ($a, $b, $valdelta);
          $x2 = getX2 ($a, $b, $valdelta);
     } else {
          $x1 = $x2 = 0;
     }

     var_dump($a, $b, $c, $valdelta, $analise, $x1, $x2);
} else {
     $x1 = $x2 = $valdelta = $analise = "";
}

function getDelta($a, $b, $c) { 
     $del = pow($b, 2) - 4 * $a * $c;
     return $del;
}

function getX1 ($a, $b, $valordelta) { 
     $x1 = (-$b + sqrt ($valordelta)) / (2 * $a);
     return $x1;
}

function getX2 ($a, $b, $valordelta) { 
     $x2 = (-$b - sqrt ($valordelta)) / (2 * $a);
     return $x2;
}

function analiseDelta ($delta) {
     if ($delta == 0) return "Duas raizes reais iguais!";
     elseif ($delta > 0) return "Duas raizes reais diferentes!";
     else return "Sem solução!"; 
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
               <form action="#" method="post">
                    <fieldset>
                         <legend>Calculadora de DELTA</legend><br>

                         <label for="valA">Digite o valor de A</label><br>
                         <input type="number" name="a" id="valA"  value="<?php echo $a ?>" required><br><br>

                         <label for="valB">Digite o valor de B</label><br>
                         <input type="number" name="b" id="valB"  value="<?php echo $b ?>" required><br><br>

                         <label for="valC">Digite o valor de C</label><br>
                         <input type="number" name="c" id="valC"  value="<?php echo $c ?>" required><br><br>

                         <label for="delta">Delta</label><br>
                         <input type="text" name="delta" id="dt"  value="<?php echo $valdelta; ?>" disabled><br><br>

                         <label for="aDt">Análise do Delta</label><br>
                         <input type="text" name="Analisedelta" id="aDt" value="<?php echo $analise; ?>"  disabled><br><br>

                         <label for="x1">O valor de X1</label><br>
                         <input type="text" name="x1" id="valX1" value="<?php echo $x1 ?>" disabled><br><br>

                         <label for="x2">O valor de X2</label><br>
                         <input type="text" name="x2" id="valX2" value="<?php echo $x2; ?>" disabled><br><br>

                         <button type="submit" name="enviar">Enviar</button>
                         <button type="submit" name="apagar">Apagar</button>
                    </fieldset>
               </form>
          </div>
     </body>
</html>