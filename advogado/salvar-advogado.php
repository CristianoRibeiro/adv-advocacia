<?php
	$nome = @$_REQUEST["nome_advogado"];
	$oab  = @$_REQUEST["oab_advogado"];
	$esp  = @$_REQUEST["especialidade_advogado"];
	$id  = @$_REQUEST["id"];
	$idempresa = @$_REQUEST['idempresa'];


	switch ($_REQUEST["acao"]) {
		case 'cadastrar':

			$sql = "INSERT INTO advogado (nome_advogado, oab_advogado, especialidade_advogado, idempresa) VALUES ('{$nome}', '{$oab}', '{$esp}', '{$idempresa}')";
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
				?>
					<script>
					//Using setTimeout to execute a function after 5 seconds.
					setTimeout(function () {
						//Redirect with JavaScript
						window.location.href= 'index.php?page=lis-advogado';
					}, 3000);
					</script>
				<?php
				exit(); 
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
				?>
					<script>
					//Using setTimeout to execute a function after 5 seconds.
					setTimeout(function () {
						//Redirect with JavaScript
						window.location.href= 'index.php?page=lis-advogado';
					}, 3000);
					</script>
				<?php
				exit();
			}
			break;
		case 'editar':
			
			$sql = "UPDATE advogado 
							SET nome_advogado = '{$nome}', 
							 oab_advogado = '{$oab}',
							 especialidade_advogado = '{$esp}',
							 idempresa = '{$idempresa}'
							WHERE id_advogado = {$id}";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<br><div class='alert alert-success'>Atualizado com sucesso!</div>";
				
				?>
					<script>
					//Using setTimeout to execute a function after 5 seconds.
					setTimeout(function () {
						//Redirect with JavaScript
						window.location.href= 'index.php?page=lis-advogado';
					}, 3000);
					</script>
				<?php
				exit();

			}else{
				print "<br><div class='alert alert-danger'>Não foi possível atualizar.</div>";
			
			?>
					<script>
					//Using setTimeout to execute a function after 5 seconds.
					setTimeout(function () {
						//Redirect with JavaScript
						window.location.href= 'index.php?page=lis-advogado';
					}, 3000);
					</script>

				<?php
				exit();
			}

			break;

		case 'excluir':
		
		 $sql = "DELETE FROM advogado  WHERE id_advogado = {$id}";
		 $res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<br><div class='alert alert-success'>Deletado com sucesso!</div>";
				?>
		
					<script>
					//Using setTimeout to execute a function after 5 seconds.
					setTimeout(function () {
						//Redirect with JavaScript
						window.location.href= 'index.php?page=lis-advogado';
					}, 3000);
					</script>

				<?php
				exit();

			}else{
				print "<br><div class='alert alert-danger'>Não foi possível Deletar.</div>";
				?>

					<script>
					//Using setTimeout to execute a function after 5 seconds.
					setTimeout(function () {
						//Redirect with JavaScript
						window.location.href= 'index.php?page=lis-advogado';
					}, 3000);
					</script>

				<?php

			exit();

			}
			break;
			
	}
?>