<?php
   $a=5;
   $b=12;
   $c=7;
   $d=1;
   $e=-9;
   $f=3;
   $g=4;
   $valor;
           
   $valor= ++$a + ++$b - --$c - $d-- + ++$e - $f-- + ++$g;
   echo "$a  $b  $c  $d  $e  $f  $g = $valor";
?>