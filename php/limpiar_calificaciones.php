<?php
// Carga html
$dom = new DOMDocument();
@$dom->loadHTML($page);

// Obtiene <section class="content">
$xpath = new DOMXpath($dom);
$result = $xpath->query('//form[@name="forma"]');

$htmlString = $dom->saveHTML($result->item(0));

$html = htmlentities($htmlString);


// Elimina clases
$descripcion = html_entity_decode($html);

$descripcion = preg_replace('/class=".*?"/', '', $descripcion);
$descripcion = preg_replace('/onmouseover=".*?"/', '', $descripcion);
$descripcion = preg_replace('/onmouseout=".*?"/', 'class="center"', $descripcion);
$descripcion = preg_replace('/colspan="50"/', 'class="h4" colspan="50"', $descripcion);
$descripcion = preg_replace('/colspan="1"/', 'class="h5" colspan="1"', $descripcion);
$descripcion = preg_replace('/width=".*?"/', '', $descripcion);
$descripcion = preg_replace('/cellspacing=".*?"/', '', $descripcion);
$descripcion = preg_replace('/align=".*?"/', '', $descripcion);
$descripcion = preg_replace('/data-source=".*?"/', '', $descripcion);
$descripcion = preg_replace('/data-site=".*?"/', '', $descripcion);


// Cambia <ul> por <p> y <li> por <br>
//$descripcion = preg_replace('<table>', '<table >', $descripcion);
$descripcion = str_replace(array('<i>','</i>'),array('<p>', '</p>'),$descripcion);
$descripcion = str_replace('DATOS GENERALES DEL ALUMNO','Tu información',$descripcion);

// Imprime html resultante
//echo $descripcion; 
