<!doctype html> <!-- salvar como listagem.php -->
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>SGP - Listagem de Pets</title>
	</head>

	<body>
		<h1>Sistema de Gerenciamento de Pets</h1>
		<hr>
		<h2>Listagem de Pets</h2>
		<?php
			/* 	Objetivo: 
				=========
				Listar pets cadastrados e incluir a rotina de exclusão.
				
				Passos:
				=======
				1 - Conectar no MYSQL
				2 - Abrir/selecionar o banco de dados
				3 - Colocar o comando de seleção de dados numa variável
					=> p/ exibir na tela e testar no console do MYSQL
				4 - Enviar o comando (variável) p/o MYSQL
					=> Recebemos um record set
				5 - Verificamos o número de linhas (registros) existentes neste record set
					=> se for menor que 1, significa que a tabela de pets está vazia
						=> Avisamos o usuário e interrompemos o sistema
					=> Caso contrário, mostramos o número de pets existentes (registros)
				6 - Percorrer o record set listando os registros de pets na tela
					=> Iremos inserir o link de exclusão na listagem
			*/
			
			// 1 - Conectar no MYSQL
			$servidor	= "localhost";
			$usuario	= "root";
			$senha		= "";
			$banco 		= "sgp";
			
			$conexao = mysqli_connect($servidor, $usuario, $senha);
			
			// 2 - Abrir/selecionar o banco de dados
			mysqli_select_db($conexao, $banco) or 
				die( "Erro na abertura do banco:<br>" . mysqli_error($conexao)  );
				
			// 3 - Colocar o comando de seleção de dados numa variável
			$comandoSQL = "SELECT * FROM pets ORDER BY id";
			
			// Exibir o comando na tela, para testar no console do MYSQL
			// Estando ok o comando, esconder ele da tela
			// die($comandoSQL);
			
			// 4 - Enviar o comando (variável) p/o MYSQL
			//	=> Recebemos o record set $registros (objeto complexo)
			
			$registros = mysqli_query($conexao, $comandoSQL) or 
				die( 
					"Erro na seleção de dados:<br>" . mysqli_error($conexao) 
				);

			/* Meu $registros está assim:
				+----+-----------+------+------+--------------+-------+
				| id | nome      | sexo | tipo | nomeDono     | idade |
				+----+-----------+------+------+--------------+-------+
				|  1 | Nina      | F    | G    | Carlos Majer |     7 |
				|  2 | Neguinho  | M    | G    | Carlos Majer |    13 |
			->	|  3 | Soneca    | M    | C    | Ana          |     2 |
				|  4 | Mimosa    | F    | C    | Cristina     |     3 |
				|  7 | Solitaria | F    | P    | Ana          |     2 |
				+----+-----------+------+------+--------------+-------+
			*/
			
			// 5 - Verificamos o número de linhas (registros) existentes neste record set
			$linhas = mysqli_num_rows($registros);

			// => se for menor que 1, significa que a tabela de pets está vazia
			//	=> Avisamos o usuário e interrompemos o sistema
			
			if($linhas<1)
			{
				die("Cadastro de Pets está vazio. Sistema Finalizado!");
			}

			// => Caso contrário, mostramos o número de pets existentes (registros)
			echo "Existem <b>$linhas</b> pets cadastrados. <hr>";

			// Criar tabela HTML
			echo "<table border='1'>";
			// Criar a 1a linha de títulos da tabela
			echo "<tr bgcolor='plum'>";
			echo "	<th>ID</th>";
			echo "	<th>Nome</th>";
			echo "	<th>Sexo</th>";
			echo "	<th>Tipo</th>";
			echo "	<th>Idade</th>";
			echo "	<th>Dono</th>";
			echo "	<th>Ações</th>";
			echo "</tr>";
			
			// 6 - Percorrer o record set listando os registros de pets na tela			
			for($n=0; $n<$linhas; $n++)
			{
				// Ler a próxima linha de dados de $registros
				$dados = mysqli_fetch_array($registros);
				
				// Colocando os dados (da matriz $dados) em variáveis
				$id 		= $dados["id"];
				$nome		= $dados["nome"];
				$sexo		= $dados["sexo"];
				$tipo		= $dados["tipo"];
				$nomeDono	= $dados["nomeDono"];
				$idade		= $dados["idade"];
				
				// Mostrar os dados em células de tabela
				echo "<tr>";
				echo "	<td>$id</td>";
				echo "	<td>$nome</td>";
				echo "	<td>$sexo</td>";
				echo "	<td>$tipo</td>";
				echo "	<td>$idade</td>";
				echo "	<td>$nomeDono</td>";
				echo "	<td> <a href='excluirPet.php'>Excluir</a> </td>";
				echo "</tr>";
			}

			echo "</table>";
			/*
				mysqli_fetch_array() entra dentro de $registros e cria a matriz
				$dados, usando como chave de cada posição da matriz os nomes 
				dos campos da tabela lida, e insere os valores lidos da 1a
				linha do record set, dentro da matriz $dados
				
				$dados["id"]		= 1;
				$dados["nome"]		= "Nina";
				$dados["sexo"]		= "F";
				$dados["tipo"]		= "G";
				$dados["nomeDono"]	= "Carlos Majer";
				$dados["idade"]		= 7;
			*/
			
			
			
			
			/*
			echo "Tipo do Pet é ";
			
			if($tipo=="C") 
				echo "Cachorro (a)";
			
			if($tipo=="G") 
				echo "Gato (a)";
			
			if($tipo=="P") 
				echo "Passáro (a)";
			
			if($tipo=="R") 
				echo "Réptil (a)";
			
			if($tipo=="O") 
				echo "Outros";
			*/
		?>
		
	</body>
</html>