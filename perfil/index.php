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
            <span class="home">HOME</span>
            </a> 
        </div>
            <h1>PERFIL</h1>  
        <div class="container">
            <div class="perfil">        
                <div class="avatar">
                    <form action="subir_foto.php" method="POST" enctype="multipart/form-data">
                        <label for="fotoInput">
                            <img src="<?php echo isset($_COOKIE['foto_usuario']) ? $_COOKIE['foto_usuario'] . '?ts=' . time() : 'https://via.placeholder.com/100x100?text=?'; ?>" alt="Usuario" id="avatarImg">
                        </label>
                        <input type="file" name="foto" id="fotoInput" accept="image/*" onchange="this.form.submit()">
                    </form>
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
                <div class="titulo-historial">HISTORIAL</div>
                <div class="zigzag"></div>
            </div>
        </div>
    </body>
    </html>
