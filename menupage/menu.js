// Función para obtener el nivel del usuario almacenado en el sessionStorage
function obtenerNivelUsuario() {
  const userData = sessionStorage.getItem("userData");
  if (userData) {
    const userDataObj = JSON.parse(userData);
    return userDataObj.puntaje;
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
    if (nivelNum != nivelUsuario) {//AQUI YEICOT
      nivel.style.pointerEvents = "none";
    }
    if(nivelNum > nivelUsuario){
      nivel.style.opacity = "0.5"; // Cambia la opacidad para indicar que está desactivado
    }
  });
}

// Llamar a la función para controlar los niveles cuando se cargue la página
window.onload = controlarNiveles;

document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".storeBtn").addEventListener("click", function () {
    window.location.href = "../tienda/tienda.php";
  });
});