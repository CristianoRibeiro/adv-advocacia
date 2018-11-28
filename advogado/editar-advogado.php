<h1>Editar Advogado</h1>

<?php
	$id  = @$_REQUEST["id"];
	
	$query = "SELECT id_advogado, nome_advogado, oab_advogado, especialidade_advogado, advogado.idempresa as idempresa, empresa.idempresa as idempresa_empresa, empresa.nome  as nome_empresa
	FROM advogado
	INNER JOIN empresa ON (advogado.idempresa = empresa.idempresa) where id_advogado = '{$id}'";

	$result = $conn->query( $query );

	$num_results = $result->num_rows;

	while ($row = $result->fetch_assoc()) {
	
?>


<form action="index.php?page=sal-advogado" method="POST">
	<input type="hidden" name="acao" value="editar">
  	<input type="hidden" name="id" value="<?php echo $id ?>">

	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_advogado" class="form-control"  value="<?php echo $row['nome_advogado'] ?>" >
	</div>
	<div class="form-group">
		<label>OAB</label>
		<input type="text" name="oab_advogado" class="form-control" value="<?php echo $row['oab_advogado'] ?>" >
	</div>
	<div class="form-group">
		<label>Especialidade</label>
		<input type="text" name="especialidade_advogado" class="form-control"value="<?php echo $row['especialidade_advogado'] ?>" >
	</div>

	<div class="form-group">

	<?php
			$sql = "SELECT * FROM empresa";
			$result = $conn->query( $sql );
			$num_results_empresa = $result->num_rows;
	?>


	<select class="form-control" name="idempresa">
	<option> Selecione uma Empresa</option>
	<?php if($num_results_empresa > 0) {
            while($empresa = $result->fetch_assoc()) { 
								
							$selected = $professor['idempresa'] == $row['idempresa'] ? 'selected' : '';
							
	?>
		<option <?php echo $selected; ?> value="<?php echo $empresa['idempresa']; ?>" >
																
			<?php  echo $empresa['nome']; ?>
			
		</option>

	<?php 
					} 
			}
	?>

</select>

</div>

	<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php 
}

?>