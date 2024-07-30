<?php
function conectar(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tecnologia2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Conexion fallida: " . $conn->connect_error);
    }
    echo "Conexion exitosa";
    return $conn;
}