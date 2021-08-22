<?php
$output = implode('; ', array_map(
    function ($v, $k) {
        return sprintf("%s=%s", $k, $v);
    },
    $_COOKIE,
    array_keys($_COOKIE)
));

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://saiiut.utvtol.edu.mx/jsp/Escolar/muestra_datos_alumno.jsp',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Cookie: ' . $output
    ),
));

$response = (curl_exec($curl));

curl_close($curl);

$page = $response;
include('php/limpiar_calificaciones.php');

