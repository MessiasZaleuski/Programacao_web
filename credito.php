<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>.::Programação Web::.</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula.png" alt="Topo">
	</div>
	<br><br><br><br>
	<h1>PROGRAMAÇÃO WEB: HTML, CSS, PHP</h1><hr><br>

	<div class="pesquisa">
		<h6>Messias Zaleuski de Meira</h6>
	</div>

	<div class="conteudo">
		<?php
		
		$nome = $_POST["nome"];
		$renda = $_POST["renda"];

		echo "Ólá $nome muito obrigado por seu contato.<br>";
		if ($renda >= 2000) {
			echo "Parabéns seu crédito está <strong>aprovado!</strong>";
		}elseif ($renda <2000) {
			echo "Infelizmente neste momento não poderemos conceder, click em voltar para acessar a página principal";
			
		}

		?>
		<br><br>
		<a href="index.html"> << voltar </a>


	</div>

	<div class="rodape">
		<h2>PROGRAMAÇÃO WEB: HTML, CSS, PHP</h2><br>
		<h2>PÁGINA DE TRATAMENTO DE DADOS</h2>
	</div>
	<footer>
		<h3>Todos os direitos reservados - Desenvolvido por Messias Zaleuski de Meira</h3>
	</footer>


</body>
</html>