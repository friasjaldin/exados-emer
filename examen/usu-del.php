<?php 
require_once('librerias/conexionBD.php');
$id= $_GET['id'];
$sql = "delete from usuarios where id=$id";
$result = $conn->query($sql);	
if (!$result) die('Error al Borrar');
header('Location: usuarios.php');
?>