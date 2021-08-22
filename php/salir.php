<?php
setcookie("unidad", null, -1, '/', $_SERVER['SERVER_NAME']);
setcookie("uni", null, -1, '/', $_SERVER['SERVER_NAME']);
setcookie("usr", null, -1, '/', $_SERVER['SERVER_NAME']);
setcookie("pro", null, -1, '/', $_SERVER['SERVER_NAME']);
setcookie("per", null, -1, '/', $_SERVER['SERVER_NAME']);
setcookie("JSESSIONID", null, -1, '/', $_SERVER['SERVER_NAME']);

header('Location: ../index.php');