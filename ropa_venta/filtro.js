document.querySelectorAll('.filtros-menu button').forEach(boton => {
  boton.addEventListener('click', () => {
    const categoria = boton.getAttribute('data-filtro');
    const productos = document.querySelectorAll('.producto');

    productos.forEach(producto => {
      const cat = producto.getAttribute('data-categoria');

      if (categoria === 'todos' || cat.includes(categoria)) {
        producto.style.display = 'block';
      } else {
        producto.style.display = 'none';
      }
    });
  });
});
