document.querySelectorAll('.btn-add').forEach(btn => {
    btn.addEventListener('click', () => {
        const producto = {
            id: btn.dataset.id,
            nombre: btn.dataset.nombre,
            precio: parseInt(btn.dataset.precio),
            talla: btn.closest('.producto').querySelector('p').innerText.split(': ')[1],
            imagen: btn.closest('.producto').querySelector('.img-placeholder img').getAttribute('src') 
        };
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        
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