<?php
$servidor="localhost";
$usuario="root";
$pasword="";
$basedatos="psicultura";
$conexion = mysqli_connect($servidor, $usuario, $pasword, $basedatos);
if(!$conexion){
    die("conexion fallida".mysqli_connect_error());
}