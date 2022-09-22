<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/styleIndex.css">
        <title>CADASTRO</title>
    </head>
    <body>
        <div class="container">
            <form action="../config/php/script2.php" method="post">
                <fieldset>
                    <legend>CADASTRO DE CLIENTE</legend>
                    
                    <div class="float">
                        <input type="text" name="nome" id="nm" placeholder=" " autofocus required>
                        <label for="nm">Nome</label>
                    </div>

                    <div class="float">
                        <input type="email" name="email" id="em" placeholder=" " required>
                        <label for="em">Email</label>
                    </div>

                    <div class="float">
                        <input type="tel" name="celular" id="cl" placeholder=" " required>
                        <label for="cl">Celular</label>
                    </div>

                    <div class="float">
                        <input type="text" name="sexo" id="sx" placeholder=" " required>
                        <label for="sx">Sexo</label>
                    </div>

                    <div class="float">
                        <input type="text" name="rg" id="rg" placeholder=" " required>
                        <label for="rg">RG</label>
                    </div>

                    <div class="float">
                        <input type="text" name="cpf" id="cpf" placeholder=" " required>
                        <label for="cpf">CPF</label>
                    </div>

                    <div id="form-btn">
                        <button type="submit" name="enviar">Enviar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>