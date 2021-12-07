<?php
    	// salvar como estrelas.php
	$estrelas="*";
	
	// Mostrando a parte superior da estrela
	for($n=1;$n<=10; $n++)
	{
		echo "$estrelas<br>";
		$estrelas = $estrelas . "*";
	}
	
	// Mostrar o tronco
	for($n=1; $n<=6; $n++)
	{
		echo "**<br>";
	}
?>