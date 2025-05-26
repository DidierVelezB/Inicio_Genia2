<?php 

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["usuario"]) || empty($_POST["contraseña"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {
        include("conexion_bd.php"); 
        
        $nombre = trim($_POST["usuario"]);
        $contraseña = trim($_POST["contraseña"]);

        // Consulta SQL para obtener el hash de la contraseña
        $sql = $conexion->query("SELECT * FROM cliente WHERE nombre='$nombre'");

        if (!$sql) {
            die("Error en la consulta SQL: " . $conexion->error);
        }

        if ($datos = $sql->fetch_object()) {
            // Verificar si la contraseña ingresada coincide con el hash almacenado
            if (password_verify($contraseña, $datos->contraseña)) {
                // Contraseña correcta, iniciar sesión
                $_SESSION['usuario_id'] = $datos->idCliente;
                $_SESSION['usuario'] = $datos->nombre;
                header("Location: ../ropa_venta/index.php");  
                exit;
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO </div>';
            }
        } else { 
            echo '<div class="alert alert-danger">USUARIO NO ENCONTRADO</div>';
        }
    }
} 

?>
