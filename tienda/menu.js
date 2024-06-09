document.addEventListener('DOMContentLoaded', function() {
    $storeBtn=document.querySelector('.storeBtn');
    $storeBtn.innerText="Inicio";
        $storeBtn.innerHTML=`
        <div class="storetext">
                    Inicio
                </div>
                <div class="icon">
                    <img src="../img/iconos/inicio.svg" alt="Home Icon" class="storeIcon">
                </div>
        `;
    $storeBtn.addEventListener('click', function() {
        if($storeBtn.classList.contains("isOnStore")){
            $storeBtn.innerText="Inicio";
        $storeBtn.innerHTML="Inicio";
        $storeBtn.classList.toggle("isOnStore");
        window.location.href = '../tienda/tienda.php';
        }else{
            $storeBtn.innerText="Tienda";
        $storeBtn.innerHtml="Tienda";
        window.location.href = '../menupage/menu.php';
        }
        
    });
})
