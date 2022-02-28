<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibe Datos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Parcial 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="form_clientes.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cliente</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Datos</a></li>
                            <li><a class="dropdown-item" href="form_clientes2.php">Datos Ajax</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</head>

<body>

    <?php
    $Codigo = $_POST['codigo'];
    $Nombre = $_POST['nombre'];
    $Apellido = $_POST['apellido'];
    $Dui = $_POST['dui'];
    $Direccion = $_POST['direccion'];
    $Telefono = $_POST['telefono'];
    $Email= $_POST['email'];



    ?>


    <div class="container-fluid">
        <table class="table table-success table-striped" border="1">
            <tbody>
                <tr>
                    <th>Codigo</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Dui</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>

                </tr>
                <tr>
                    <td><?php echo $Codigo ?></td>
                    <td><?php echo $Nombre ?></td>
                    <td><?php echo $Apellido ?></td>
                    <td><?php echo $Dui ?></td>
                    <td><?php echo $Direccion ?></td>
                    <td><?php echo $Telefono ?></td>
                    <td><?php echo $Email ?></td>
                </tr>
            </tbody>
        </table>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>