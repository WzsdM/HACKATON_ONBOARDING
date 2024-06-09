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

// Función para obtener el nivel del usuario almacenado en el sessionStorage
function obtenerNivelUsuario() {
  const userData = obtenerDatosUsuario();
  if (userData) {
      return userData.puntaje;
  }
  return null;
}

// Función para habilitar y deshabilitar los niveles según el nivel del usuario
function controlarNiveles() {
  // Obtener el nivel del usuario del sessionStorage
  const nivelUsuario = obtenerNivelUsuario();

  // Desactivar los niveles superiores al nivel del usuario
  const nivelesSuperiores = document.querySelectorAll(".level");
  nivelesSuperiores.forEach((nivel) => {
      const nivelNum = parseInt(nivel.classList[0].replace("level", ""));
      if (nivelNum != nivelUsuario) { //AQUI YEICOT
          nivel.style.pointerEvents = "none";
      }
      if (nivelNum > nivelUsuario) {
          nivel.style.opacity = "0.5";
      }
  });
}

// Llamar a las funciones para controlar los niveles y actualizar la interfaz cuando se cargue la página
window.onload = function() {
  controlarNiveles();
  actualizarInterfazUsuario();
};

document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".storeBtn").addEventListener("click", function () {
      window.location.href = "../tienda/tienda.php";
  });
});
