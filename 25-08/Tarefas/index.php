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
                    <legend>IMC</legend>
                    <div class="form-control">
                        <div class="row one">
                            <label for="ps">Peso</label>
                            <input type="number" name="peso" id="ps">

                            <label for="altr">Altura</label>
                            <input type="text" name="altura" id="altr">

                            <label for="imc">IMC</label>
                            <input type="number" id="imc" value="<?php echo isset($_POST['calcula']) ? $imc->getImc() : ""; ?>" disabled>

                            <button type="submit" id="btnCalcular" name="calcula">Calcular</button>
                        </div>

                        <div class="row two">
                            <input type="text" value="" disabled>
                            <input type="text" value="" disabled>
                            <input type="text" value="" disabled>

                            <button type="submit" id="btnLimpar" name="limpa">Limpar</button>
                        </div>

                        <div class="row three">
                           <div class="icon">

                           </div>
                           <div class="status">

                           </div>
                           <div class="icon">

                           </div> 
                        </div>
                    </div>
                </fieldset>
            </form>
            <div class="status">
                <p>Status da situação: <span id="resultado"><?php echo isset($_POST['calcula']) ? $imc->getStatus() : ""; ?></span></p>
            </div>
        </div>
    </body>
</html>