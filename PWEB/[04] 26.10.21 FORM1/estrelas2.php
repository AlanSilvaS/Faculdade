<html>
	<head>
		<title>Estrelas de Natal</title>
		<meta charset="UTF-8">
		<style>
			.blink_me {
			  color:red;
			  animation: blinker 2s linear infinite;
			}

			@keyframes blinker {
			  50% {
				opacity: 0;
			  }
			}
		</style>
	</head>
	<body>
		<?php
			// salvar como estrelas.php
			$estrelas="*";
			
			// Mostrando a parte superior da estrela
			for($n=1;$n<=10; $n++)
			{
				echo "<span class='blink_me'>$estrelas</span><br>";
				$estrelas = $estrelas . "*";
			}
			
			// Mostrar o tronco
			for($n=1; $n<=6; $n++)
			{
				echo "<span class='blink_me'>**</span><br>";
			}
		?>

	</body>
</html>