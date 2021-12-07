<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>PHP Básico</title>
	</head>
	
	<body>
<?php
    // Salvar como basico.php
	
	/*
	Variável:
	Espaço na memória do computador que
	damos um nome e que consegue armazenar
	um determinado valor, que pode ser
	posteriormente alterado (variado)
	
	REGRAS DA CRIAÇÃO DO NOME DE UMA VARIÁVEL (PHP)
	===============================================
	1. Deve iniciar com um cifrão ($)
	2. O 1o caractere depois do cifrão deve ser uma letra ou sublinhado (underline)
	3. Após o 1o caractere, podem ser usados números
	4. Não pode ser usado caractere acentuado
		á é í ó ú ã õ ê â ô î ç Ç Ñ ñ ä ë ï, etc.
	5. Não pode ser usado caractere especial
		* / - + \ ' " { } ( ) [ ] % & *@ # !
	6. Não pode ter espaço
	
	ATENÇÃO (letra maiúscula e minúscula)
	=====================================
	O PHP é case sensitive (sensível ao tamanho da caixa/letra)
	- Uma variável com parte de seu nome (letra) em minúsculo é diferente
	  de uma variável criada em maiúsculo.
	  
	Exemplos de variáveis diferentes:
	$nome , $NOME, $nOME, $noME, $nomE, $NOme, $NOMe 
	
	DIFERENÇA COM RELAÇÃO A OUTRA LINGUAGENS DE PROGRAMAÇÃO
	
	Linguagens fortemente tipadas (C, Java, outras)
	===============================================
	- 1) Deve ser declarado o tipo da variável antes de atribuir um valor 
	  int idade; // Número Inteiro
	  float salario; // Número Float (Ponto Flutuante) = Real / tem casa decimal
	  char opcao; // Caractere
	  String nome; // Trecho de texto
	  
	  2) Atribuir um valor
	  idade = 18;
	  salario = 5200.17;
	  opcao = 'S';
	  nome = "Ana Cláudia";
	  
	  ATENÇÃO - NÃO SE PODE INSERIR VALORES DE TIPOS DIFERENTES NA VARIÁVEL
	  
	  idade=18.5; // ERRO - Tentativa de atribuir float numa variável int
	  idade = "Idade legal"; // ERRO - String numa variável int
	  
	- Linguagens fracamente tipadas (PHP, JavaScript, outras)
	=========================================================
	  Não precisa declarar o tipo da variável.
	  O tipo é automaticamente reconhecido / definido pela
	  linguagem, quando se atribui um valor à variável.
	  
	  1) Atribuir um valor
	  $idade = 18; // criou-se a variável com o tipo inteiro
	  $opcao='S';
	  $salario=5200.17;
	  $nome = "Ana Cláudia";
	  $casado = false; // boolean / lógico
	  
	  PODE INSERIR VALORES DE TIPOS DIFERENTES NA VARIÁVEL
	  $idade = 18; // inteiro
	  ...
	  $idade=18.5; // float
	  ...
	  $idade = "Idade legal"; // string
	  
	  EXEMPLOS DE VARIÁVEIS INVÁLIDAS NO PHP
	  ======================================
	  nome => Falta o cifrão no começo
	  $123milha => O 1o caractere após o cifrão é um número
	  $ação => tem caractere acentuado
	  $nome*especial => Tem caractere especial (*)
	  $nome completo => Tem espaço */
	
	$salario = 8250;
	$premio  = 1320.10;
	$periodos= 2; // trabalha dia e noite
	$bonus   = 985.00; // por período
	
	/* Cálculo do Salário Bruto
	   Padrão de nomeação de variável Camel Case
	   Nomes compostos de variáveis começam c/ 1a parte do nome em
	   minúsculo, a 1a letra da 2a parte em maiúsculo e o resto da
	   2a parte do nome em minúsculo */
	
	$salarioBruto = $salario + 
					$premio  + 
					($periodos*$bonus) ;
	
	//echo "Salário Base - R$ $salario";

	
    echo "Salário Base - R$ " . number_format($salario, 2, ",", ".");
	echo "<br>";
	
	echo "Prêmio - R$ " . number_format($premio, 2, ",", ".");
	echo "<br>";
	
	echo "Períodos trabalhados: $periodos";
	echo "<br>";
	
	echo "Bônus por período:" . number_format($bonus, 2, ",", ".") . "<br>";
	
	echo "Salário Bruto - R$ " . number_format($salarioBruto, 2, ",", ".") . "<br>";
	
	/*
	number_format(a1, a2, a3, a4)
	- a1 = o valor a ser formatado (inteiro / float)
	- a2 = quantas casas decimais devem ser exibidas (inteiro)
	- a3 (opcional) = qual é o caractere separador de decimal a ser usado (string)
	- a4 (opcional) = qual é o caractere separador de Milhar  a ser usado (string)
	*/
	?>
	
	<h3><i><u>Descontos</u></i></h3>
		<?php
			// Calcular os descontos
			// INSS - 8% s/ salário bruto
			$inss = $salarioBruto * 8/100;
			
			// IR - 25% s/ (Salário Bruto - INSS)
			$ir = ($salarioBruto - $inss) * 25/100;
			
			// Salário Líquido (Salário Bruto - INSS - IR)
			$salarioLiquido = $salarioBruto - $inss - $ir;
			
			// Exibir na tela os itens descontados
			echo "INSS - R$ " . number_format($inss, 2, ",", ".")  . "<br>";
			echo "IR - R$ "   . number_format($ir  , 2, ",", ".")  . "<br>";
			echo "<hr>Salário Líquido - <b>R$ " . number_format($salarioLiquido, 2, ",", ".") ."</b>";
		?>
		</body>

</html>
