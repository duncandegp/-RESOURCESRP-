<?php
// Conexión a la base de datos (ajusta los detalles de conexión)
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Recopilar datos del formulario
$employeeName = $_POST['employeeName'];
$date = $_POST['date'];
$timeIn = $_POST['timeIn'];
$timeOut = $_POST['timeOut'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO asistencia (employeeName, date, timeIn, timeOut) VALUES ('$employeeName', '$date', '$timeIn', '$timeOut')";

if ($conn->query($sql) === TRUE) {
    echo "Registro de asistencia guardado con éxito.";
} else {
    echo "Error al guardar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>