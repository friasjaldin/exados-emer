<?php 
$host = 'sql205.epizy.com';
$user = 'epiz_26707747';
$pass = 'PCkvgNlGgBB4Fhy';
$bdat = 'epiz_26707747_bd_blog';

$conn = new mysqli($host,$user,$pass,$bdat);

if ($conn->connect_errno > 0){
    die('Error de conexion ' . $conn->connect_error);
}
?>