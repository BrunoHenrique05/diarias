
<?php
// Inclui o arquivo de configuração
include('login/config.php');

// Inclui o arquivo de verificação de login
include('login/verifica_login.php');


// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
include('login/redirect.php');



?>

Olá <b><?php echo $_SESSION['nome_usuario']
?></b>, Você está conectado.


 <!DOCTYPE html>
<html>
<head>
	<title> Solicitação de Diárias </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="imagens/icone.png">
	<style>
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
	}

	li {
		float: left;
		border-right:1px solid #bbb;
	}

	li:last-child {
		border-right: none;
	}

	li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover:not(.active) {
		background-color: #111;
	}

	.active {
		background-color: #4CAF50;
	}
	div{

		border: 1px  black;
		padding-top: 10px;
		padding-right: 30px;
		padding-bottom: 15px;
		padding-left: 0px;
	}

	
	td {
	width:200px;
	
	}





</style>
</head>
<body>
	<div align="left"> <img style="height: 140px; padding-right: 30px;" src="imagens/logo.png"></div>
	
	<ul>
		<li><a  href="index.php">Home</a></li>
		<li><a href="formDiaria.php">Formulário de Solicitação de Diárias</a></li>
		<li><a  class="active" href="aprovacao.php">Aprovação</a></li>
		<li><a href="relatorio.php">Relatórios</a></li>
		<li style="float:right" ><a href="login/sair.php">Sair</a></li>
	</ul>

	<form method="POST" action="processa_cad_viagens.php">

        
		<hr><h1> Aprovações</h1><hr>
	
	<form action="resposta.php" method="post" align="center">
		<p> <h3>Faça login para continuar</h3> </p>
		<p> Nome<input type="text" name="nome" value="" required> </p>
		<p> Senha<input type="password" name="senha" value="">   </p>

		<p><input type="submit" value="Enviar">
		<input type="reset" value="Limpar"></p>
	</form>

			
</form>

</body>
</html>

