<?php
    $v=7;
	$n=5;
	$x=0;
	$d=6;
	
	$conta = $v-- - --$d + $n++ + --$x;
	
	// 1) faz-se os prés
	// --$d  --$x
	
	//2) faz-se a conta
	// $conta = $v  - $d + $n + $x;
	// 			7	-  5 + 5  + -1 =>
	//				2    + 5  + -1 =>
	//					 7  + -1 =>
	//					 7  - 1 => 6

	// 3) faz-se os pós
	// $v--		$n++

	echo "v=$v, n=$n, x=$x, d=$d, conta=$conta";
?>