<?php
     echo "Parte 3 exercicios php";
     $v1=0;
	 $v2=1;
	 $n=0;
	 $v3=0;
	 
	 do 
	 {
		  echo "$v3<br>";
		  
		 $v3= $v1 += $v2;
		
		 echo "$v2<br>";
		 
		 $n=$v2+=$v3;
		 		
	 }while ($n<=233);
	 
	 echo "<br>FIM";
?>