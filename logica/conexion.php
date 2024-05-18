<?php
$host_db="192.168.0.13:3306";
$user_db="carlosmarin";
$pass_db="123456";
$name_db="informacion";

$conexion = new mysqli($host_db,$user_db,$pass_db,$name_db);

if($conexion->connect_error){
    echo "no hay conexion";
    
}else{
    
} 
?>
