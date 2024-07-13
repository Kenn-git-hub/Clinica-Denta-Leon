<?php
//enlace al archivo conexion
include("Conexion.php");

//variable de conexion
$connect = $conn;

//Variables del paciente
$nomApe = $_POST['nombre'];
$telefono = $_POST['telef'];
$correo = $_POST['correo'];
$coment = $_POST['comentario'];

//consulta para insertar los datos del paciente
$queryPa = "INSERT INTO paciente (nombApelli, telefono, correo, comentario) VALUES ('$nomApe', '$telefono', '$correo', '$coment')";

$veryPa = mysqli_query($connect, $queryPa);

///////////////////////////
//Consulta para seleccionar el id del paciente
$resultIdPa = mysqli_query($connect,"SELECT idPaciente FROM paciente WHERE nombApelli = '$nomApe'");
if($resultIdPa->num_rows > 0){
    while($row = $resultIdPa->fetch_assoc()){
        $idPaciente = $row["idPaciente"];
    }
}

//variable de la especialidad
$especi = $_POST['especialidad'];

//Consulta para insertar la especialidad
$queryEs = "INSERT INTO especialidad (idPaciente, especialidad) VALUES ('$idPaciente', '$especi')";
$veryEs = mysqli_query($connect, $queryEs);


//////////////////////////
//consulta para selecionar el id de la especialidad
$resultIdEs = mysqli_query($connect,"SELECT idEspec FROM especialidad WHERE especialidad = '$especi'");
if($resultIdEs->num_rows > 0){
    while($rows = $resultIdEs->fetch_assoc()){
        $idEspec = $rows["idEspec"];
    }
}

//variables de la cita
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

//Consulta para insertar datos de la cita
$queryCita = "INSERT INTO cita (idPaciente, idEspec, fecha, hora) VALUES ('$idPaciente', '$idEspec', '$fecha', '$hora')";
$veryCita = mysqli_query($connect, $queryCita);

//Comprobacion de las conexiones e inserciones
if($veryPa==true && $veryEs==true && $veryCita==true){
    echo '
        <script> 
            alert("Cita reservada exitosamente");
            window.location = "../Citas/citas.php";
        </script>
    ';
}

$connect->close();
?>