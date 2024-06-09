// Función para obtener el nivel del usuario almacenado en el sessionStorage
function obtenerNivelUsuario() {
    const userData = sessionStorage.getItem('userData');
    if (userData) {
        const userDataObj = JSON.parse(userData);
        return userDataObj.nivel;
    }
    return null;
}

// Función para habilitar y deshabilitar los niveles según el nivel del usuario
function controlarNiveles() {
    // Obtener el nivel del usuario del sessionStorage
    const nivelUsuario = obtenerNivelUsuario();

    // Deshabilitar todos los niveles
    const niveles = document.querySelectorAll('.level');
    niveles.forEach(function(nivel) {
        nivel.style.pointerEvents = 'none';
        nivel.style.opacity = '0.5';
    });

    // Habilitar el nivel del usuario
    if (nivelUsuario) {
        const nivelUsuarioElemento = document.getElementById('level0' + nivelUsuario);
        if (nivelUsuarioElemento) {
            nivelUsuarioElemento.style.pointerEvents = 'auto';
            nivelUsuarioElemento.style.opacity = '1';
        }
    }
}

// Llamar a la función para controlar los niveles cuando se cargue la página
window.onload = controlarNiveles;
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.storeBtn').addEventListener('click', function() {
        window.location.href = '../tienda/tienda.php';
    });
})