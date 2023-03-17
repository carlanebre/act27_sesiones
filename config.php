<?php

$host="localhost";
$user="root";
$password="";
$db="test";

// dsn está formado por localhost, base de datos, comilla simple
// luego usuario y contraseña
// constructor PDO tiene 3 argumentos

$conn=new PDO('mysql:host='.$host.';dbname='.$db.'',$user,$password);