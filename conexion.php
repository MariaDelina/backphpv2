

<?php

class ConexionCleverCloud {
    private $host = "bczp2jaxjy4t0inzvohm-mysql.services.clever-cloud.com";
    private $usuario = "uv7980n9ptuiokkj";
    private $contrasena = "yPQ5gVIj5qvGlVuQjijQ";
    private $base_datos = "bczp2jaxjy4t0inzvohm";

    private $conexion;

    public function __construct() {
        // Intentar establecer la conexión
        try {
            $this->conexion = new PDO("mysql:host={$this->host};dbname={$this->base_datos}", $this->usuario, $this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Establecer encabezados CORS
            $this->setearEncabezadosCors();

            echo "Conexión exitosa";
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }

    public function cerrarConexion() {
        // Cerrar la conexión
        $this->conexion = null;
    }

    private function setearEncabezadosCors() {
        header("Access-Control-Allow-Origin: *"); // Permitir solicitudes desde cualquier origen
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); // Métodos permitidos
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept"); // Encabezados permitidos
        header("Referrer-Policy: strict-origin-when-cross-origin"); 
    }

    // Resto de tu código...
}

// Crear una instancia de la clase
$conexionCleverCloud = new ConexionCleverCloud();

// Hacer lo que necesites con la conexión...

// No olvides cerrar la conexión cuando hayas terminado
// $conexionCleverCloud->cerrarConexion();

?>