<!doctype html> <!-- salvar como gravaCandidato.php -->
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Candidatos</title>
	</head>

	<body>
		<h1>Gravando Candidato...</h1>
		<?php
			// Receber os valores em variáveis
			$nome 	= $_GET["nome"];
			$emails = $_GET["email"];
			$senha	= $_GET["senha"];
			$senha2	= $_GET["senha2"];
			$vaga	= $_GET["vaga"];
			
			// Valores padrão p/ caixas de checagem
			$html   	= 0;
			$css		= 0;
			$javascript	= 0;
			$mysql		= 0;
			$php		= 0;
			$c			= 0;
			$java		= 0;
			
			
			if(isset($_GET["html"]))		
				$html 		= $_GET["html"];
			
			if(isset($_GET["css"]))
				$css 		= $_GET["css"];
			
			if(isset($_GET["javascript"]))
				$javascript	= $_GET["javascript"];
			
			if(isset($_GET["mysql"]))
				$mysql		= $_GET["mysql"];
			
			if(isset($_GET["php"]))
				$php		= $_GET["php"];
			
			if(isset($_GET["c"]))
				$c			= $_GET["c"];
			
			if(isset($_GET["java"]))
				$java		= $_GET["java"];
		
			
			echo "Nome: $nome <br>";
			echo "e-mail:$emails<br>";
			echo "Senha: $senha<br>";
			echo "Senha 2: $senha2<br>";
			
			echo "<h3>Tecnologias aprendidas</h3>";
			echo "HTML: $html<br>";
			echo "CSS: $css <br>";
			echo "JavaScript: $javascript <br>";
			echo "MySQL: $mysql <br>";
			echo "PHP: $php<br>";
			echo "C: $c<br>";
			echo "Java: $java<br>";
			
			echo "<h3>Vaga de interesse</h3>";
			echo "Vaga: $vaga";
		?>
	</body>
</html>