<?php

	include_once("conexao.php");

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$profissao = $_POST['prof'];

		$sql = "insert into usuarios (nome, email, profissao) values ('$nome', '$email', '$profissao')";

		$salvar = mysqli_query($conexao, $sql);

		// para retornar uma consulta, veja abaixo o devido comando.

		$linhas = mysqli_affected_rows($conexao);

	mysqli_close($conexao);


	/*print "Confira seus dados:<br>";
	print "Nome: $nome <br> Email: $email <br> Profissão: $profissao";*/

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
				<a href="php/consultas.php">  <li>Consultas     </li> </a>
				<a href="php/usuario.php"> 	  <li>Usuários   	</li> </a>
			</ul>

		</nav>
		<section>
			<h1>Confirmação de Cadastro</h1>
			<hr><br><br>

			<?php

				if ($linhas == 1) {
					print "Cadastro efetuado com sucesso! <br>";
				}
					else {
						print "Cadastro não efetuado! <br> Já existe um usuário com este E-mail: $email!";

				} 
			?>
		</section>

</body>
</html>