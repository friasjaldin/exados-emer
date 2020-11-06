<?php 
require_once('librerias/conexionBD.php');
$id= $_GET['id'];

$sql = "delete from permisos where id=$id";
$result =  $conn->query($sql);	
if (!$result) die('Error al eliminar');
header('Location: permisos.php');
?>