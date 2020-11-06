<?php 
require_once('librerias/cabe.php');
?>
<?php 
require_once('librerias/conexionBD.php');
?>
<?php
$id=0;
$descripcion="";

if(isset($_GET['id']))
{
	$sql="select * from roles where id=".$_GET['id'];
	$result=$conn->query($sql);
	$fila =$result->fetch_array();
	$id=$fila['id'];
	$descripcion=$fila['descripcion'];
}
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?=($id>0) ? 'Editar':'Nuevo' ?>Roles</h1>        
                <form action="rol-proc.php" method="post">
                 <input type="hidden" name="id" value="<?=$id?>" >

                  <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" value="<?=$descripcion?>" placeholder="Ingrese Descripcion">
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                  <a href="zonas.php" class="btn btn-danger">Cancelar</a>
                </form>                
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>