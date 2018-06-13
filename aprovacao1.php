
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
?>, <b><?php echo $_SESSION['atuacoes']
?></b> </b>,  você está conectado.


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
		background-color:  #4CAF50;
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
 <?php 
    $nivel = $_SESSION['atuacoes'];
    if($nivel == 'administrativo' || $nivel == 'diretor' ){
	include('menuAdm.php');
    }else{
    include('menu.php');
	}
    ?>


  
		<br><br><br><br>
		<div class="container">
			


<?php

$r = $_POST['botao'];
$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM cadastroviagem ORDER BY id DESC');
		$pdo_verifica->execute();
		
		while( $fetch = $pdo_verifica->fetch() ) {
			if($fetch['id']==$r){
			
$a=$fetch['usuarios_user_id'];

}
}


$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM usuarios ORDER BY user_id DESC');
		$pdo_verifica->execute();

		
		while( $fetch = $pdo_verifica->fetch() ) {
			
			if($fetch['user_id']==$a){
			
			echo '<h4><b> Nome: </b>' . $fetch['user_name'] . '</h4><hr>';
			echo '<h4><b> Matricula: </b>' . $fetch['user_matricula'] . '</h4><hr>';
			echo '<h4><b> Cpf: </b>' . $fetch['user_cpf'] . '</h4><hr>';
			echo '<h4><b> Email: </b>' . $fetch['user_email'] . '</h4><hr>';
			echo '<h4><b> telefone: </b>' . $fetch['user_Telefone'] . '</h4><hr>';
			echo '<h4><b> Celular: </b>' . $fetch['user_celular'] . '</h4><hr>';
			echo '<h4><b> Atuação: </b>' . $fetch['user_atuacoes'] . '</h4><hr>';
		
		}
	
		}



		$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM cadastroviagem ORDER BY id DESC');
		$pdo_verifica->execute();
		
		while( $fetch = $pdo_verifica->fetch() ) {
			if($fetch['id']==$r){
			
			
			echo '<h4><b> Tipo formulario: </b>' . $fetch['tipoFormulario'] . '</h1><hr>';
			echo '<h4><b> Tipo de Solicitação: </b>' . $fetch['tipoSolitacao'] . '</h1><hr>';
			echo '<h4><b> Finalidade da viagem: </b>' . $fetch['finalidadeViagem'] . '</h1><hr>';
			echo '<h4><b> Numero do banco : </b>' . $fetch['numeroBanco'] . '</h1><hr>';
			echo '<h4><b> Numero da agencia : </b>' . $fetch['numeroAgencia'] . '</h1><hr>';
			echo '<h4><b> Numero da conta : </b>' . $fetch['numeroConta'] . '</h1><hr>';
			echo '<h4><b> Uf de origem : </b>' . $fetch['ufOrigem'] . '</h1><hr>';
			echo '<h4><b> Cidade de origem : </b>' . $fetch['cidadeOrigem'] . '</h1><hr>';
			echo '<h4><b> Uf de destino : </b>' . $fetch['ufDestino'] . '</h1><hr>';
			echo '<h4><b> Cidade de destino : </b>' . $fetch['cidadeDestino'] . '</h1><hr>';
			echo '<h4><b> Data de saida : </b>' . $fetch['dataSaida'] . '</h1><hr>';
			echo '<h4><b> Data de retorno : </b>' . $fetch['dataRetorno'] . '</h1><hr>';
			echo '<h4><b> Quantiade de diarias : </b>' . $fetch['quantiadeDiarias'] . '</h1><hr>';
			//fatou arquivo
			echo '<h4><b> Justificativa : </b>' . $fetch['justificativa'] . '</h1><hr>';
			echo '<h4><b> Forma de afastamento : </b>' . $fetch['formaAfastamento'] . '</h1><hr>';
			echo '<h4><b> Meio de transporte : </b>' . $fetch['meioTransporte'] . '</h1><hr>';
		
	
		}
		}




		?>
		</table>
 <div class="form-group"><br>
				<form method="POST" action="aprovar.php">
				
				<button style="width: 180px; color: #FFFFFF; background-color:#4CAF50; border: 1px black; " type="submit" class="btn btn-default" value="Cadastrar">Aprovar</button>
			
  </div>

				
				

      
			
  <div class="form-group"><br>


				
				<label for="justificativa de recusa"> <h4><b>Justificativa de Recusa</b></h4><br></label><br>
				<textarea tyle="height: 60px; width: 150px;" name="justificativa" class="form-control" id="justificativa" rows="6" style="border-radius: 10px;" onfocus="cleanit(this);refresh_nu()" placeholder= 'Motivo de recusa do formulario, favor especificar o motivo com detalhes.'></textarea>
			     </div>
			     <button style="width: 180px; color: #FFFFFF; background-color:red; border: 1px black; " type="submit" class="btn btn-default" name="r" value="1" >Recusar</button>


</form>

</body>
</html>

