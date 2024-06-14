<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera Responsive Ejemplo</title>
    <link rel="stylesheet" href="styless.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://unpkg.com/akar-icons-fonts"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include '../menupage/topBar.php'; ?>
    <!--Texto en general -->
    <div class="container-tienda">
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
    </div>
    <script scr="menu.js"></script>
</body>

</html>