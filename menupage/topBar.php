<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menupage/style_modals.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="topBar">
        
        <div class="topBar_left dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="userImg">
                <img src="../img/perfil.png" alt="User Profile" class="userProfile">
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
        <ul class="dropdown-menu dropdown-menu-dark">
            <li class="d-flex gap-4">
                <div class="icon"><img src="../img/iconos/icon-perfil.svg"></div>
                <p>Mi perfil</p>
            </li>
            <li class="d-flex gap-4">
                <div class="icon"><img src="../img/iconos/icon-book.svg"></div>
                <p>Políticas</p>
            </li>
            <li class="d-flex gap-4">
                <div class="icon"><img src="../img/iconos/icon-support.svg"></div>
                <p>Soporte</p>
            </li>
            <li class="d-flex gap-4" type="button" data-bs-toggle="modal" data-bs-target="#logout">
                <div class="icon"><img src="../img/iconos/icon-logout.svg"></div>
                <p>Cerrar Sesión</p>
            </li>
        </ul>
    </div>

    <div class="modal fade" id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/componentes/cerrar.php"); ?>
    </div>


    <script src="../menupage/menu.js"></script>
    <script src="../tienda/menu.js"></script>
    <script src="../componentes/cerrar.js"></script>
</body>

</html>