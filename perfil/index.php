    <?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil e Historial</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        
        <div class="home-button">
            <a href="../ropa_venta/index.php" class="home-link">    
            <i class="fa-solid fa-house-chimney"></i>
            <span class="">HOME</span>
            </a>    
        </div>
        <div class="container">
            <div class="perfil">
                <p>PERFIL</p>
                <div class="avatar">
                    <img
                        src="<?=
                            isset($_COOKIE['foto_usuario'])
                            ? '../datosusuario/' . $_COOKIE['foto_usuario'] . '?ts=' . time()
                            : '../datosusuario/uploads/default.jpg'
                        ?>"
                        alt="Usuario">
                </div>
                <br>
                <form action="update.php" method="POST">
                    <select name="tipo_documento" class="documento">
                        <option value="">TIPO DE DOCUMENTO</option>
                        <option value="cedula">Cédula de ciudadanía</option>
                        <option value="tarjeta_identidad">Tarjeta de identidad</option>
                        <option value="pasaporte">Pasaporte</option>
                        <option value="cedula_ext">Cédula de extranjería</option>
                    </select>
                    
                    <input type="text" name="cedula" placeholder="N° DOCUMENTO" class="input-cedula">
                    <br>
                    <input type="text" name="nombre" placeholder="NOMBRES" class="input-nombre">
                    <input type="text" name="apellidos" placeholder="APELLIDOS" class="input-apellidos">
                    <br>
                    <input type="email" name="correoElectronico" class="full-width" placeholder="EMAIL">
                    <br>
                    <button type="submit" class="editar">EDITAR</button>
                </form>
            </div>
            <div class="historial">
                <button>HISTORIAL</button>
                <div class="zigzag"></div>
            </div>
        </div>
    </body>
    </html>
