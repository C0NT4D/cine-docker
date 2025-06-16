
<?php
$host = 'db';
$db = 'cine';
$user = 'usuario1';
$pass = 'contrasenyaUsuario1';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM peliculas");

echo "<h1>Películas:</h1><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>" . $row['titulo'] . " - " . $row['director'] . " (" . $row['anio'] . ")</li>";
}
echo "</ul>";

$conn->close();
?>
