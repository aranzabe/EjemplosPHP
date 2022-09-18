<?php 

//Recoger elementos de la URL.
// $requestMethod = $_SERVER["REQUEST_METHOD"];
// //echo $requestMethod.'<br>';
// $paths = $_SERVER['REQUEST_URI'];
// //echo $paths.'<br>';
// $patos = explode("/", $paths);
// //echo count($patos).'<br>';;
// if ($patos[1] == ""){
//     echo 'No hay parámetros'.'<br>';
// }
// else {
//     // print_r($patos);
//     // echo '<br>';
//     header("Content-Type:application/json");
//     header("HTTP/1.1 200 Perfect");
//     unset($patos[0]);
//     echo json_encode($patos);
// }

//Devolver vectores asociatovos como objetos.
$v = [
    'uno' => 1,
    'dos' => 2,
    'tres' => [
        '1A' => 'uno',
        '2B' => 'dos'
    ]
];
header("Content-Type:application/json");
header("HTTP/1.1 400 Perfect");
echo json_encode($v);

//Devolver objetos como json.
// require_once 'Persona.php';

// $p = new Persona("DAW2",20);
// // echo $p;
// $p->addElementos(0);
// $p->addElementos2('1A',1);
// $p->addElementos2('2B',2);
// $p->addElementos2('3C',3);
// $p->AddEle(5);
// $p->AddEle('4D',4);
// $p->AddEle(6);

// //$p->noExisto(12,4);

// header("Content-Type:application/json");
// header("HTTP/1.1 200 Perfect");
// echo json_encode($p);




//echo $_GET['url'];

// $url = $_SERVER['PHP_SELF'];
// echo $url.'<br>';
// $components = parse_url($url, PHP_URL_QUERY);
// echo $components;
// parse_str($components, $results);
// print_r($results); 
// foreach ($results as $key => $value) {
//     echo $value;
// }
//https://diego.com.es/introduccion-a-rest-en-php
//https://es.stackoverflow.com/questions/150790/redireccionar-todas-las-rutas-de-una-api-rest-al-index
//https://blog.ahierro.es/como-configurar-virtual-hosts-en-apache-y-ubuntu/
//https://www.juanonlab.com/blog/es/comandos-para-apache-2