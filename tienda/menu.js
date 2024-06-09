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
        window.location.href = '../menupage/menu.php';
        const Data=JSON.parse(sessionStorage.getItem('userData'));
    $coins=document.querySelector('.coinstext');
    var monedero= Data["monedas"];
    $coins.innerHTML=monedero;
    });

    const Data=JSON.parse(sessionStorage.getItem('userData'));
    $coins=document.querySelector('.coinstext');
    var monedero= Data["monedas"];
    $coins.innerHTML=monedero;
    
});
