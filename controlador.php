<?php 
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["usuario"]) || empty($_POST["contraseña"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {
        include("conexion_bd.php"); 
        
        $nombre = trim($_POST["usuario"]);
        $contraseña = trim($_POST["contraseña"]);

        // Consulta preparada para mayor seguridad
        $stmt = $conexion->prepare("SELECT idCliente, nombre, contraseña FROM cliente WHERE nombre = ?");
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($datos = $resultado->fetch_object()) {
            if (password_verify($contraseña, $datos->contraseña)) {
                $_SESSION['usuario_id'] = $datos->idCliente;
                $_SESSION['usuario'] = $datos->nombre;
                header("Location: ../ropa_venta/index.php");  
                exit;
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
        } else {
            echo '<div class="alert alert-danger">USUARIO NO ENCONTRADO</div>';
        }

        $stmt->close();
        $conexion->close();
    }
} 
?>
