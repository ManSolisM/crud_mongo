<?php 
require_once __DIR__ . '/../vendor/autoload.php';

class Conexion {
    public static function conectar() {
        try {
            // Credenciales de conexión
            $servidor = "localhost";
            $puerto = "27017";
            $usuario = "backend";
            $password = "backend2025";
            $BD = "b221190042_crud2";

            // Cadena de conexión corregida
            $cadenaConexion = "mongodb://$usuario:$password@$servidor:$puerto/$BD?authSource=admin";

            $cliente = new MongoDB\Client($cadenaConexion);

            // Selecciona y devuelve la base de datos
            return $cliente->selectDatabase($BD);

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
?>
