<?php
  // salvar como contas4.php
	$a=12;
	$b=7;
	$c=514;
	$d=-99;
	$e=51;
	$f=70;
	
	$valor = $a-- - --$b + ++$c + $d++ - --$e + $f;
	
	// 1) faz-se os prés
	// --$b		++$c	--$e
	
	// 2) faz-se a conta
	// $valor 	= $a - $b + $c + $d  - $e + $f;
	// 			=  12-6 + 515+ -99 - 50 + 70 ==>
	//				  6+515+ -99 - 50 + 70 ==>
	//					521-99 - 50 + 70 ==>
	//					422 - 50 + 70 ==>
	//					372 + 70 ==>442
	
	// 3) faz-se os pós
	// $a--		$d++
	
	echo "a=$a, b=$b, c=$c, d=$d, e=$e, f=$f, valor=$valor";
?>