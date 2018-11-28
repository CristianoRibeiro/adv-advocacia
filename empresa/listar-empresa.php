

<h3>Empresas</h3>
<br>

<?php
$query = "select * from empresa";
$result = $conn->query( $query );
$num_results = $result->num_rows;
?>

<table class="table table-hover ">
  <thead>
    <tr class="thead-light">
      <th>ID</th>
      <th>Nome</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
       
        if($num_results > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td  scope='row'>".$row['idempresa']."</td>
                    <td  scope='row'>".$row['nome']."</td>
                    <td>
                        <a href='index.php?page=edi-empresa&id=".$row['idempresa']."'><button class='btn btn-warning' type='button'>Edit</button></a>"; 

                        ?>
                        
                        <form class="form-inline" action="index.php?page=sal-empresa" method="POST">
                          <input type="hidden" name="acao" value="excluir">
                          <input type="hidden" name="idempresa" value="<?php echo $row['idempresa'] ?>">
                          <button type="submit" class="btn btn-danger" onClick="return confirm('Deleta esse empresa?')">Remove</button>
                        </form>

                        <?php 
                        echo "
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'><center>Não há empresas cadastrados</center></td></tr>";
        }
        ?>

   
  </tbody>
</table>


