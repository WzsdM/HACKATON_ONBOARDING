// scripts.js

document.addEventListener('DOMContentLoaded', (event) => {
    window.openModal = function(title, description, confirmCallback) {
        // Actualiza el contenido del modal
        document.getElementById('modalTitle').textContent = title;
        document.getElementById('modalBody').textContent = description;
        
        // Añade el evento de confirmación
        const confirmButton = document.getElementById('modalConfirmButton');
        confirmButton.onclick = function() {
            confirmCallback();
            $('#confirmModal').modal('hide');
        };
        
        // Muestra el modal
        $('#confirmModal').modal('show');
    };

    window.loadModal = function(title, description, confirmCallback) {
        $('#modalContainer').load('modal.html', function() {
            // Espera a que el modal se haya cargado, luego llama a openModal
            openModal(title, description, confirmCallback);
        });
    };

    // Ejemplo de acción de confirmación
    window.confirmAction = function() {
        console.log('Acción confirmada.');
        // Aquí puedes poner el código para cerrar sesión u otra acción
    };
});
