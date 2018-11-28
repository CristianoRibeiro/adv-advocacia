<h1>Listar Advogado</h1>


<?php

$query = "SELECT id_advogado, nome_advogado, oab_advogado, especialidade_advogado, advogado.idempresa as idempresa, empresa.idempresa as idempresa_empresa, empresa.nome  as nome_empresa
FROM advogado
INNER JOIN empresa ON (advogado.idempresa = empresa.idempresa)";
$result = $conn->query( $query );
$num_results = $result->num_rows;

?>

<table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>OAB</th>
      <th>Especialidade</th>
      <th>Empresa</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
       
       
        if($num_results > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td  scope='row'>".$row['nome_advogado']."</td>
                    <td>".$row['oab_advogado']."</td>
                    <td>".$row['especialidade_advogado']."</td>
                    <td>".$row['nome_empresa']."</td>
                    <td>
                        <a href='index.php?page=edi-advogado&id=".$row['id_advogado']."'><button class='btn btn-warning' type='button'>Edit</button></a>"; 

                        ?>
                        
                        <form class="form-inline" action="index.php?page=sal-advogado" method="POST">
                          <input type="hidden" name="acao" value="excluir">
                          <input type="hidden" name="id" value="<?php echo $row['id_advogado'] ?>">
                          <button type="submit" class="btn btn-danger" onClick="return confirm('Deleta esse advogado?')">Remove</button>
                        </form>

                        <?php 
                        echo "
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
        }
        ?>

   
  </tbody>
</table>


