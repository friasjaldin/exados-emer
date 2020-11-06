<?php 
require_once('librerias/conexionBD.php');
$id= $_POST['id'];
$descripcion = $_POST['descripcion'];

if($id==0)
{
$sql = "insert into roles (descripcion) values ('$descripcion')";

}
else
{
	
$sql = "update roles set descripcion='$descripcion' where id=$id";

}

$result =  $conn->query($sql);	

if (!$result) die('Error al Insertar');
header('Location: roles.php');
?>