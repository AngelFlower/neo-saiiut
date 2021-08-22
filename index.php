<?php
 if (isset($_COOKIE['usr'])) {
     header('Location: calificaciones.php');
 }
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neo SAIIUT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="https://svgsilh.com/svg/1394560.svg" type="image/x-icon">
</head>

<body>

    <div class="container d-flex container-login">
        <div class="card p-5 shadow card-login">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="display-5">Neo SAIIUT</h1>
                    <p>Consulta tus calificaciones desde un portal más amigable</p>
                    <img class="cuervo-login p-3 pt-4" src="https://svgsilh.com/svg/1394560.svg" alt="Cuervo">
                </div>
                <div class="col-sm-6">
                    <h2>Inicia sesión</h2>
                    <?php
                    if (isset($_GET['incorrecto']) && ($_GET['incorrecto'] == true)) {
                        echo '
                        <div class="alert alert-danger" role="alert">
                            Verifica tus datos 
                        </div>
                        ';
                    }
                    ?>
                    <form method="POST" action="php/login.php">
                        <div class="mb-3">
                            <label for="xUsuario" class="form-label">Matrícula</label>
                            <input required name="xUsuario" type="text" class="form-control" id="xUsuario" placeholder="Ingresa tu matrícula">
                        </div>
                        <div class="mb-3">
                            <label for="xContrasena" class="form-label">Contraseña</label>
                            <input required name="xContrasena" type="password" class="form-control" id="xContrasena" placeholder="Ingresa tu contraseña">
                        </div>
                        <button id="btn-login" type="submit" class="btn btn-success w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>