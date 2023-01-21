<?php
include "views/configuracion.php";

$con = configuracion();

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];



$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";

$query = mysqli_query($con, $sql);

$nr= mysqli_num_rows($query);


if($nr == 1){
    
    header ("location:busquedayregistro.php");

}else{
    
    header("location:login.php");
    
}


?>