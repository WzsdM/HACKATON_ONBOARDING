<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera Responsive Ejemplo</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <!--Cabecera del inicio de la tienda, puede estar sujeta a cambios en base quieran los demas-->
    <header>
        <div class="logo-container">
            <img src="/Imagenes/avatar.png" alt="avatar_alumno"class="logo-img">
            <div class="logo-text">Alumno,<br> Jeremy<!--Si se implementa BD poner aqui la sentencia para llamar por nombre--></div>

        </div>
        <div class="menu-toggle" id="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav id="nav">
            <a href="#retos">2000<img src="Imagenes/UTP-COIN 1.png" alt="UTP-COIN" class="nav-icon"></a>
            <a href="#inicio">Inicio<img src="Imagenes/Inicio.png" alt="UTP-COIN" class="nav-icon"></a>
        </nav>
    </header>
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
        url: '../apiHackaton/tienda/merch.php', // Ruta de tu endpoint PHP
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            // Recorremos los datos recibidos y los insertamos en el contenedor de productos
            response.forEach(function(product) {
                // Verificar si el stock es 0 para mostrar el botón como agotado
                var buttonClass = (product.stock === 0) ? 'price-btn sold-out' : 'price-btn';
                
                $('#products-container').append(`
                    <div class="product">
                        <img src="${product.imagen}" alt="${product.nombre}" class="img-producto">
                        <div class="product-info">
                            <h2>${product.nombre}</h2>
                            <button class="${buttonClass}">
                                ${(product.stock == 0) ? 'Agotado' : `<p class="texto-btn">${product.Precio}</p>`}
                                <img src="Imagenes/UTP-COIN 1.png" alt="UTP-COIN" class="btn-icon">
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
</body>
</html>
