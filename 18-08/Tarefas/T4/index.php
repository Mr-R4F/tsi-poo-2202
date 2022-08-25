<?php
/*
Monte um script php com funções contendo parâmetros para calcular o Diâmetro de uma
circunferência Diam = Perímetro / 3.14, calcular o raio = Diam / 2 e finalmente a área = raio
* raio * pi. Crie um formulário para que o usuário possa digitar o valor do Perímetro da
circunferência e também para exibir os resultados.
*/

if (isset($_POST['enviar'])){
    $p = $_POST['p']; //perímetro
    $d = $p / pi(); //diâmetro
    $r = $d / 2; //raio
    $a = pi() * pow($r, 2); //área
} else {
    $p = $d = $r = $a = "";
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
                    <legend>Calculadora de <br> circunferência</legend><br>

                    <label for="perim">Digite o perímetro</label><br>
                    <input type="number" name="p" id="perim" value="<?php echo $p ?>" required><br><br>

                    <label for="diam">Diâmetro</label><br>
                    <input type="number" name="d" id="diam" value="<?php echo $d ?>" disabled><br><br>

                    <label for="raio">Raio</label><br>
                    <input type="number" name="r" id="raio" value="<?php echo $r ?>" disabled><br><br>

                    <label for="area">Área</label><br>
                    <input type="number" name="a" id="area" value="<?php echo $a ?>" disabled><br><br>

                    <button type="submit" name="enviar">Enviar</button>
                    <button type="submit" name="apagar">Apagar</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>