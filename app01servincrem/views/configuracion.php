<?php

function configuracion (){
    
$host = "localhost:3307";
$user = "root";
$pass = "root";
$bd= "servincrem";
 
$connect= mysqli_connect($host,$user,$pass);

mysqli_select_db($connect, $bd);

return $connect;

}

?>