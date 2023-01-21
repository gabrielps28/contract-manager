<?php

?>

<html>
<head>
<title>registro</title>
<link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./registro.css">
</head>
 
<body>
<h1 class="principal">SERVINCREM C.A</h1>
<div class="container">
  <form action="crear.php" method="POST">
    <h2 class="titulo">Datos Personales</h2><br>
 
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresC">
        </div>
    <br>
        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosC">
        </div> 
    </div>
    <br>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="id">
        </div>
    <br>
        <div class="col">
          <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" name="telefonoC">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadC">
        </div>
        <div class="col"></div><div class="col"></div><div class="col"></div><div class="col"></div>
    </div>
    <br>
    <h2 class="titulo">Carga Familiar</h2><br>
    <!-- registro 1 -->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresF1">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosF1" >
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF1">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF1">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF1">
          </div>
    </div>
    <br>
    <!-- registro 2 -->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresF2" >
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosF2" >
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF2">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF2" >
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF2">
          </div>
    </div>
    <br>
        <!-- registro 3 -->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresF3">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosF3">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF3">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF3" >
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF3">
          </div>
    </div>
    <br>
      <!-- registro 4-->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresF4">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosF4">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF4">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF4">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF4">
          </div>
    </div>
    <br>
    <!-- registro 5-->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresF5">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosF5">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF5">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF5">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF5">
        </div>
    </div>
    <br>
    <!-- registro 6-->
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresF6">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosF6">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF6">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF6">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF6">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombre" name="nombresF7">
        </div>

        <div class="col">
          <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidosF7">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula" name="cedulaF7">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Edad" aria-label="Edad" name="edadF7">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" name="parentescoF7">
        </div>
    </div>
    <br>
    <!-- ultimo pago-->
    <h2 class="titulo">Datos de Pago</h2><br>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Ultimo Pago" aria-label="Ultimo Pago" name="datosPago">
    </div>
    </div>
    <!-- boton-->
    <br>
    <button type="submit" class="btn btn-primary">Registrar</button>

    </form>
    

</div>
</body>
</html>