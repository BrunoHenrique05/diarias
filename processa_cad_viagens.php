<?php
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "cadastros";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
	
	session_start();

	$tipoFormulario = $_POST['tipoFormulario'];
	$tipoSolitacao = $_POST['tipoSolitacao'];
	$finalidadeViagem = $_POST['finalidadeViagem'];
	$numeroBanco = $_POST['numeroBanco'];
	$numeroAgencia = $_POST['numeroAgencia'];
	$numeroConta = $_POST['numeroConta'];
	$ufOrigem = $_POST['ufOrigem'];
        $cidadeOrigem = $_POST['cidadeOrigem'];
	$ufDestino = $_POST['ufDestino'];
	$cidadeDestino = $_POST['cidadeDestino'];
	$dataSaida = $_POST['dataSaida'];		
	$dataRetorno = $_POST['dataRetorno'];
	$quantiadeDiarias = $_POST['quantiadeDiarias'];
	$qarquivo = $_POST['arquivo'];
	$justificativa = $_POST['justificativa'];
	$formaAfastamento = $_POST['formaAfastamento'];
        $meioTransporte = $_POST['meioTransporte'];
        $usuarios_user_id = $_SESSION['user_id'];

	

		$sql = "INSERT INTO cadastroViagem (tipoFormulario,tipoSolitacao,finalidadeViagem,numeroBanco,numeroAgencia,numeroConta,ufOrigem,cidadeOrigem,ufDestino,cidadeDestino,dataSaida,dataRetorno,
quantiadeDiarias,arquivo,justificativa,formaAfastamento,meioTransporte,usuarios_user_id)
			VALUES ('$tipoFormulario','$tipoSolitacao','$finalidadeViagem','$numeroBanco','$numeroAgencia','$numeroConta','$ufOrigem','$cidadeOrigem','$ufDestino','$cidadeDestino','$dataSaida','$dataRetorno'
,'$quantiadeDiarias','$arquivo','$justificativa','$formaAfastamento','$meioTransporte','$usuarios_user_id')";

	

	
	if ($conn->query($sql) === TRUE) {
	
	                      echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;http://localhost/TrabalhoAilton/index.php'>
					<script type=\"text/javascript\">
						alert(\"Formulario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TrabalhoAilton/index.php'>
					<script type=\"text/javascript\">
						alert(\"O Formulario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}

			mysqli_close($conn);
	
	
?>

