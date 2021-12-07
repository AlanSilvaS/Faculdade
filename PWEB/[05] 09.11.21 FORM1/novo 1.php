<?php
	// Variável
	//=========
	// Espaço de memória que se dá um nome e que consegue 
	// armazenar um valor (dado) que pode ser posteriormente
	// alterado (variado)
	
	// Matriz
	// ======
	// Espaço de memória que se dá um nome e que consegue 
	// armazenar diversos valores, em posições diferentes, que podem ser 
	// posteriormente alterados
	
	// Exemplos:
	//	$nomes[0] = "Ana";
	//	$nomes[1] = "Carlos";
	//	$nomes[2] = "Renata";
	
	//	$nomes[0] = "Joana";
	
	
	
	// FUNÇÕES NATIVAS DO PHP NO MYSQL
	- mysqli_connect() 	 - Conecta num servidor MYSQL
	- mysqli_select_db() - Tenta abrir um banco de dados existente no MYSQL
	- mysqli_error()	 - Exibe o último erro ocorrido numa conexão
	- mysqli_query()	 - Envia um comando SQL p/o MYSQL executar
	
	// Funções obsoletas que não devem mais ser usadas
	// Funções antigas e que não devem funcionar nas versões futuras do PHP
	mysql_connect()
	mysql_select_db()
	mysql_error()
	
	// Não utilizem as funções     com prefixo mysql_
	// O correto é usar as funções com prefixo mysqli_
	
	
?>