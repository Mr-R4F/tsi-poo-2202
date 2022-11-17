<?php

require_once 'poligono.class.php';
require_once 'pentagono.class.php';
require_once 'circulo.class.php';
require_once 'triangulo.class.php';

$lado = $_POST['lado'];
$apotema = $_POST['apotema'];
$raio = $_POST['raio'];
$base = $_POST['base'];
$altura = $_POST['altura'];

if (isset($_POST['pent'])) {
    $obj = new Pentagono($lado, $apotema);
    $obj->calcularArea($obj);
}

if (isset($_POST['tri'])) {
    $obj = new Triangulo($base, $altura);
    $obj->calcularArea($obj);
}

if (isset($_POST['circ'])) {
    $obj = new Circulo($raio, pi());
    $obj->calcularArea($obj);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            zoom: 220%;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            justify-content: center;
        }

        .container, fieldset {
            display: flex;
        }

        fieldset {
           flex-direction: column; 
           width: 400px; 
           padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="#" method="post">
            <fieldset>
                <legend>FORM</legend>

                <span>Pentágono</span>
                <label for="ptgL">Lado</label>
                <input type="text" name="lado" id="ptgL" value="<?php echo isset($lado) ? $lado : ''?>">

                <label for="ptgA">Ápotema</label>
                <input type="text" name="apotema" id="ptgA" value="<?php echo isset($apotema) ? $apotema : ''?>">

                <input type="text" name="#" value="<?php  echo $obj instanceof Pentagono ? $obj->mostrarArea($obj) : ''; ?>" disabled><br>

                <span>Triângulo</span>
                <label for="tr">Base</label>
                <input type="text" name="base" id="triB" value="<?php echo isset($base) ? $base : ''?>">

                <label for="tr">Altura</label>
                <input type="text" name="altura" id="triA" value="<?php echo isset($altura) ? $altura : ''?>">

                <input type="text" name="#" value="<?php  echo $obj instanceof Triangulo ? $obj->mostrarArea($obj) : ''; ?>" disabled><br>

                <span>Círculo</span>
                <label for="cir">Raio</label>
                <input type="text" name="raio" id="cirR" value="<?php echo isset($raio) ? $raio : ''?>">

                <input type="text" name="#" value="<?php  echo $obj instanceof Circulo ? $obj->mostrarArea($obj) : ''; ?>" disabled><br>

                <button type="submit" name="pent">Calcular área do pentagono</button>
                <button type="submit" name="tri">Calcular área do triângulo</button>
                <button type="submit" name="circ">Calcular área do círculo</button>
            </fieldset>
    </form>
    </div>
</body>
</html>