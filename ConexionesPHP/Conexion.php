<?php
$server = "localhost";
$username = "root";
$password = "";
$BDname = "clinica_dental_leon";

$conn = mysqli_connect($server, $username, $password, $BDname);
$conn->set_charset("utf8");
if(!$conn){
    die ("Error de conexion".mysqli_connect_error());
}//else{
//     echo 'Conexion exitosa';
// }
?>