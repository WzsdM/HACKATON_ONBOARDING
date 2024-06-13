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

window.onload = function () {
  actualizarInterfazUsuario();
};
