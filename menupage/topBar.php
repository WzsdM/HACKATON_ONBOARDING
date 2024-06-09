<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="topBar">
        <div class="topBar_left" type="button" id="dropPerfil" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="userImg">
                <img src="../img/perfil.png" alt="User Profile" class="userProfile">
            </div>
            <div class="userName">
                <div class="font-bold whitetext" id="userGreeting"></div>
                <div class="whitetext" id="userName"></div>
            </div>

            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropPerfil">
                <li>
                    <div class="icon"><img src="../img/iconos/icon-perfil.svg" alt="Store Icon" class="storeIcon"></div>
                    <div class="text">
                        <p>Mi perfil</p>
                    </div>
                </li>
                <li>
                    <div class="icon"><img src="../img/iconos/icon-book.svg" alt="Store Icon" class="storeIcon"></div>
                    <div class="text">
                        <p>Políticas</p>
                    </div>
                </li>
                <li>
                    <div class="icon"><img src="../img/iconos/icon-support.svg" alt="Store Icon" class="storeIcon"></div>
                    <div class="text">
                        <p>Soporte</p>
                    </div>
                </li>
                <li type="button" data-bs-toggle="modal" data-bs-target="#logout">
                    <div class="icon"><img src="../img/iconos/icon-logout.svg" alt="Store Icon" class="storeIcon"></div>
                    <div class="text">
                        <p>Cerrar Sesión</p>
                    </div>
                </li>
            </ul>
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

    <div class="modal fade" id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/componentes/cerrar.php"); ?>
    </div>
    <script src="menu.js"></script>
</body>

</html>