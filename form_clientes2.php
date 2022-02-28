<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AJAX</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Parcial 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Datos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="form_clientes.php">Datos</a></li>
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

    <br>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <form method="post" action="recibe_clientes2.php">
                    <h3 align="center">Datos del cliente Ajax</h3>
                    <div class="form-group">
                        <label for="codigo">Codigo:</label>
                        <input id="codigo" class="form-control" type="text" name="codigo" />
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" />
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input id="apellido" class="form-control" type="text" name="apellido" />
                    </div>
                    <div class="form-group">
                        <label for="dui">Dui:</label>
                        <input id="dui" class="form-control" type="text" name="dui" />
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion:</label>
                        <input id="direccion" class="form-control" type="text" name="direccion" />
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono:</label>
                        <input id="telefono" class="form-control" type="text" name="telefono" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" class="form-control" type="text" name="email">
                    </div>
                    <br />
                    <button class="btn btn-primary" id="enviar" type="button">Enviar</button>
                </form>
            </div>
        </div>
        <br>
        <div id="Msg">
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="ajax/funcion.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>