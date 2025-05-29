
function mezclarProductos() {
  const contenedor = document.querySelector('.productos-grid');
  const productos = Array.from(contenedor.children);

  // Algoritmo para barajar
  for (let i = productos.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [productos[i], productos[j]] = [productos[j], productos[i]];
  }

  // Vaciar y volver a agregar en orden mezclado
  productos.forEach(producto => contenedor.appendChild(producto));

  // Mostrar el contenedor ya mezclado
  contenedor.style.visibility = 'visible';
}

// Ejecutar al cargar la página
window.addEventListener('DOMContentLoaded', mezclarProductos);
