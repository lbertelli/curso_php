<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		<?php

			//int
			$valor_inteiro = 1 * 4;
			echo $valor_inteiro;

			echo '<br />';

			$valor_inteiro = $valor_inteiro * 2;
			echo $valor_inteiro;

			echo '<br />';
			//float
			$valor_fracionado = -7.7;
			echo $valor_fracionado;

			echo '<br />';

			//boolean
			$estado = true;//false
			echo $estado;

			echo '<br />';

			//strings
			$texto = "Curso de php - $valor_inteiro";
			echo $texto;

			//arrays

			//$mensagens_divertidas[1] = 'banana';
			//$mensagens_divertidas[2] = 'uva';
			//$mensagens_divertidas[3] = 'abacaxi';
			//$mensagens_divertidas[4] = 'laranja';

			//
			$mensagens_divertidas = array(1 => 'banana', 2 => 'abacaxi', 3 => 'uva', 3 => 'laranja');

			var_dump($mensagens_divertidas);

		?>
	</body>
</html>
