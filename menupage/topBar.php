<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menupage/style_modals.css">
    <title>Document</title>
</head>
<body>
<div class="topBar">
    <div class="topBar_left">
        <div class="userImg">
            <img src="../img/perfil.png" alt="User Profile" class="userProfile" type="button" data-bs-toggle="modal" data-bs-target="#logout">
        </div>
        <div class="userName">
            <div class="font-bold whitetext" id="userGreeting"></div>
            <div class="whitetext" id="userName"></div>
        </div>
    </div>
    <div class="topBar_right">
        <div class="coinsPurse rounded">
            <div class="coinstext" id="coinsCount"></div>
            <div class="icon">
                <img src="../img/iconos/coin.png" alt="Coin Icon" class="coinIcon">
            </div>
        </div>
        <div class="storeBtn rounded">
            <div class="storetext">Tienda</div>
            <div class="icon">
                <img src="../img/iconos/tienda.png" alt="Store Icon" class="storeIcon">
            </div>
        </div>
    </div>
</div>


<script src="./menu.js"></script>
</body>
</html>
