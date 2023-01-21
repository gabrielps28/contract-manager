<?php
include "configuracion.php";

$con = configuracion();

$sql = "SELECT * FROM datoscontratante";

$query = mysqli_query($con, $sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador y acciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style1.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>



</head>

<body>
    <div>
        <nav class="navbar navbar-dark bg-dark ">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">SERVINCREM C.A</span>
                <ul class="nav justify-content-end nav-bordered" >
                    <li class="nav-item">
                        <a class="navbar-brand mb-0 h1" aria-current="page" href="./registro.php">Registrar Contratantes</a>
            
                </ul>
            </div>

        </nav>
 </div>

    <br><br><br>

    <div class="container pt-3 mb-2 p-4">
        <h3 class="display-6 text-center">Lista de Contratos</h3>

        <hr class="border border-dark border-3 opacity-75">
        
        <table class="table table-bordered border-dark table-hover align-middle text-center" id="myTable">
            <thead class="table-dark border-dark">
                <tr>

                    <td style="text-align: center">Cedula</td>
                    <td style="text-align: center">Nombres</td>
                    <td style="text-align: center">Apellidos</td>
                    <td style="text-align: center">Telefono</td>
                    <td style="text-align: center; width:14%">Acciones</td>

                </tr>

            </thead>


            <tbody class="">
                <?php

                while ($row = mysqli_fetch_array($query)) :
                ?>
                    <tr class="">
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nombresC'] ?></td>
                        <td><?= $row['apellidosC'] ?></td>
                        <td><?= $row['telefonoC'] ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="detalles.php?id=<?= $row['id'] ?>" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endwhile;
                ?>
            </tbody>

        </table>
        
   
    </div>
  
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>
    <script>
            /* Initialization of datatables */
            $(document).ready(function() {
                $('#myTable').DataTable({
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json',
                    },
                });
            });
        </script>
</body>

</html>