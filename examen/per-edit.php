<?php 
require_once('librerias/cabe.php');
require_once('librerias/conexionBD.php');

$sql = "select * from usuarios";
$result =  $conn->query($sql);
$usuarios = array();
while ($fila =  $result->fetch_array()) {
    $usuarios[] = $fila;
}

$sql = "select * from roles";
$result =  $conn->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}

$id=0;
$id_usuario="";
$id_rol="";

//echo $_GET['id'];
if(isset($_GET['id']))
{
	$sql="select * from permisos where id=".$_GET['id'];
	$result=$conn->query($sql);
	$fila =$result->fetch_array();
	$id=$fila['id'];
	$id_usuario=$fila['id_usuario'];
	$id_rol=$fila['id_rol'];
	
}
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?=($id>0) ? 'Editar':'Nuevo' ?> Permisos</h1>        
                <form action="per-proc.php" method="post">
                 <input type="hidden" name="id" value="<?=$id?>" >

                  <div class="form-group">
                    <label for="">Usuarios</label>
                    <select name="id_usuario" class="form-control">
                      <option value="">-- Seleccione --</option>
                      <?php foreach ($usuarios as $item): 
                      	if($item['id']==$id_usuario)
                        {
						?>
                        <option value="<?= $item['id'] ?>" selected><?= $item['usuario'] ?> </option>
                       <?php 
						}
						else
						{	   
					   ?> 
                       <option value="<?= $item['id'] ?>"><?= $item['usuario'] ?></option>
                       
                      <?php 
						}
					  
					  endforeach ?>
                    </select>
                  </div>
                                    
                   <div class="form-group">
                    <label for="">Roles</label>
                    <select name="id_rol" class="form-control">
                      <option value="">-- Seleccione --</option>
                      <?php foreach ($roles as $item): 
                      	if($item['id']==$id_rol)
                        {
						?>
                        <option value="<?= $item['id'] ?>" selected><?= $item['descripcion'] ?> </option>
                       <?php 
						}
						else
						{	   
					   ?> 
                       <option value="<?= $item['id'] ?>"><?= $item['descripcion'] ?></option>
                       
                      <?php 
						}
					  
					  endforeach ?>
                    </select>
                  </div>
                                   
                  <button type="submit" class="btn btn-primary">Enviar</button>
                  <a href="permisos.php" class="btn btn-danger">Cancelar</a>
                </form>                
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>