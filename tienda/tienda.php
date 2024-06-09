<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera Responsive Ejemplo</title>
    <link rel="stylesheet" href="styless.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-IGG1f8xt2vhS0EcZXFIv0FwtCJkGP6m1fdHvDzKZvLT1zj+gbs6LTM1g1gjqva3F" crossorigin="anonymous"></script>
</head>

<body>
<?php include '../menupage/topBar.php';?>

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
    <script scr="menu.js"></script>
</body>

</html>