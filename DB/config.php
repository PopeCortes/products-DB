<?php
// Datos de conexión a la base de datos
$host = "nombre_del_host"; // por lo general, "localhost" si la base de datos está en el mismo servidor que tu aplicación
$dbname = "nombre_de_la_base_de_datos";
$username = "nombre_de_usuario";
$password = "contraseña";

// Intentar establecer la conexión a la base de datos
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Configurar PDO para que arroje excepciones en caso de errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Otras configuraciones opcionales
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    echo "Conexión exitosa";
} catch (PDOException $e) {
    // Manejar cualquier error de conexión
    echo "Error de conexión: " . $e->getMessage();
}
?>
