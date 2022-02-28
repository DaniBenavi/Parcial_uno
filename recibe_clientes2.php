<?php
$codigo = $_POST['codigo'];
$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$dui = $_POST['dui'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <table class="table table-success table-striped" border="1"">
        <br>
        <thead>
            <tr>
            <th scope=" col">Codigo</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Dui</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $codigo ?></td>
                <td><?php echo $nombres ?></td>
                <td><?php echo $apellidos ?></td>
                <td><?php echo $dui ?></td>
                <td><?php echo $direccion ?></td>
                <td><?php echo $telefono ?></td>
                <td><?php echo $email ?></td>
            </tr>
        </tbody>
    </table>
</div>