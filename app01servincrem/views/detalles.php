<?php

include "configuracion.php";

$con = configuracion();
 
$id = $_GET['id'];

$sql= "SELECT * FROM datoscontratante WHERE id='$id' ";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./registro.css">
</head>
<body>
<h1 class="principal">SERVINCREM C.A</h1>
<div class="container">
  <form action="editUser.php" method="POST">
    <h2 class="titulo">Datos Personales</h2><br>
 
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresC" value="<?= $row['nombresC']   ?>" disabled>
        </div>
    <br>
        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosC" value="<?= $row['apellidosC']   ?>" disabled>
        </div> 
    </div>
    <br>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="id" value="<?= $row['id']   ?>" disabled>
        </div>
    <br>
        <div class="col">
          <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" name="telefonoC" value="<?= $row['telefonoC']   ?>" disabled>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadC" value="<?= $row['edadC']   ?>" disabled>
        </div>
        <div class="col"></div><div class="col"></div><div class="col"></div><div class="col"></div>
    </div>
    <br>
    <h2 class="titulo">Carga Familiar</h2><br>
    <!-- registro 1 -->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresF" value="<?= $row['nombresF1']   ?>" disabled >
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosF" value="<?= $row['apellidosF1']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF" value="<?= $row['cedulaF1']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF" value="<?= $row['edadF1']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentesco" value="<?= $row['parentescoF1']   ?>" disabled >
          </div>
    </div>
    <br>
    <!-- registro 2 -->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" value="<?= $row['nombresF2']   ?>" disabled >
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" value="<?= $row['apellidosF2']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" value="<?= $row['cedulaF2']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" value="<?= $row['edadF2']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" value="<?= $row['parentescoF2']   ?>" disabled>
          </div>
    </div>
    <br>
        <!-- registro 3 -->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" value="<?= $row['nombresF3']   ?>" disabled>
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" value="<?= $row['apellidosF3']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" value="<?= $row['cedulaF3']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" value="<?= $row['edadF3']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" value="<?= $row['parentescoF3']   ?>" disabled>
          </div>
    </div>
    <br>
      <!-- registro 4-->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" value="<?= $row['nombresF4']   ?>" disabled>
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" value="<?= $row['apellidosF4']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" value="<?= $row['cedulaF4']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" value="<?= $row['edadF4']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" value="<?= $row['parentescoF4']   ?>" disabled>
          </div>
    </div>
    <br>
    <!-- registro 5-->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" value="<?= $row['nombresF5']   ?>" disabled>
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" value="<?= $row['apellidosF5']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" value="<?= $row['cedulaF5']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" value="<?= $row['edadF5']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" value="<?= $row['parentescoF5']   ?>" disabled>
        </div>
    </div>
    <br>
    <!-- registro 6-->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" value="<?= $row['nombresF6']   ?>" disabled>
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" value="<?= $row['apellidosF6']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" value="<?= $row['cedulaF6']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" value="<?= $row['edadF6']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" value="<?= $row['parentescoF6']   ?>" disabled>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" value="<?= $row['nombresF7']   ?>" disabled>
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" value="<?= $row['apellidosF7']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" value="<?= $row['cedulaF7']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" value="<?= $row['edadF7']   ?>" disabled>
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" value="<?= $row['parentescoF7']   ?>" disabled>
        </div>
    </div>
    <br>
    <!-- ultimo pago-->
    <h2 class="titulo">Datos de Pago</h2><br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Ultimo Pago" aria-label="Ultimo Pago" name="datosPago" value="<?= $row['datosPago']   ?>" disabled>
    </div>
    </div>
    <!-- boton-->
    <br>
    <a class="btn btn-primary" href="./buscador.php" role="button">Regresar a búsqueda</a>

    </form>
    

</div>
</body>
</html>