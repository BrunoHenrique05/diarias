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
	$a=$_SESSION['a'];
	
	$i = $_POST['r'];
	$g=$_SESSION['b'];
$z = $_POST['justificativa'];
	if($i==1){
$sql  = "UPDATE cadastroviagem SET recusa='$z' WHERE id = '$g'";
if ($conn->query($sql) === TRUE) {
	
	                      echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;http://localhost/TrabalhoAilton/aprovacao.php'>
					<script type=\"text/javascript\">
						alert(\"Formulario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TrabalhoAilton/aprovacao.php'>
					<script type=\"text/javascript\">
						alert(\"O Formulario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}

	}else{




		 
		
	$sql  = "UPDATE cadastroviagem SET status=2 WHERE id =  '$g'";

	
	if ($conn->query($sql) === TRUE) {
	
	                      echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;http://localhost/TrabalhoAilton/aprovacao.php'>
					<script type=\"text/javascript\">
						alert(\"Formulario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TrabalhoAilton/aprovacao.php'>
					<script type=\"text/javascript\">
						alert(\"O Formulario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
}


// Create connection

// Check connection

















			mysqli_close($conn);
	
	
?>

