<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tienda Principal</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<header>
  <div class="nav-left">
    <div class="dropdown">
      <a href="../perfil/index.php">Mi Perfil</a>
      <div class="dropdown-content">
        <a href="../reportes/index.php">Reportes</a>
        <a href="#">Soporte Técnico</a>
      </div>
    </div>
    <a href="#">Promociones</a>
    
  </div>

  <div class="nav-right">
    <a href="../carrito_venta/index.php" class="btn-carrito" title="Carrito">
    🛒<span id="contador-carrito">0</span>
    </a>
    <button class="logout-btn" onclick="window.location.href='../logout.php'">Cerrar Sesión</button>
  </div>
</header>

  <main>

   <div class="filtros-dropdown">
      <button class="filtro-btn">Filtros</button>
    <div class="filtros-menu">
      <button data-filtro="todos">Todos</button>

    <div class="submenu">
      <span>Camisas</span>
      <button data-filtro="camisas-hombre">Camisas Hombre</button>
      <button data-filtro="camisas-mujer">Camisas Mujer</button>
    </div>

    <div class="submenu">
      <button data-filtro="blusas">Blusas</button>
    </div>

    <div class="submenu">
      <span>Chaquetas</span>
      <button data-filtro="chaquetas-hombre">Chaquetas Hombre</button>
      <button data-filtro="chaquetas-mujer">Chaquetas Mujer</button>
    </div>

    <div class="submenu">
      <span>Pantalones</span>
      <button data-filtro="pantalones-hombre">Pantalones Hombre</button>
      <button data-filtro="pantalones-mujer">Pantalones Mujer</button>
    </div>

    <button data-filtro="faldas">Faldas</button>
  </div>
</div>


    <section class="productos-grid">
      <!-- Camisas -->
        <div class="producto"  data-categoria="camisas-hombre">
            <div class="img-placeholder">
                <img src="/img/Camisas/hombre/Camisa1.jpg" alt="Camiseta" style="width: 200px; height: 200px; object-fit: cover;">
            </div>
            <div class="info">
                <h3>Camiseta Básica</h3>
                <p>Tallas: S, M, L</p>
                <p class="precio">$35.000</p>
                <button class="btn-add" data-id="1" data-nombre="Camiseta Básica" data-precio="35000">Añadir al carrito</button>
            </div>
        </div>

        <div class="producto" data-categoria="camisas-hombre">
            <div class="img-placeholder">
                <img src="/img/Camisas/hombre/Camisa2.jpg" alt="Camiseta" style="width: 200px; height: 200px; object-fit: cover;">
            </div>
            <div class="info">
                <h3>Camiseta Premium</h3>
                <p>Tallas: S, M, L</p>
                <p class="precio">$45.000</p>
                <button class="btn-add" data-id="2" data-nombre="Camiseta Premium" data-precio="45000">Añadir al carrito</button>
            </div>
        </div>

        <div class="producto" data-categoria="camisas-hombre">
            <div class="img-placeholder">
                <img src="/img/Camisas/hombre/Camisa3.jpg" alt="Camiseta" style="width: 200px; height: 200px; object-fit: cover;">
            </div>
            <div class="info">
                <h3>Camiseta Deportiva</h3>
                <p>Tallas: S, M, L</p>
                <p class="precio">$55.000</p>
                <button class="btn-add" data-id="3" data-nombre="Camiseta Deportiva" data-precio="55000">Añadir al carrito</button>
            </div>
        </div>

        <div class="producto" data-categoria="camisas-hombre">
          <div class="img-placeholder">
            <img src="/img/Camisas/hombre/Camisa4.jpg" alt="Camisa" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Camiseta Modelo 4</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$39.000</p>
            <button class="btn-add" data-id="4" data-nombre="Camiseta Modelo 4" data-precio="39000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="camisas-hombre">
          <div class="img-placeholder">
            <img src="/img/Camisas/hombre/Camisa5.jpg" alt="Camisa" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Camiseta Modelo 5</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$40.000</p>
            <button class="btn-add" data-id="5" data-nombre="Camiseta Modelo 5" data-precio="40000">Añadir al carrito</button>
          </div>
        </div>
      <!--Camisas mujer -->
        <div class="producto" data-categoria="camisas-mujer">
          <div class="img-placeholder">
            <img src="/img/Camisas/mujer/Camisa1.jpg" alt="Camisa" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Camiseta Modelo 6</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$41.000</p>
            <button class="btn-add" data-id="6" data-nombre="Camiseta Modelo 6" data-precio="41000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="camisas-mujer">
          <div class="img-placeholder">
            <img src="/img/Camisas/mujer/Camisa2.jpg" alt="Camisa" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Camiseta Modelo 7</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$42.000</p>
            <button class="btn-add" data-id="7" data-nombre="Camiseta Modelo 7" data-precio="42000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="camisas-mujer">
          <div class="img-placeholder">
            <img src="/img/Camisas/mujer/Camisa3.jpg" alt="Camisa" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Camiseta Modelo 8</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$43.000</p>
            <button class="btn-add" data-id="8" data-nombre="Camiseta Modelo 8" data-precio="43000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="camisas-mujer">
          <div class="img-placeholder">
            <img src="/img/Camisas/mujer/Camisa4.jpg" alt="Camisa" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Camiseta Modelo 9</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$44.000</p>
            <button class="btn-add" data-id="9" data-nombre="Camiseta Modelo 9" data-precio="44000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="camisas-mujer">
          <div class="img-placeholder">
            <img src="/img/Camisas/mujer/Camisa5.jpg" alt="Camisa" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Camiseta Modelo 10</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$45.000</p>
            <button class="btn-add" data-id="10" data-nombre="Camiseta Modelo 10" data-precio="45000">Añadir al carrito</button>
          </div>
        </div>

        <!--Pantalones -->
          <!--Hombre -->
        <div class="producto" data-categoria="pantalones-hombre">
          <div class="img-placeholder">
            <img src="/img/Pantalones/hombre/pantalon1.jpg" alt="Pantalón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Pantalón Modelo 1</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$60.000</p>
            <button class="btn-add" data-id="11" data-nombre="Pantalón Modelo 1" data-precio="60000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="pantalones-hombre">
          <div class="img-placeholder">
            <img src="/img/Pantalones/hombre/pantalon2.jpg" alt="Pantalón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Pantalón Modelo 2</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$61.000</p>
            <button class="btn-add" data-id="12" data-nombre="Pantalón Modelo 2" data-precio="61000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="pantalones-hombre">
          <div class="img-placeholder">
            <img src="/img/Pantalones/hombre/pantalon3.jpg" alt="Pantalón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Pantalón Modelo 3</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$62.000</p>
            <button class="btn-add" data-id="13" data-nombre="Pantalón Modelo 3" data-precio="62000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="pantalones-hombre">
          <div class="img-placeholder">
            <img src="/img/Pantalones/hombre/pantalon4.jpg" alt="Pantalón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Pantalón Modelo 4</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$63.000</p>
            <button class="btn-add" data-id="14" data-nombre="Pantalón Modelo 4" data-precio="63000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="pantalones-hombre">
          <div class="img-placeholder">
            <img src="/img/Pantalones/hombre/pantalon5.jpg" alt="Pantalón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Pantalón Modelo 5</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$64.000</p>
            <button class="btn-add" data-id="15" data-nombre="Pantalón Modelo 5" data-precio="64000">Añadir al carrito</button>
          </div>
        </div>
            <!--Mujer -->
        <div class="producto" data-categoria="pantalones-mujer">
          <div class="img-placeholder">
            <img src="/img/Pantalones/mujer/pantalon1.jpg" alt="Pantalón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Pantalón Modelo 6</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$65.000</p>
            <button class="btn-add" data-id="16" data-nombre="Pantalón Modelo 6" data-precio="65000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="pantalones-mujer">
          <div class="img-placeholder">
            <img src="/img/Pantalones/mujer/pantalon2.jpg" alt="Pantalón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Pantalón Modelo 7</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$66.000</p>
            <button class="btn-add" data-id="17" data-nombre="Pantalón Modelo 7" data-precio="66000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="pantalones-mujer">
          <div class="img-placeholder">
            <img src="/img/Pantalones/mujer/pantalon3.jpg" alt="Pantalón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Pantalón Modelo 8</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$67.000</p>
            <button class="btn-add" data-id="18" data-nombre="Pantalón Modelo 8" data-precio="67000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="pantalones-mujer">
          <div class="img-placeholder">
            <img src="/img/Pantalones/mujer/pantalon4.jpg" alt="Pantalón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Pantalón Modelo 9</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$68.000</p>
            <button class="btn-add" data-id="19" data-nombre="Pantalón Modelo 9" data-precio="68000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="pantalones-mujer">
          <div class="img-placeholder">
            <img src="/img/Pantalones/mujer/pantalon5.jpg" alt="Pantalón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Pantalón Modelo 10</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$69.000</p>
            <button class="btn-add" data-id="20" data-nombre="Pantalón Modelo 10" data-precio="69000">Añadir al carrito</button>
          </div>
        </div>

        <!--Chaquetas -->
          <!--Hombre -->
        <div class="producto" data-categoria="chaquetas-hombre">
          <div class="img-placeholder">
            <img src="/img/Chaquetas/hombre/chaqueta1.jpg" alt="Chaqueta" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Chaqueta Modelo 1</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$80.000</p>
            <button class="btn-add" data-id="21" data-nombre="Chaqueta Modelo 1" data-precio="80000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="chaquetas-hombre">
          <div class="img-placeholder">
            <img src="/img/Chaquetas/hombre/chaqueta2.jpg" alt="Chaqueta" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Chaqueta Modelo 2</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$81.000</p>
            <button class="btn-add" data-id="22" data-nombre="Chaqueta Modelo 2" data-precio="81000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="chaquetas-hombre">
          <div class="img-placeholder">
            <img src="/img/Chaquetas/hombre/chaqueta3.jpg" alt="Chaqueta" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Chaqueta Modelo 3</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$82.000</p>
            <button class="btn-add" data-id="23" data-nombre="Chaqueta Modelo 3" data-precio="82000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="chaquetas-hombre">
          <div class="img-placeholder">
            <img src="/img/Chaquetas/hombre/chaqueta4.jpg" alt="Chaqueta" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Chaqueta Modelo 4</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$83.000</p>
            <button class="btn-add" data-id="24" data-nombre="Chaqueta Modelo 4" data-precio="83000">Añadir al carrito</button>
          </div>
        </div>
 
        <div class="producto" data-categoria="chaquetas-hombre">
          <div class="img-placeholder">
            <img src="/img/Chaquetas/hombre/chaqueta5.jpg" alt="Chaqueta" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Chaqueta Modelo 5</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$84.000</p>
            <button class="btn-add" data-id="25" data-nombre="Chaqueta Modelo 5" data-precio="84000">Añadir al carrito</button>
          </div>
        </div>
        
          <!--Mujer -->
        <div class="producto" data-categoria="chaquetas-mujer">
          <div class="img-placeholder">
            <img src="/img/Chaquetas/mujer/chaqueta1.jpg" alt="Chaqueta" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Chaqueta Modelo 6</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$85.000</p>
            <button class="btn-add" data-id="26" data-nombre="Chaqueta Modelo 6" data-precio="85000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="chaquetas-mujer">
          <div class="img-placeholder">
            <img src="/img/Chaquetas/mujer/chaqueta2.jpg" alt="Chaqueta" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Chaqueta Modelo 7</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$86.000</p>
            <button class="btn-add" data-id="27" data-nombre="Chaqueta Modelo 7" data-precio="86000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="chaquetas-mujer">
          <div class="img-placeholder">
            <img src="/img/Chaquetas/mujer/chaqueta3.jpg" alt="Chaqueta" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Chaqueta Modelo 8</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$87.000</p>
            <button class="btn-add" data-id="28" data-nombre="Chaqueta Modelo 8" data-precio="87000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="chaquetas-mujer">
          <div class="img-placeholder">
            <img src="/img/Chaquetas/mujer/chaqueta4.jpg" alt="Chaqueta" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Chaqueta Modelo 9</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$88.000</p>
            <button class="btn-add" data-id="29" data-nombre="Chaqueta Modelo 9" data-precio="88000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="chaquetas-mujer">
          <div class="img-placeholder">
            <img src="/img/Chaquetas/mujer/chaqueta5.jpg" alt="Chaqueta" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Chaqueta Modelo 10</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$89.000</p>
            <button class="btn-add" data-id="30" data-nombre="Chaqueta Modelo 10" data-precio="89000">Añadir al carrito</button>
          </div>
        </div>

        <!-- Faldas -->
        <div class="producto" data-categoria="faldas">
          <div class="img-placeholder">
            <img src="/img/faldas/falda1.jpg" alt="Falda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Falda Modelo 1</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$45.000</p>
            <button class="btn-add" data-id="31" data-nombre="Falda Modelo 1" data-precio="45000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="faldas">
          <div class="img-placeholder">
            <img src="/img/faldas/falda2.jpg" alt="Falda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Falda Modelo 2</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$46.000</p>
            <button class="btn-add" data-id="32" data-nombre="Falda Modelo 2" data-precio="46000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="faldas">
          <div class="img-placeholder">
            <img src="/img/faldas/falda3.jpg" alt="Falda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Falda Modelo 3</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$47.000</p>
            <button class="btn-add" data-id="33" data-nombre="Falda Modelo 3" data-precio="47000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="faldas">
          <div class="img-placeholder">
            <img src="/img/faldas/falda4.jpg" alt="Falda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Falda Modelo 4</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$48.000</p>
            <button class="btn-add" data-id="34" data-nombre="Falda Modelo 4" data-precio="48000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="faldas">
          <div class="img-placeholder">
            <img src="/img/faldas/falda5.jpg" alt="Falda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Falda Modelo 5</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$49.000</p>
            <button class="btn-add" data-id="35" data-nombre="Falda Modelo 5" data-precio="49000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="faldas">
          <div class="img-placeholder">
            <img src="/img/faldas/falda6.jpg" alt="Falda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Falda Modelo 6</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$50.000</p>
            <button class="btn-add" data-id="36" data-nombre="Falda Modelo 6" data-precio="50000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="faldas">
          <div class="img-placeholder">
            <img src="./img/faldas/falda7.jpg" alt="Falda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Falda Modelo 7</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$51.000</p>
            <button class="btn-add" data-id="37" data-nombre="Falda Modelo 7" data-precio="51000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="faldas">
          <div class="img-placeholder">
            <img src="/img/faldas/falda8.jpg" alt="Falda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Falda Modelo 8</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$52.000</p>
            <button class="btn-add" data-id="38" data-nombre="Falda Modelo 8" data-precio="52000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="faldas">
          <div class="img-placeholder">
            <img src="/img/faldas/falda9.jpg" alt="Falda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Falda Modelo 9</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$53.000</p>
            <button class="btn-add" data-id="39" data-nombre="Falda Modelo 9" data-precio="53000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="faldas">
          <div class="img-placeholder">
            <img src="/img/faldas/falda10.jpg" alt="Falda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Falda Modelo 10</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$54.000</p>
            <button class="btn-add" data-id="40" data-nombre="Falda Modelo 10" data-precio="54000">Añadir al carrito</button>
          </div>
        </div>

        <!-- Blusas -->
        <div class="producto" data-categoria="blusas">
          <div class="img-placeholder">
            <img src="/img/Blusas/blusa1.jpg" alt="Blusa Elegante" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Blusa Elegante</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$52.000</p>
            <button class="btn-add" data-id="41" data-nombre="Blusa Elegante" data-precio="52000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="blusas">
          <div class="img-placeholder">
            <img src="/img/Blusas/blusa2.jpg" alt="Blusa Casual" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Blusa Casual</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$48.000</p>
            <button class="btn-add" data-id="42" data-nombre="Blusa Casual" data-precio="48000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="blusas">
          <div class="img-placeholder">
            <img src="/img/Blusas/blusa3.jpg" alt="Blusa Estampada" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Blusa Estampada</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$50.000</p>
            <button class="btn-add" data-id="43" data-nombre="Blusa Estampada" data-precio="50000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="blusas">
          <div class="img-placeholder">
            <img src="/img/Blusas/blusa4.jpg" alt="Blusa Formal" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Blusa Formal</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$55.000</p>
            <button class="btn-add" data-id="44" data-nombre="Blusa Formal" data-precio="55000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="blusas">
          <div class="img-placeholder">
            <img src="/img/Blusas/blusa5.jpg" alt="Blusa de Seda" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Blusa de Seda</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$65.000</p>
            <button class="btn-add" data-id="45" data-nombre="Blusa de Seda" data-precio="65000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="blusas">
          <div class="img-placeholder">
            <img src="/img/Blusas/blusa6.jpg" alt="Blusa Casual Verano" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Blusa Casual Verano</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$40.000</p>
            <button class="btn-add" data-id="46" data-nombre="Blusa Casual Verano" data-precio="40000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="blusas">
          <div class="img-placeholder">
            <img src="/img/Blusas/blusa7.jpg" alt="Blusa con Encaje" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Blusa con Encaje</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$53.000</p>
            <button class="btn-add" data-id="47" data-nombre="Blusa con Encaje" data-precio="53000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="blusas">
          <div class="img-placeholder">
            <img src="/img/Blusas/blusa8.jpg" alt="Blusa de Algodón" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Blusa de Algodón</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$42.000</p>
            <button class="btn-add" data-id="48" data-nombre="Blusa de Algodón" data-precio="42000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="blusas">
          <div class="img-placeholder">
            <img src="/img/Blusas/blusa9.jpg" alt="Blusa Floral" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Blusa Floral</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$47.000</p>
            <button class="btn-add" data-id="49" data-nombre="Blusa Floral" data-precio="47000">Añadir al carrito</button>
          </div>
        </div>

        <div class="producto" data-categoria="blusas">
          <div class="img-placeholder">
            <img src="/img/Blusas/blusa10.jpg" alt="Blusa de Manga Larga" style="width: 200px; height: 200px; object-fit: cover;">
          </div>
          <div class="info">
            <h3>Blusa de Manga Larga</h3>
            <p>Tallas: S, M, L</p>
            <p class="precio">$50.000</p>
            <button class="btn-add" data-id="50" data-nombre="Blusa de Manga Larga" data-precio="50000">Añadir al carrito</button>
          </div>
        </div>
    </section>
    <div class="paginacion">
  <button class="pagina-btn" data-pagina="1">1</button>
  <button class="pagina-btn" data-pagina="2">2</button>
  <button class="pagina-btn" data-pagina="3">3</button>
  <button class="pagina-btn" data-pagina="4">4</button>
  <button class="pagina-btn" data-pagina="5">5</button>
  </div>

  </main>
  <script>
  document.querySelectorAll('img').forEach(img => {
    img.setAttribute('loading', 'lazy');
  });
</script>
  <script src="filtro.js"></script>
  <script src="script.js"></script>
  <script src="n_paginas.js"></script>
  <script src="mezclarProductos.js"></script>
</body>
</html>
