<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera Responsive Ejemplo</title>
    <link rel="stylesheet" href="../menupage/menu.css">
    <link rel="stylesheet" href="styless.css">
</head>

<body>
    <div class="topBar">
        <div class="topBar_left">
            <div class="userImg">
                <img src="../img/perfil.png" alt="User Profile" class="userProfile">
            </div>
            <div class="userName">
                <div class="font-bold whitetext">Alumno,</div>
                <div class="whitetext">Pyerina</div>
            </div>
        </div>
        <div class="topBar_right">
            <div class="coinsPurse rounded">
                <div class="coinstext">
                    2000
                </div>
                <div class="icon">
                    <img src="../img/iconos/coin.png" alt="Coin Icon" class="coinIcon">
                </div>
            </div>
            <div class="storeBtn rounded" href="../tienda/tienda.php">
                <div class="storetext">
                    Tienda
                </div>
                <div class="icon">
                    <img src="../img/iconos/tienda.png" alt="Store Icon" class="storeIcon">
                </div>
            </div>
        </div>
    </div>

    <!--Texto en general -->
    <div class="info-box">
        <div class="left-info">
            <!-- Información a la izquierda -->
            <h2>Bienvenidos a nuestra tienda</h2>
            <p>Aqui puedes utilizar tus UTPCoin</p>
        </div>
        <div class="right-info">
            <!-- Información a la derecha -->
            <h2>Tu sede de recojo: </h2>
            <div class="text-sede">
                <p>PIURA</p>
            </div>
        </div>
    </div>
    <!--Productos(AQUI SE APLICARA EL API EN PHP)-->
    <div class="products-container" id="products-container">
        <!-- Aquí se insertarán dinámicamente los productos -->
    </div>
    <!--Scrips de JS a utilizar-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'http://localhost/apiHackaton/tienda/merch.php', // Ruta de tu endpoint PHP
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Recorremos los datos recibidos y los insertamos en el contenedor de productos
                    response.forEach(function(product) {
                        $('#products-container').append(`
                            <div class="product">
                                <img src="../img/${product.img}" class="img-producto">
                                <div class="product-info">
                                    <h2>${product.nombre}</h2>
                                    <button class="price-btn">
                                        <p class="texto-btn">${product.Precio}</p><img src="../img/iconos/coin.png" alt="UTP-COIN" class="btn-icon">
                                    </button>
                                </div>
                            </div>
                        `);
                    });
                },
                error: function(xhr, status, error) {
                    console.error(error); // Manejar errores de la solicitud AJAX
                }
            });
        });
    </script>
    <script src="scripts.js"></script>
</body>

</html>