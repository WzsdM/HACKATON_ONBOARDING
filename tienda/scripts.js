document.getElementById('menu-toggle').addEventListener('click', function() {
    document.getElementById('nav').classList.toggle('active');
});
// Obtener el título y el contenido del menú desplegable
const dropdownToggle = document.getElementById('dropdown-toggle');
const dropdownContent = document.getElementById('dropdown-content');

// Agregar evento de clic al título para mostrar/ocultar el menú desplegable
dropdownToggle.addEventListener('click', function() {
    dropdownContent.classList.toggle('show');
});

// Cerrar el menú desplegable si se hace clic fuera de él
window.addEventListener('click', function(event) {
    if (!event.target.matches('#dropdown-toggle')) {
        const dropdowns = document.getElementsByClassName('dropdown-content');
        for (let i = 0; i < dropdowns.length; i++) {
            const dropdown = dropdowns[i];
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
            }
        }
    }
});


document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.storeBtn').addEventListener('click', function() {
        window.location.href = '../menupage/menu.php';
    });
})