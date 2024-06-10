document.addEventListener("DOMContentLoaded", function () {
  $storeBtn = document.querySelector(".storeBtn");
  $storeBtn.innerText = "Inicio";
  $storeBtn.innerHTML = `
        <div class="storetext">
                    Inicio
                </div>
                <div class="icon">
                    <img src="../img/iconos/inicio.svg" alt="Home Icon" class="storeIcon">
                </div>
        `;
  $storeBtn.addEventListener("click", function () {
    window.location.href = "../menupage/menu.php";
  });
});



// Función para obtener los datos del usuario almacenados en el sessionStorage
function obtenerDatosUsuario() {
    const userData = sessionStorage.getItem("userData");
    if (userData) {
        return JSON.parse(userData);
    }
    return null;
  }
  
  // Función para actualizar la interfaz con los datos del usuario
  function actualizarInterfazUsuario() {
    const userData = obtenerDatosUsuario();
    if (userData) {
        document.getElementById("userGreeting").textContent = `Alumno,`;
        document.getElementById("userName").textContent = userData.nombre;
        document.getElementById("coinsCount").textContent = userData.monedas;
    }
  }

  
  window.onload = function() {
    actualizarInterfazUsuario();
  };