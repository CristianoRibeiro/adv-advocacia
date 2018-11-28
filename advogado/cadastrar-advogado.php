<?php
$sql = "SELECT * FROM empresa";
$result = $conn->query( $sql );
$num_results = $result->num_rows;
?>

<h1>Cadastrar Advogado</h1>
<form action="index.php?page=sal-advogado" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_advogado" class="form-control">
	</div>
	<div class="form-group">
		<label>OAB</label>
		<input type="text" name="oab_advogado" class="form-control">
	</div>
	<div class="form-group">
		<label>Especialidade</label>
		<input type="text" name="especialidade_advogado" class="form-control">
	</div>

<select class="form-control" name="idempresa">
	<option value="">Selecione A Empresa</option>
	<?php if($num_results > 0) {
            while($row = $result->fetch_assoc()) { ?>
		 <option value="<?php echo $row['idempresa'] ?>"><?php echo $row['nome']; ?></option>

	<?php } }?>
</select>


	<button type="submit" class="btn btn-primary">Enviar</button>
</form>