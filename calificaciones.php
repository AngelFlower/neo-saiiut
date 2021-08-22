<?php
if (!isset($_COOKIE['usr'])) {
    header('Location: index.php');
    exit();
}
else {
    include('php/consulta_calificaciones.php');
}
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus calificaciones | Neo SAIIUT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calificaciones.css">
    <link rel="shortcut icon" href="https://svgsilh.com/svg/1394560.svg" type="image/x-icon">
</head>

<body>
    <header class="neo-header pt-0">
        <div class="container mt-0 pt-4 pb-4 d-flex justify-content-between">
            <h1 class="display-3">Neo SAIIUT</h1>
            <div>
                <a href="php/salir.php" class="btn">Cerrar sesión</a>
                <img class="cuervo" src="https://svgsilh.com/svg/1394560.svg" alt="cuervo">
            </div>
        </div>
    </header>
    <section id="contenido" class="container bg-white py-3 shadow mb-5">
        <div class="container pt-2">
            <div>
                <h2>Estudiante</h2>
            </div>
            <div id="estudiante" class="row mb-4">
                <div class="col-6">
                    <div id="nombre"></div>
                    <div id="matricula"></div>
                </div>
                <div class="col-6">
                    <div id="carrera"></div>
                    <div id="grupo"></div>
                </div>
            </div>
            <div class="mb-3">
                <h2>Calificaciones</h2>
            </div>
            <div id="calificaciones">

            </div>
            <div class="d-none">
                <?php
                $dom = new DOMDocument();
                $dom->loadHtml($descripcion);
                $x = new DOMXpath($dom);
                echo $descripcion;
                ?>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="text-center text-white p-4">
            Neo SAIIUT no pretende hacerse pasar por SAIIUT, solo es un cliente no oficial creado por la comunidad.
            <p>
                No almacenamos datos.
            </p>
            <p>
                <a class="btn btn-success" href="http://saiiut.utvtol.edu.mx">Entra a SAIIUT</a>
            </p>
        </div>
    </footer>
    <script src="js/calificaciones.js"></script>
</body>

</html>