<?php

	include_once("conexao.php");
	
	
	$sql = "select * from usuarios";
	$consulta = mysqli_query($conexao,$sql);
	$registros = mysqli_num_rows($consulta);

	mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Plex Control</title>
	<link rel="stylesheet"  href="../css/estilo1.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="../index.html">      <li>Cadastro      </li> </a>
				<a href="php/faturamento.php"><li>Faturamento   </li> </a>
				<a href="php/estoque.php">    <li>Estoque       </li> </a>
				<a href="">  <li>Consultas     </li> </a>
				<a href="php/usuario.php"> 	  <li>Usuários   	</li> </a>
			</ul>

		</nav>
		<section>
			<h1>Consultas</h1>
			<hr><br><br>

			<?php

				print "$registros registros encontrados.";
			
			?>
		</section>

</body>
</html>