<?php
    require_once('script.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
        <title>POO - II</title>
    </head>
    <body>
        <div class="container">
            <form action="#" method="post">
                <fieldset>
                    <legend>Calculadora de IMC</legend>
                    <div class="form-control">
                        <div class="col one">
                            <div class="form-item">
                                <div class="item">
                                    <label for="ps">Peso</label>
                                    <input type="number" name="peso" id="ps" value="<?php echo isset($_POST['calcula']) ? $imc->peso : ""; ?>">
                                </div>
                            </div>
                            <div class="icon">
                                <?php 
                                    switch ($imc->getImc() != 0) {
                                        case $imc->getImc() >= 40 || $imc->getImc() <= 39.99 && $imc->getImc() >= 30.00 || $imc->getImc() <= 29.99 && $imc->getImc() >= 25.00:
                                            echo '<img src="assets/triste.jpg" alt="" width="114">';
                                            break;
                                        
                                        case $imc->getImc() <= 24.99 && $imc->getImc() >= 18.50:
                                            echo '<img src="assets/feliz.jpg" alt="" width="114">';
                                            break;

                                        case $imc->getImc() < 18.50:
                                            echo '<img src="assets/feliz.jpg" alt="" width="114">';
                                            break;

                                        default:
                                            break;
                                    }
                                ?>
                            </div>
                        </div>
                        
                        <div class="col two">
                            <div class="form-item">
                                <div class="item">
                                    <label for="altr">Altura</label>
                                    <input type="text" name="altura" id="altr" value="<?php echo isset($_POST['calcula']) ? $imc->altura : ""; ?>">
                                </div>
                                <div class="item">
                                    <label for="imc">IMC</label>
                                    <input type="number" id="imc" value="<?php echo isset($_POST['calcula']) ? $imc->getImc() : ""; ?>" disabled>
                                </div>
                            </div>

                            <div class="status" style="background-color: red;">
                                <p>Status da situação:  </p>
                                <span id="resultado"><?php echo isset($_POST['calcula']) ? $imc->getStatus() : ""; ?></span>
                            </div>
                        </div>

                        <div class="col three">
                            <div class="form-btn">
                                <button type="submit" id="btnCalcular" name="calcula">Calcular</button>
                                <button type="submit" id="btnLimpar" name="limpa">Limpar</button>
                            </div>

                            <div class="icon">
                                <?php 
                                    switch ($imc->getImc() != 0) {
                                        case $imc->getImc() >= 40 || $imc->getImc() <= 39.99 && $imc->getImc() >= 30.00 || $imc->getImc() <= 29.99 && $imc->getImc() >= 25.00:
                                            echo '<img src="assets/triste.jpg" alt="" width="114">';
                                            break;
                                        
                                        case $imc->getImc() <= 24.99 && $imc->getImc() >= 18.50:
                                            echo '<img src="assets/feliz.jpg" alt="" width="114">';
                                            break;

                                        case $imc->getImc() < 18.50:
                                            echo '<img src="assets/triste.jpg" alt="" width="114">';
                                            break;

                                        default:
                                            break;
                                    }
                                ?>
                            </div> 
                        </div>   
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>