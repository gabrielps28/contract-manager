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
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresC" value="<?= $row['nombresC']   ?>">
        </div>
    <br>
        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosC" value="<?= $row['apellidosC']   ?>">
        </div> 
    </div>
    <br>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="id" value="<?= $row['id']   ?>">
        </div>
    <br>
        <div class="col">
          <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" name="telefonoC" value="<?= $row['telefonoC']   ?>">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadC" value="<?= $row['edadC']   ?>">
        </div>
        <div class="col"></div><div class="col"></div><div class="col"></div><div class="col"></div>
    </div>
    <br>
    <h2 class="titulo">Carga Familiar</h2><br>
     <!-- registro 1 -->
     <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresF1" value="<?= $row['nombresF1']   ?>" >
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosF1" value="<?= $row['apellidosF1']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF1" value="<?= $row['cedulaF1']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF1" value="<?= $row['edadF1']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF1" value="<?= $row['parentescoF1']   ?>" >
          </div>
    </div>
    <br>
    <!-- registro 2 -->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" name="nombresF2" value="<?= $row['nombresF2']   ?>" >
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" name="apellidosF2" value="<?= $row['apellidosF2']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF2" value="<?= $row['cedulaF2']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF2" value="<?= $row['edadF2']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF2" value="<?= $row['parentescoF2']   ?>">
          </div>
    </div>
    <br>
        <!-- registro 3 -->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" name="nombresF3" value="<?= $row['nombresF3']   ?>">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" name="apellidosF3" value="<?= $row['apellidosF3']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF3" value="<?= $row['cedulaF3']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF3" value="<?= $row['edadF3']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF3" value="<?= $row['parentescoF3']   ?>">
          </div>
    </div>
    <br>
      <!-- registro 4-->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" name="nombresF4" value="<?= $row['nombresF4']   ?>">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" name="apellidosF4" value="<?= $row['apellidosF4']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF4" value="<?= $row['cedulaF4']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF4" value="<?= $row['edadF4']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF4" value="<?= $row['parentescoF4']   ?>">
          </div>
    </div>
    <br>
    <!-- registro 5-->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" name="nombresF5" value="<?= $row['nombresF5']   ?>">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" name="apellidosF5" value="<?= $row['apellidosF5']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula"  name="cedulaF5" value="<?= $row['cedulaF5']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF5" value="<?= $row['edadF5']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF5" value="<?= $row['parentescoF5']   ?>">
        </div>
    </div>
    <br>
    <!-- registro 6-->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" name="nombresF6" value="<?= $row['nombresF6']   ?>">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" name="apellidosF6" value="<?= $row['apellidosF6']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula"  name="cedulaF6" value="<?= $row['cedulaF6']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF6" value="<?= $row['edadF6']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF6" value="<?= $row['parentescoF6']   ?>">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" name="nombresF7" value="<?= $row['nombresF7']   ?>">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" name="apellidosF7" value="<?= $row['apellidosF7']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF7" value="<?= $row['cedulaF7']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF7" value="<?= $row['edadF7']   ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF7" value="<?= $row['parentescoF7']   ?>">
        </div>
    </div>
    <br>
    <!-- ultimo pago-->
    <h2 class="titulo">Datos de Pago</h2><br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Ultimo Pago" aria-label="Ultimo Pago" name="datosPago" value="<?= $row['datosPago']   ?>">
    </div>
    </div>
    <!-- boton-->
    <br>
    <button type="submit" class="btn btn-primary">Modificar</button>

    </form>
    

</div>
</body>
</html>