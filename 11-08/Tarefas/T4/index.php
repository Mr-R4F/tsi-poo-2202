<?php
/*
D- 
Efetuar o cálculo da quantidade de litros de combustível gasta em uma viagem, utilizando um
automóvel que faz 12 Km por litro. Para obter o cálculo, o usuário deve fornecer o tempo gasto
(TEMPO) e a velocidade média (VELOCIDADE) durante a viagem. Desta forma, será possível obter a
distância percorrida com a fórmula DISTANCIA ← TEMPO * VELOCIDADE. Possuindo o valor da
distância, basta calcular a quantidade de litros de combustível utilizada na viagem com a fórmula
LITROS_USADOS ← DISTANCIA / 12. Ao final, o programa deve apresentar os valores da velocidade
média (VELOCIDADE), tempo gasto na viagem (TEMPO), a distancia percorrida (DISTANCIA) e a
quantidade de litros (LITROS_USADOS) utilizada na viagem.
*/

if (isset($_POST['enviar'])) {
     $tmp = $_POST['tempo'];
     $vel = $_POST['velocidade'];
     $dist =  $tmp *  $vel;
     $litros = $dist / 12;
} else {
     $dist = $litros = $vel =  "";
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
               <h1>Calculadora de Combustível</h1><br>
                    <form action="#" method="post">
                         <label for="tmp">Tempo Gasto</label><br>
                         <input type="number" name="tempo"  value="<?php echo $tmp ?>"  id="tmp" required><br><br>

                         <label for="vel">Velocidade Média</label><br>
                         <input type="text" name="velocidade"  value="<?php echo $vel ?>" id="vel" required><br><br>

                        <label for="dis">Distancia percorrida</label><br>
                         <input type="number" name="velocidade" id="dis"  value="<?php echo $dist ?>" disabled><br><br>

                         <label for="res">Qntd. de litros utilizados</label><br>
                         <input type="text" id="res"  value="<?php echo $litros ?>" disabled><br><br>
                         
                         <button type="submit" name="enviar">Enviar</button>
                         <button type="submit" name="apagar">Apagar</button>
               </form>
          </div>
     </body>
</html>