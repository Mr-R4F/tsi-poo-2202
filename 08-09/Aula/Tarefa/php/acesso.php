<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/styleAcesso.css">
        <title>LOGIN</title>
    </head>
    <body>
        <div class="container">
            <form action="../config/php/script.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>VERIFICAÇÃO</legend>

                    <p>Digite o código de acesso recebido por e-mail para continuar</p>
                    <div class="float">
                        <input type="password" name="senha" id="sh" placeholder=" " autofocus required>
                        <label for="sh">Senha</label>
                    </div>

                    <div id="form-btn">
                        <button type="submit" name="validarCod">Validar código</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>