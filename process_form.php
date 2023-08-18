<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "confirmxvmari");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $asist = $_POST["asist"];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO invitados (name, asist) VALUES ('$name', '$asist')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir a la misma página con un mensaje en la URL
        header("http://localhost:8000/");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
