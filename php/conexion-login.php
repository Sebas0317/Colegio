<?php

$host="localhost";
$user="root";
$password="";
$db="ingreso";

$conexion =  @mysqli_connect($host,$user,$password,$db);

if(!$conexion){
    echo "Error de conexion"
}





?>