<!doctype html> <!-- salvar como gravarCLiente.php -->
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Clientes</title>
	</head>

	<body>
		<h1>gravarCliente</h1>
		<?php
		    //receber as variaveis 
			$nomeCliente 	= $_GET["nome"];
			$nascimento = $_GET["data"];
			$sexo = $_GET["sexo"];
			$estadoCivil = $_GET["op"];
			$email = $_GET["email"];
			$receberEmail = $_GET["receberEmail"];
			$ddd1 = $_GET["ddd1"];
			$tipo1 = $_GET["tipo1"];
			$ddd2 = $_GET["ddd2"];
			$tipo2 = $_GET["tipo2"];
			$ddd3 = $_GET["ddd3"];
			$tipo3 = $_GET["tipo3"];
			$telefone1 = $_GET["telefone1"];
			$telefone2 = $_GET["telefone2"];
			$telefone3 = $_GET["telefone3"];
			$obs = $_GET["obs"];
			
			
			 // 1 receber os dados
				    
					
				  // 2 fazer uma validação
				  if ($nomeCliente=="")
				  {
				   die("<b>Nome do Cliente</b>deve ser informado.Cadastro interronpido!");
				  }
				  
				  // 3 exibir os dados na tela
				    echo "Nome: $nomeCliente <br>";
					echo "Data de nascimento: $nascimento <br>";
					echo "Sexo: $sexo <br>";
					echo "Estado civil: $estadoCivil <br>";
					echo "E-mail: $email <br>";
					echo "Receber e-mail: $receberEmail <br>";
					echo "DDD: $ddd1 $telefone1 - $tipo1 <br>";
					
					echo "DDD: $ddd2 $telefone2 $tipo2<br>";
		
					echo "DDD: $ddd3 $telefone3 $tipo3<br>";
				
					echo "Observções: <br> $obs";
					
					// 4 - Abrir o banco de dados
			       // Conectar no servidor MYSQL
				   
				   $con = mysqli_connect("localhost","root","");
				   
				   // A função mysqli_select_db() tenta abrir um banco de dados no MYSQL 
				   
				   mysqli_select_db($con,"sistema") or 
				          die ("ERRO ao conectar no banco de dados:<br>". mysqli_error($con));
						  
				  // 5 - Criar a variável c/o Comando de inserção de dados SQL 
				  $sql="INSERT INTO clientes 
				        (nomeCliente,
						 nascimento,
						 sexo,
						 estadoCivil,
						 email,
						 receberEmail,
						 ddd1,
						 telefone1,
						 tipo1,
						 ddd2,
						 telefone2,
						 tipo2,
						 ddd3,
						 telefone3,
						 tipo3)
					values
					('$nomeCliente',
					 '$nascimento',
					 '$sexo',
					 '$estadoCivil',
					 '$email',
					 
					  $ddd1,
					  $telefone1,
					  $tipo1,
					  $ddd2,
					  $telefone2,
					  $tipo2,
					  $ddd3,
                      $telefone3,
                      $tipo3					  
					)";
					
				// 6 - Enviar o comando (variável) para o MYSQL
			
			   // A função mysqli_query() envia um comando para o MYSQL executar  
				  
				  mysqli_query($con,$sql) or 
				        die("Erro da inserção de dados:<br>".mysqli_error($con));
						
				echo "Cliente <b>$nomeCliente</b> cadastrado com sucesso";
		?>
		</body>
</html>