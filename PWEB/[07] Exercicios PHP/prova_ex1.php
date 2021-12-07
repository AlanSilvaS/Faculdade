<?php

  // Cálculo da pontuação do (a) jogador (a)

  $forca = 3;

  $magia = 4;

  $resistencia = 6;

 

  // Evento do Jogo

  $pontuacao = $forca-- - $resistencia +  ++$magia;

echo"$forca <br>";
echo"$magia <br>";
echo"$resistencia <br>";
echo"$pontuacao <br>";
?>