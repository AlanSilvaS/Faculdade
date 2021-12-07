<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>SGP - Sistema Gerencial de Pets</title>
	</head>

	<body>
		<h1>Sistema Gerencial de Pets</h1>
		<hr>
		<h3>Listagem de Pets</h3>
		<?php
			// salvar como listagem.php
			
			// 1 - Conectar no MYSQL
			// 2 - Abrir o banco de dados
			// 3 - Colocar o comando de seleção de dados SQL numa variável
			// 4 - Executar este comando (variável)
			//   - receber um record set (conjunto de registros)
			// 5 - Contar o número de linhas (registros) existentes
			//	 - Se linhas = 0 é porque a tabela de Pets está vazia 
			//		- Para o programa e avisa o usuário
			// 6 - Percorrer os registros e mostrar eles na tela
			
			
			
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
			
			// 4 - Executar este comando (variável)
			//   - receber um record set (conjunto de registros)
			
			$registros = mysqli_query($con, $comandoSQL);
			
			/* Meu record set $registros:
			+----+----------+------+------+--------------+-------+
			| id | nome     | sexo | tipo | nomeDono     | idade |
			+----+----------+------+------+--------------+-------+
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
			echo "<b>$linhas</b> Pets cadastrados";
		?>
	</body>
</html>