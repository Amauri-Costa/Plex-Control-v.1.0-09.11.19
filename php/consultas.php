<?php

	include_once("conexao.php");
	
	$filtro    = isset($_GET['filtro'])?$_GET['filtro']:"";
	

	$sql       = "select * from usuarios where profissao like '%$filtro%' order by nome"; /*Uso de operador ternário*/

	$consulta  = mysqli_query($conexao,$sql);
	$registros = mysqli_num_rows($consulta);

// 	mysqli_close($conexao); eu retirei esse bloco daqui e joguei no outro bloco de php lá embaixo
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Plex Control</title>
	<link rel="stylesheet"  href="../css/estilo.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="../index.html">      <li>Cadastro      </li> </a>
				<a href="php/faturamento.php"><li>Faturamento   </li> </a>
				<a href="php/estoque.php">    <li>Estoque       </li> </a>
				<a href="consultas.php"> 				  <li>Consultas     </li> </a>
				<a href="php/usuario.php"> 	  <li>Usuários   	</li> </a>
			</ul>

		</nav>
		<section>
			<h1>Consultas</h1>
			<hr><br><br>
			
			<form method="get" action="">
			<br>
			
				<label class="label">Filtrar: </label>
					<input type="text" name="filtro" class="campo" placeholder="Digite sua pesquisa..." required autofocus>

					<input type="submit" value="pesquisar" class="btn">	


			</form>

			<?php

				print "O resultado da pesquisa com a palavra $filtro.";

				print "<br><br>";
				print "$registros registros encontrados.<br><br>"; 

				while ($exibirRegistros = mysqli_fetch_array($consulta)) {
					
					$codigo 	 = $exibirRegistros[0];
					$nome  	     = $exibirRegistros[1];
					$email       = $exibirRegistros[2];
					$profissao   = $exibirRegistros[3];

					print "<article>";
					print "<table>";
						print "<tr><td>Código:    </td>    <td>$codigo    </td></tr>";
						print "<tr><td>Nome:	  </td>    <td>$nome      </td></tr>";
						print "<tr><td>E-mail:    </td>    <td>$email     </td></tr>";
						print "<tr><td>Profissão: </td>    <td>$profissao </td></tr>";
					print "</table>";
					print "</article>";
				
				}
				mysqli_close($conexao);
			
			?>
		</section>

</body>
</html>