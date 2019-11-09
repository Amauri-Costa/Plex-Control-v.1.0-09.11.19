

<?php
	
	$hostname = "localhost";
	$user     = "root";
	$password = "";
	$database = "empdata";

	$conexao = mysqli_connect($hostname,$user,$password,$database);

	if (!$conexao) {
		print "<h2>Falha na conexão com o Banco de Dados</h2>";
		Print "<h2>Por favor entre em contato com a empresa EmpTecnologia nos Telefones
		61 - 3624 0005 ou 61 - 98418 8350<h2>";
	}



 ?>