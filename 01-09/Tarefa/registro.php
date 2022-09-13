<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
        <title>CADASTRO</title>
    </head>
    <body>
        <div class="container">
            <form action="config/script.php" method="post">
                <fieldset>
                    <legend>CADASTRO</legend>
                    
                    <label for="nm">Nome</label>
                    <input type="text" name="nome" id="nm">

                    <label for="em">Email</label>
                    <input type="email" name="email" id="em">

                    <label for="tl">Telefone</label>
                    <input type="tel" name="telefone" id="tl">

                    <button type="submit" name="recebeCod">Receber código</button>
                    <button type="submit"  name="validaCod">Validar código</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>