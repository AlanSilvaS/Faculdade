<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>SGP - Sistema Gerencial de Pets</title>
	</head>

	<body>
		<h1>Sistema Gerencial de Pets</h1>
		<hr>
		<h3>Listagem de Pets 2</h3>
		<?php
			// salvar como listagem2.php
			
			// 1 - Conectar no MYSQL
			$servidor 	= "localhost";
			$usuario	= "root";
			$senha 		= "";
			$banco		= "sgp";
			
			$con = mysqli_connect($servidor, $usuario, $senha);
			
			// 2 - Abrir o banco de dados
			$ok = mysqli_select_db($con, $banco);
			// true  - se conseguiu abrir o banco
			// false - se não conseguiu
			
			if(!$ok)
			{
				die(
					"Erro na abertura do banco $banco:<br>" . mysqli_error($con)
				);
			}
			
			// 3 - Colocar o comando de seleção de dados SQL numa variável
			$comandoSQL = "SELECT * FROM pets";
			
			// Mostrar no console para testar e ver se está ok
			// Estando ok (funcionando no console), esconder o comando
			//die($comandoSQL);
			
			// 4 - Executar este comando (variável) no MYSQL
			//   - receber um record set (conjunto de registros)
			
			$registros = mysqli_query($con, $comandoSQL);
			
			/* Meu record set $registros:
			+----+----------+------+------+--------------+-------+
			| id | nome     | sexo | tipo | nomeDono     | idade |
			+----+----------+------+------+--------------+-------+
			|  3 | Soneca   | M    | C    | Cristina     |     2 |
			|  1 | Nina     | F    | G    | Carlos Majer |     7 |
			|  2 | Neguinho | M    | G    | Carlos Majer |    13 |
			|  5 | Ligeiro  | M    | P    | Cristina     |     2 |
			|  4 | Mimosa   | F    | C    | Ana          |     4 |
			+----+----------+------+------+--------------+-------+			
			*/

			// 5 - Contar o número de linhas (registros) existentes
			$linhas = mysqli_num_rows($registros);

			//	 - Se linhas = 0 é porque a tabela de Pets está vazia 
			if($linhas<1)
			{
				//		- Para o programa e avisa o usuário
				die("Cadastro de Pets está vazio. Sistema Finalizado!");
			}
			
			// Se chegou até aqui é pq não está vazio.
			echo "<b>$linhas</b> Pets cadastrados<hr>";
			
			
			/*
				Exemplo de matriz com índice numérico
				$nomes[0] = "Ana";
				$nomes[1] = "Cláudia";
				$nomes[2] = "Roberto";
				$nomes[3] = "Joana";
				
				echo "A " . $nomes[1] . " é amiga da " . $nomes[0] . "<br>";
				echo " e o " . $nomes[2] . " que namora a " .$nomes[0] ;
				echo " é irmão da " . $nomes[3];
			
				Exemplo de matriz com índice alfanumérico 
				$salarios["Ana"] = 3250.50;
				$salarios["Roberto"] = 2980.00;
				$salarios["Claudia"] = 5420.25;
				
				echo "A Ana recebe " . $salarios["Ana"];
				
				Outro exemplo de matriz:
				========================
				$dados[0] = 1;
				$dados[1] = "Nina";
				$dados[2] = "F";
				$dados[3] = "G";
				$dados[4] = "Carlos Majer";
				$dados[5] = 7;
				
				echo "A " . $dados[1] . " é o pet de " . 
							$dados[4] . " e tem " .
							$dados[5] . " anos de idade";
			*/
			
			// 6 - Percorrer os registros e mostrar eles na tela			
			
				/* Meu record set $registros:
				+----+----------+------+------+--------------+-------+
				| id | nome     | sexo | tipo | nomeDono     | idade |
				+----+----------+------+------+--------------+-------+
				|  3 | Soneca   | M    | C    | Cristina     |     2 |
				|  1 | Nina     | F    | G    | Carlos Majer |     7 |
				|  2 | Neguinho | M    | G    | Carlos Majer |    13 |
				|  5 | Ligeiro  | M    | P    | Cristina     |     2 |
				|  4 | Mimosa   | F    | C    | Ana          |     4 |
			->	+----+----------+------+------+--------------+-------+			
				*/

			// Abrindo uma tabela HTML
			echo "<table border='1'>";
			
			// Inserindo a 1a linha de títulos
			echo "	<tr bgcolor='lightblue'>";
			echo "		<th>ID</th>";
			echo "		<th>Nome</th>";
			echo "		<th>Tipo</th>";
			echo "		<th>Sexo</th>";
			echo "		<th>Idade</th>";
			echo "		<th>Dono</th>";
			echo "		<th>Ações</th>";
			echo "	</tr>";
			
			$zebrado = true; // controlar o efeito zebrado da tabela
			
			// Repetindo a leitura de $registros e criação/exibição de $dados
			for($n=0 ; $n<$linhas; $n++)
			{
				$dados = mysqli_fetch_array($registros);
				
				if($zebrado)
					echo "<tr bgcolor='plum'>";
				else
					echo "<tr>";
				
				echo "	<td>"	. $dados["id"]	 .	"</td>";
				echo "	<td>"	. $dados["nome"] .	"</td>";
				echo "	<td>"	. $dados["tipo"] .	"</td>";
				echo "	<td>"	. $dados["sexo"] .	"</td>";
				echo "	<td>"	. $dados["idade"] .	"</td>";
				echo "	<td>"	. $dados["nomeDono"]."</td>";
				echo "	<td> Excluir</td>";
				echo "</tr>";
			
				// Vou inverter o valor de zebrado
				$zebrado = !$zebrado;
			}
			
			// Encerrando a tabela
			echo "</table>";
			echo "Listagem Finalizada!";
		?>
		
	</body>
</html>