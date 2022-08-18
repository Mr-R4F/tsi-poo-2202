<?php
/*
A -
Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de
conversão é F ← (9 * C + 160) / 5, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius.
*/

//#1
if (isset($_POST['enviar'])) {
	$c =  (double) $_POST['temp'];
	$f = (9 * $c + 160) / 5;
} else {
	$f = "";
}

/* #2
	if( isset($_POST['temp'])
	$c =  (double) $_POST['temp'];
	$f = (9 * $c + 160) / 5;
*/
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
			<h1>Conversor de Temperatura</h1><br>
			<form action="#" method="post">
				<label for="celsius">Celsius</label><br>
				<input type="number" name="temp" id="celsius" value="<?php echo $c?>" required><br><br>

				<label for="fahrenheit">Fahrenheit</label><br>
				<input type="text" id="fahrenheit"  value="<?php echo $f ?>" disabled><br><br>
				
				<button type="submit" name="enviar">Enviar</button>
				<button type="submit" name="apagar">Apagar</button>
			</form>
		</div>
	</body>
</html>