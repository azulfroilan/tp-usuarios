<?php 
//archivo database conexion
// este orden se tiene que respetar para todo ser user pss db
$servidor = "localhost";
$user = "root";
$password = "";
$database = "mi_base_de_datos";


$conx = new mysqli($servidor, $user, $password, $database);// objeto para conexion de base de datos 

if ($conx->connect_errno) {
    echo "error: ".$conx->connect_error;
}