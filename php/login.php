<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['xUsuario']) && isset($_POST['xContrasena'])) {

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://saiiut.utvtol.edu.mx/jsp/acceso.jsp?xUsuario=' . $_POST['xUsuario'] .
            '&xContrasena=' . $_POST['xContrasena'] . '&xUniversidad=22',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HEADER => 1,
        CURLOPT_COOKIESESSION => true,
        CURLOPT_VERBOSE => true,
        CURLOPT_COOKIEFILE  => $cookieFile,
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    if (preg_match('~Location: (.*)~i', $response, $match)) {
        $location = trim($match[1]);
    }

    preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
    $cookies = array();
    foreach ($matches[1] as $item) {
        parse_str($item, $cookie);
        $cookies = array_merge($cookies, $cookie);
    }
    //var_dump($cookies);

    if (array_key_exists('usr', $cookies)) {
        setcookie("unidad", $cookies['unidad'],strtotime( '+30 days' ),"/",$_SERVER['SERVER_NAME']);
        setcookie("uni", $cookies['uni'],strtotime( '+30 days' ),"/",$_SERVER['SERVER_NAME']);
        setcookie("usr", $cookies['usr'],strtotime( '+30 days' ),"/",$_SERVER['SERVER_NAME']);
        setcookie("pro", $cookies['pro'],strtotime( '+30 days' ),"/",$_SERVER['SERVER_NAME']);
        setcookie("per", $cookies['per'],strtotime( '+30 days' ),"/",$_SERVER['SERVER_NAME']);
        setcookie("JSESSIONID", $cookies['JSESSIONID'],strtotime( '+30 days' ),"/",$_SERVER['SERVER_NAME']);
        
        //echo $response;
        header('Location: ../calificaciones.php');
    } else {
        header('Location:  ../index.php?incorrecto=true');
    }
}
