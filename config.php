<?php
	//conexão com o banco de dados
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$db   = "advocacia";
	$port = "8889";

	$conn = new mysqli($host,$user,$pass,$db, $port) or die($conn->error);
// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

	//inclusão de páginas
	switch (@$_REQUEST["page"]) {
		//advogado		
		case 'cad-advogado':
			include("advogado/cadastrar-advogado.php");
			break;
		case 'edi-advogado':
			include("advogado/editar-advogado.php");
			break;
		case 'lis-advogado':
			include("advogado/listar-advogado.php");
			break;
		case 'sal-advogado':
			include("advogado/salvar-advogado.php");
			break;
		//empresa		
		case 'cad-empresa':
			include("empresa/cadastrar-empresa.php");
			break;
		case 'edi-empresa':
			include("empresa/editar-empresa.php");
			break;
		case 'lis-empresa':
			include("empresa/listar-empresa.php");
			break;
		case 'sal-empresa':
			include("empresa/salvar-empresa.php");
			break;
		
		
		default:
			include("dashboard.php");
	}

?>