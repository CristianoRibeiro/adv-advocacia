<h1>Editar empresa</h1>
<?php
$id  = @$_REQUEST["id"];
$query = "select * from empresa where idempresa  = '{$id}'";
$result = $conn->query( $query );
$num_results = $result->num_rows;
while ($row = $result->fetch_assoc()) {
?>
<form action="index.php?page=sal-empresa" method="POST">
	<input type="hidden" name="acao" value="editar">
	<div class="form-group">
		<label>ID</label>
  	<input type="text" name="idempresa" value="<?php echo $id ?>" readonly class="form-control col-1">
	</div>
	<div class="form-group">
		<label>EMPRESA</label>
		<input type="text" name="nome_empresa" class="form-control"  value="<?php echo $row['nome'] ?>" >
	</div>
	
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php 
}

?>