<!doctype html>
<html lang="pt-br">
          <head>
		        <meta charset="UTF-8">
				<title>SGC - Sistema Gerencial de Clientes</title>
		  </head>
		  
		  <body>
             	<h1>Sistemas Gerencial de Clientes</h1>
                <hr>
				<h3>Cadastrando Cliente.</h3>
                <?php
				   // 1 receber os dados
				    $nomeCliente 	= $_GET["nome"];
					$nascimento     = $_GET["data"];
					$sexo           = $_GET["sexo"];
					$estadoCivil    = $_GET["op"];
					$email          = $_GET["email"];
					$receberEmail   = $_GET["receberEmail"];
					$ddd1       = $_GET["ddd1"];
					$tipo1      = $_GET["tipo1"];
					$ddd2       = $_GET["ddd2"];
					$tipo2      = $_GET["tipo2"];
					$ddd3       = $_GET["ddd3"];
					$tipo3      = $_GET["tipo3"];
					$telefone1  = $_GET["telefone1"];
					$telefone2  = $_GET["telefone2"];
					$telefone3  = $_GET["telefone3"];
					$observacao = $_GET["observacao"];
					
					echo "Nome: $nomeCliente <br>";
					echo "Data de nascimento: $nascimento <br>";
					echo "Sexo: $sexo <br>";
					echo "Estado civil: $estadoCivil <br>";
					echo "E-mail: $email <br>";
					echo "Receber e-mail: $receberEmail <br>";
					echo "DDD: $ddd1 $telefone1 - $tipo1 <br>";					
					echo "DDD: $ddd2 $telefone2 $tipo2<br>";		
					echo "DDD: $ddd3 $telefone3 $tipo3<br>";		
					echo "Observacoes: <br>$observacao<br>";
					
				  // 2 fazer uma validação
				  if ($nomeCliente=="")
				  {
				   die("<b>Nome do Cliente</b>deve ser informado.Cadastro interronpido!");
				  }
				  
				  
					
					// 4 - Abrir o banco de dados
			       // Conectar no servidor MYSQL
				   
				   $con = mysqli_connect("localhost","root","");
				   
				   // A função mysqli_select_db() tenta abrir um banco de dados no MYSQL 
				   
				   mysqli_select_db($con,"sistema") or 
				   
				      die (
						  "ERRO ao conectar no banco de dados:<br>". mysqli_error($con)
						  );
						  
				  // 5 - Criar a variável c/o Comando de inserção de dados SQL 
				  $sql="INSERT INTO clientes 
				        (nomeCliente,
						 nascimento,
						 sexo,
						 estadoCivil,
						 email,
						 receberEmail,
						 ddd1,
						 tipo1,
						 telefone1,
						 ddd2,
						 tipo2,
						 telefone2,
						 ddd3,
						 tipo3,
						 telefone3,
						 observacao)
					values
					('$nomeCliente',
					 '$nascimento',
					 '$sexo',
					 '$estadoCivil',
					 '$email',
					 '$receberEmail',
					  '$ddd1',
					  '$tipo1',
					  '$telefone1',
					  '$ddd2',
					  '$tipo2',
					  '$telefone2',
					  '$ddd3',
					  '$tipo3',
                      '$telefone3',
                      '$observacao'					  
					)";
					
				// 6 - Enviar o comando (variável) para o MYSQL
			
			   // A função mysqli_query() envia um comando para o MYSQL executar  
				  
				  mysqli_query($con,$sql) or 
				        die("Erro da inserção de dados:<br>".mysqli_error($con));
						
				echo "Cliente <b>$nomeCliente</b> cadastrado com sucesso!";
                ?>
                <hr>
                 Clique <a href="cadastro.html">aqui</a> para cadastrar um novo pet.				
		  </body>
</html>