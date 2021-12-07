<?php
     // salvar como contas2.php
	$a=0;
	$b=5;
	$c=3;
	$d=9;
	
	// pré ou pós incremento/decremento
	$conta = ++$a - --$b + $c++ - --$d;
	
	// 1) faz-se os prés
	// ++$a  --$b  --$d

	// 2) faz-se a conta
	// $conta = $a - $b + $c - $d;
	//     	    1  -  4 + 3  - 8 =>
	//			   -3   + 3  - 8 =>
	//				    0    - 8 => -8
	
	// 3) faz-se os pós
	// $c++
	
	echo "a=$a, b=$b, c=$c, d=$d, conta=$conta";  
 
?>