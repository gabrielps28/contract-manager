<?php
include "configuracion.php";

$con = configuracion();
$id = $_GET ["id"];   

$sql = "DELETE FROM datoscontratante WHERE id='$id'";

$query = mysqli_query($con, $sql);

if($query){

    header("location: buscador.php");
    }

?>