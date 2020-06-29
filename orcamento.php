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
	<h1>ORÇAMENTO</h1><hr><br>

	

	<div class="conteudo">
		<?php
		
		$data = $_POST["data"];
		$garantia = $_POST["garantia"];
		$servico = $_POST["servico"];
		$aparelho = $_POST["aparelho"];
		$cliente = $_POST["cliente"];

		echo "<strong>Detalhes do orçamento:<br></strong> <br>";
		echo "Data $data Tempo de garantia após a entrega $garantia meses<br><br>";
		echo "Aparelho para manutenção: $aparelho <br><br>";
		echo "Serviço a ser executado: $servico<br><br>";

		switch ($servico) {
			case 'Formatacao':
				echo "O valor total será de R$70,00 a mão de obra mais R$50,00 de atualização, totalizando R$ 120,00";
				break;
				case 'Troca de peças':
				echo "O valor total será de R$100,00 a mão de obra mais R$50,00 limpeza, totalizando R$ 150,00";
				break;case 'Outros':
				echo "O valor total será de R$150,00 a mão de obra mais R$50,00 de montagem, totalizando R$ 200,00";
				break;
			
			default:
				echo "Infelizmente não é possivel realizar este serviço no momento";
				break;
		}

			echo "<br><br>Declaro estar ciente com os valores e informações acima descritos<br> $cliente";


		?>
		<br><br>

		<p>Assinatura___________________</p><br>
		<p>Data:__/__/__</p><br><br>
		<p>Ao assinar você concorda com todos os termos de serviço e garantia</p><br>
		<form>
			<input type="button" value="Imprimir orçamento" onclick="window.print()">
		</form><br>


		<a href="index.html"> << voltar </a>


	</div>

	
	<footer>
		<h3>Todos os direitos reservados - Desenvolvido por Messias Zaleuski de Meira</h3>
	</footer>

</body>
</html>