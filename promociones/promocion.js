function cargarRecomendaciones() {
    const historial = JSON.parse(localStorage.getItem('productosClickeados')) || [];
    const contenedor = document.getElementById('recomendaciones');
    contenedor.innerHTML = '';

    if (historial.length === 0) {
        contenedor.innerHTML = '<p style="color:#777">No hay productos recomendados aún.</p>';
        return;
    }

    // Contar frecuencia de tipos y géneros
    const tipoContador = {};
    const generoContador = {};

    historial.forEach(p => {
        tipoContador[p.tipo] = (tipoContador[p.tipo] || 0) + 1;
        generoContador[p.genero] = (generoContador[p.genero] || 0) + 1;
    });

    const tipoFavorito = Object.entries(tipoContador).sort((a, b) => b[1] - a[1])[0][0];
    const generoFavorito = Object.entries(generoContador).sort((a, b) => b[1] - a[1])[0][0];

    // Filtrar productos que coincidan
    const sugerencias = historial.filter(p => p.tipo === tipoFavorito && p.genero === generoFavorito);

    sugerencias.slice(-5).reverse().forEach(producto => {
        const item = document.createElement('div');
        item.className = 'producto-sugerido';
        item.innerHTML = `
            <h3>${producto.nombre}</h3>
            <img src="${producto.imagen}" alt="${producto.nombre}" />
            <p>${producto.tipo} - ${producto.genero}</p>
        `;
        contenedor.appendChild(item);
    });
}
