document.addEventListener("DOMContentLoaded", function() {
    const cancelBtn = document.getElementById("cancel-btn");
    const logoutBtn = document.getElementById("logout-btn");

    cancelBtn.addEventListener("click", function() {
        // Cerrar el modal (simplemente puedes ocultarlo)
        const modal = document.getElementById("content_info").parentElement;
        modal.style.display = "none";
    });

    logoutBtn.addEventListener("click", function() {
        // Limpiar el sessionStorage
        sessionStorage.removeItem("userData");

        // Comprobar si la data se ha borrado
        if (!sessionStorage.getItem("userData")) {
            console.log("userData borrado correctamente.");
        } else {
            console.error("Error al borrar userData.");
        }

        // Redirigir a la página de inicio de sesión
        window.location.href = "login.html"; // Asegúrate de que 'login.html' es la ruta correcta a tu página de inicio de sesión
    });
});
