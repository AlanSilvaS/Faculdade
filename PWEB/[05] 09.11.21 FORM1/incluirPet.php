<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>SGP - Sistema Gerencial de Pets</title>
	</head>

	<body>
		<h1>Sistema Gerencial de Pets</h1>
		<hr>
		<h3>Cadastrando Pet. . .</h3>
		
		<?php
			// salvar como incluirPet.php
			
			// Recebendo dados vindos do formulário
			// Recebendo onde (na página)? 
			// Depende do método de envio de dados usado pelo formulário
			
			// Se foi o método  get
			//	=> matriz $_GET[""]
			
			// Se foi o método post
			//  => matriz $_POST[""]
			
			// 1 - Receber os dados do formulário em variáveis
			$nome		= $_GET["nome"];
			$tipo		= $_GET["tipo"];
			$sexo		= $_GET["sexo"];
			$idade		= $_GET["idade"];
			$nomeDono	= $_GET["nomeDono"];
			
			// 2 - Fazer uma validação básica
			
			// Validar: nome do pet, nome do dono do pet, tipo do pet
			
			if ($nome=="")
			{
				die("<b>Nome do Pet</b> deve ser informado. Sistema interrompido!");
			}
				
			// == Operador de comparação - compara o valor do que está à esquerda com o que está à direita
			// = Operador de atribuição - atribui (coloca) no elemento à esquerda o que está à direita
			
			if ($nomeDono=="")
			{
				die("<b>Nome do Dono do Pet</b> deve ser informado. Sistema interrompido!");
			}
			
			if ($tipo=="")
			{
				die("<b>Tipo do Pet</b> deve ser informado. Sistema interrompido!");
			}
			
			// 3 - Exibir os dados na tela
			echo "Nome do Pet: <b>$nome</b> <br>";
			echo "Tipo:  <b>$tipo</b> <br>";
			echo "Sexo:  <b>$sexo</b> <br>";
			echo "Idade: <b>$idade</b> <br>";
			echo "Dono : <b>$nomeDono</b> <hr>";
			
			// 4 - Abrir o banco de dados
			// .1 - Conectar no servidor MYSQL
			
			// O PHP disponibiliza um conjunto de funções nativas
			// para acesso ao MYSQL
			
			// A função mysqli_connect() tenta conectar a página PHP 
			// num servidor MYSQL existente
			
			// Parâmetros (Strings):
			// p1 - O endereço do servidor MYSQL
			// p2 - O nome de um usuário existente (no MYSQL)
			// p3 - a senha deste usuário 
			
			// Devolve um objeto de conexão
			$con = mysqli_connect("localhost", "root", "");
			
			// .2 Abrir / selecionar o banco
			// A função mysqli_select_db() tenta abrir um banco de dados no MYSQL 
			
			// Parâmetros:
			// p1 - Objeto de conexão existente
			// p2 - Nome do banco (String)
			
			mysqli_select_db($con, "sgp") or 
				die(
					"Erro na abertura do banco de dados:<br>" . mysqli_error($con)
				);
			
			// 5 - Criar a variável c/o Comando de inserção de dados SQL 
			$sql = "INSERT INTO pets	
							(nome,    
							 sexo,    
							 tipo,  
							 nomeDono, 
							 idade) 
					VALUES 
							 ('$nome',
							  '$sexo',
							  '$tipo', 
							  '$nomeDono', 
							   $idade)";
			
			// Mostro a variável na tela para testar se o comando está 
			// funcionando, no console do MYSQL
			
			// Depois de testar no console e estando funcionando o comando
			// esconde o mesmo da tela
			// die($sql);
			
			// 6 - Enviar o comando (variável) para o MYSQL
			
			// A função mysqli_query() envia um comando para o MYSQL executar
			
			// Parâmetros:
			// p1 - Objeto de conexão existente
			// p2 - Comando SQL a ser executado / enviado para o MYSQL
			
			mysqli_query($con, $sql) or 
				die( "Erro na inserção do Pet:<br>" . mysqli_error($con));
			
			// Se chegou até aqui , funcionou
			echo "Pet <b>$nome</b> cadastrado com sucesso!";
		?>
		<hr>
		Clique <a href="novoPet.html">aqui</a> para cadastrar um novo cliente.
	</body>
</html>




