<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/styleRegistro.css">
        <title>CADASTRO</title>
    </head>
    <body>
        <div class="container">
            <form action="../config/php/script.php" method="post">
                <fieldset>
                    <legend>CADASTRO</legend>
                    
                    <div class="float">
                        <input type="text" name="nome" id="nm" placeholder=" " autofocus required>
                        <label for="nm">Nome</label>
                    </div>

                    <div class="float">
                        <input type="email" name="email" id="em" placeholder=" " required>
                        <label for="em">Email</label>
                    </div>

                    <div class="float">
                        <input type="tel" name="telefone" id="tl" placeholder=" " required>
                        <label for="tl">Telefone</label>
                    </div>

                    <div id="form-btn">
                        <button type="submit" name="recebeCod">Receber código</button>
                        <button type="submit" name="validaCod" formaction="acesso.php" formnovalidate>Validar código</button>
                    </div>
                </fieldset>
            </form>
            <p id="txt">Possui uma conta ? <a href="login.php">Login</a></p>
        </div>
    </body>
</html>