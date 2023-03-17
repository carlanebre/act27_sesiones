<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="margin:8px 16px;">
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="consultar.php">Consultar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="actualizar.php">Actualizar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="eliminar.php">Eliminar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="register.php">Registro</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="login.php">Logout</a>
    </li>
</ul>

<?php
echo date("d/m/Y H:i:s");
?>