document.addEventListener('DOMContentLoaded', () => {
    // Obtenemos el nivel del usuario desde el almacenamiento de sesión
    const userData = sessionStorage.getItem('userData');
    if (!userData) {
        window.location.href = "../login.html"; // Redirigir a la página de inicio de sesión si no hay datos de usuario
        return;
    }

    const user = JSON.parse(userData);
    const userLevel = user.puntaje;

    // Función para abrir el modal del nivel correspondiente
    const openModal = (level) => {
        const modalId = `modalLevel${level}`;
        const modalElement = document.getElementById(modalId);
        const modalInstance = new bootstrap.Modal(modalElement);
        modalInstance.show();
    };

    // Asociamos eventos de clic a los niveles que el usuario puede acceder
    for (let i = 1; i <= userLevel; i++) {
        const levelElement = document.querySelector(`.level:nth-child(${i})`);
        levelElement.addEventListener('click', () => {
            openModal(i);
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.storeBtn').addEventListener('click', function() {
        window.location.href = '../tienda/tienda.php';
    });
})