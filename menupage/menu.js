document.addEventListener('DOMContentLoaded', function() {
    $storeBtn=document.querySelector('.storeBtn');
    $storeBtn.addEventListener('click', function() {
        window.location.href = '../tienda/tienda.php';
    });

    const Data=JSON.parse(sessionStorage.getItem('userData'));
    $coins=document.querySelector('.coinstext');
    var monedero= Data["monedas"];
    $coins.innerHTML=monedero;
    
});
