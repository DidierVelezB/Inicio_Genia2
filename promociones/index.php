<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promociones</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <h1>GENIA - Promociones</h1>
            </div>
        </header>

        <div class="formulario">
            <div class="form-columna">
                <h2>Productos recomendados</h2>
                <div id="recomendaciones" class="recomendaciones-box">
                <!-- Aquí se mostrarán los productos sugeridos -->
                    <p style="color:#777">Aquí aparecerán tus sugerencias personalizadas pronto...</p>
                </div>
                <button onclick="cargarRecomendaciones()">Cargar Recomendaciones</button>
                <button onclick="limpiarHistorial()">Limpiar Historial</button>


            </div>
        </div>
    </div>

    <script src="promocion.js"></script>
</body>