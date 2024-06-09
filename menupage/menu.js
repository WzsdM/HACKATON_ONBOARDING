document.addEventListener('DOMContentLoaded', function() {
    $storeBtn=document.querySelector('.storeBtn');
    $storeBtn.addEventListener('click', function() {
        if($storeBtn.classList.contains("isOnStore")){
        $storeBtn.classList.toggle("isOnStore");
        window.location.href = '../menupage/menu.php';
        }else{
        window.location.href = '../tienda/tienda.php';
        }
        
    });
})
