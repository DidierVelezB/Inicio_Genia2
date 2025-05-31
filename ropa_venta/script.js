document.querySelectorAll('.btn-add').forEach(btn => {
    btn.addEventListener('click', () => {
        const contenedorProducto = btn.closest('.producto');
        const producto = {
            id: btn.dataset.id,
            nombre: btn.dataset.nombre,
            precio: parseInt(btn.dataset.precio),
            talla: contenedorProducto.querySelector('p').innerText.split(': ')[1],
            imagen: contenedorProducto.querySelector('.img-placeholder img').getAttribute('src'),
            tipo: contenedorProducto.dataset.tipo || 'desconocido',
            genero: contenedorProducto.dataset.genero || 'unisex'
        };

        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        // Guardar historial de clics (MODIFICACIÓN AQUÍ)
        let historial = JSON.parse(localStorage.getItem('productosClickeados')) || [];
        if (!historial.some(item => item.id.toString() === producto.id.toString())) {
            historial.push(producto);
            localStorage.setItem('productosClickeados', JSON.stringify(historial));
        }

        // Verificar si el producto ya está en el carrito
        const existe = carrito.some(item => item.id.toString() === producto.id.toString());

        if (!existe) {
            carrito.push(producto);
            localStorage.setItem('carrito', JSON.stringify(carrito));
            actualizarContador();
            alert('✅ Producto añadido al carrito');
        } else {
            alert('⚠️ Este producto ya está en el carrito');
        }
    });
});

function actualizarContador() {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    document.querySelectorAll('#contador-carrito').forEach(element => {
        element.textContent = carrito.length;
    });
}