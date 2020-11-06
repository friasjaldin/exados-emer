<?php 

require_once('librerias/cabe.php');
require_once('librerias/conexionBD.php');

$sql = 
"select p.id, u.id as 'id_usuario', u.usuario, r.id as 'id_rol', r.descripcion
from usuarios u, roles r, permisos p
where u.id=p.id_usuario AND r.id=p.id_rol
order by p.id";
$result =  $conn->query($sql);
$permisos = array();
while ($fila =  $result->fetch_array()) {
    $permisos[] = $fila;
}

?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Permisos</h1>   
                <p>
                    <a href="per-edit.php" class="btn btn-success">Nuevo</a>
                </p>     
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Id Usuario</th>
                        <th>Usuario</th>
                        <th>Id Rol</th>
                        <th>Descripcion</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach ($permisos as $item): ?>
                    <tr>
                        <td><?= $item['id']?></td>
                        <td><?= $item['id_usuario']?></td>
                        <td><?= $item['usuario']?></td>
                        <td><?= $item['id_rol']?></td>
                        <td><?= $item['descripcion']?></td>
                        <td>
                            <a href="per-edit.php?id=<?=$item['id']?>" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <a href="per-del.php?id=<?=$item['id']?>" class="btn btn-danger" onclick="return(confirm('Esta Seguro de Eliminar?'))">Eliminar</a>
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
