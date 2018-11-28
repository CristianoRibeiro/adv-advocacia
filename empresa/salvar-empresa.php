<?php
	$nome = @$_REQUEST["nome_empresa"];
	$id  = @$_REQUEST["idempresa"];

	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO empresa (nome) VALUES ('{$nome}')";
			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
				?>
					<script>
					setTimeout(function () {
						window.location.href= 'index.php?page=lis-empresa';
					}, 3000);
					</script>
				<?php
				exit(); 
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
				?>
					<script>
					setTimeout(function () {
						window.location.href= 'index.php?page=lis-empresa';
					}, 3000);
					</script>
				<?php
				exit();
			}
			break;
		case 'editar':
			$sql = "UPDATE empresa 
							SET nome = '{$nome}'
							WHERE idempresa = {$id}";
			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<br><div class='alert alert-success'>Atualizado com sucesso!</div>";
				?>
					<script>
					setTimeout(function () {
						window.location.href= 'index.php?page=lis-empresa';
					}, 3000);
					</script>
				<?php
				exit();

			}else{
				print "<br><div class='alert alert-danger'>Não foi possível atualizar.</div>";
			?>
					<script>
					setTimeout(function () {
						window.location.href= 'index.php?page=lis-empresa';
					}, 3000);
					</script>
				<?php
				exit();
			}
			break;
		case 'excluir':
		 $sql = "DELETE FROM empresa  WHERE idempresa = {$id}";
		 $res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<br><div class='alert alert-success'>Deletado com sucesso!</div>";
				?>
					<script>
					setTimeout(function () {
						window.location.href= 'index.php?page=lis-empresa';
					}, 3000);
					</script>
				<?php
				exit();
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível Deletar.</div>";
				?>
					<script>
					setTimeout(function () {
						window.location.href= 'index.php?page=lis-empresa';
					}, 3000);
					</script>
				<?php
			exit();
			}
			break;
	}
?>