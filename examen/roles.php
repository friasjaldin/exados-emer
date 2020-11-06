<?php 
require_once('librerias/conexionBD.php');
$sql = "select * from roles";
$result =  $conn->query($sql);
$roles = array();
while ($fila = $result->fetch_array()) {
    $roles[] = $fila;
}
require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Roles</h1>   
                <p>
                    <a href="rol-edit.php" class="btn btn-success">Nuevo Rol</a>
                </p>     
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Descripcion</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach ($roles as $item): ?>
                    <tr>
                        <td><?= $item['id']?></td>
                        <td><?= $item['descripcion']?></td>
                        <td>
                            <a href="rol-edit.php?id=<?=$item['id']?>" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <a href="rol-del.php?id=<?=$item['id']?>" class="btn btn-danger" onclick="return(confirm('¿ Borrar ?'))">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>
