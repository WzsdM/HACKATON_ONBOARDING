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
      return parseInt(userData.puntaje);
  }
  return null;
}

// Función para habilitar y deshabilitar los niveles según el nivel del usuario
function controlarNiveles() {
  // Obtener el nivel del usuario del sessionStorage
  var nivelUsuario = obtenerNivelUsuario();
  if(nivelUsuario==0){
    nivelUsuario=1;
  }

  // Desactivar los niveles superiores al nivel del usuario
  const nivelesSuperiores = document.querySelectorAll(".level");
  nivelesSuperiores.forEach((nivel) => {
      const nivelNum = parseInt(nivel.classList[0].replace("level", ""));
      console.log(nivelUsuario);
      console.log(nivelNum);
      if (nivelNum == nivelUsuario) { //AQUI YEICOT
        nivel.classList.add("myuserlevel")
          
          //nivel.style.pointerEvents = "myuserlevel";
      }
      else if (nivelNum > nivelUsuario) {
        nivel.classList.add("incompletelevel")
      }
      else if (nivelNum < nivelUsuario) {
        nivel.classList.add("completelevel")
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
