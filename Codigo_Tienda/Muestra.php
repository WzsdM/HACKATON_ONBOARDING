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
    <div class="products-container">
        <div class="product">
            <img src="Imagenes/LibretaUTP.png" alt="Producto 1" class="img-producto">
            <div class="product-info">
                <h2>Libreta UTP - Innova</h2>
                <button class="price-btn">
                    <p class="texto-btn">2000</p><img src="Imagenes/UTP-COIN 1.png" alt="UTP-COIN" class="btn-icon">
                </button>
            </div>
        </div>
        <div class="product">
            <img src="Imagenes/LibretaUTP.png" alt="Producto 1" class="img-producto">
            <div class="product-info">
                <h2>Libreta UTP - Innova</h2>
                <button class="price-btn">
                    <p class="texto-btn">2000</p>
                    <img src="Imagenes/UTP-COIN 1.png" alt="UTP-COIN" class="btn-icon">
                </button>
            </div>
        </div>
        <div class="product">
            <img src="Imagenes/LibretaUTP.png" alt="Producto 1" class="img-producto">
            <div class="product-info">
                <h2>Libreta UTP - Innova</h2>
                <button class="price-btn">
                    <p class="texto-btn">2000</p><img src="Imagenes/UTP-COIN 1.png" alt="UTP-COIN" class="btn-icon">
                </button>
            </div>
        </div>
        <div class="product">
            <img src="Imagenes/LibretaUTP.png" alt="Producto 1" class="img-producto">
            <div class="product-info">
                <h2>Libreta UTP - Innova</h2>
                <button class="price-btn">
                    <p class="texto-btn">2000</p><img src="Imagenes/UTP-COIN 1.png" alt="UTP-COIN" class="btn-icon">
                </button>
            </div>
        </div>

        <div class="product">
            <img src="Imagenes/LibretaUTP.png" alt="Producto 1" class="img-producto">
            <div class="product-info">
                <h2>Libreta UTP - Innova</h2>
                <button class="price-btn">
                    <p class="texto-btn">2000</p><img src="Imagenes/UTP-COIN 1.png" alt="UTP-COIN" class="btn-icon">
                </button>
            </div>
        </div>
        
        <div class="product">
            <img src="Imagenes/LibretaUTP.png" alt="Producto 1" class="img-producto">
            <div class="product-info">
                <h2>Libreta UTP - Innova</h2>
                <button class="price-btn">
                    <p class="texto-btn">2000</p><img src="Imagenes/UTP-COIN 1.png" alt="UTP-COIN" class="btn-icon">
                </button>
            </div>
        </div>
        <div class="product">
            <img src="Imagenes/LibretaUTP.png" alt="Producto 1" class="img-producto">
            <div class="product-info">
                <h2>Libreta UTP - Innova</h2>
                <button class="price-btn">
                    <p class="texto-btn">2000</p><img src="Imagenes/UTP-COIN 1.png" alt="UTP-COIN" class="btn-icon">
                </button>
            </div>
        </div>
        <div class="product">
            <img src="Imagenes/LibretaUTP.png" alt="Producto 1" class="img-producto">
            <div class="product-info">
                <h2>Libreta UTP - Innova</h2>
                <button class="price-btn">
                    <p class="texto-btn">2000</p><img src="Imagenes/UTP-COIN 1.png" alt="UTP-COIN" class="btn-icon">
                </button>
            </div>
        </div>

      
        <!-- Agrega más productos aquí si es necesario -->
    </div>
    
    
    <!--Scrips de JS a utilizar-->
    <script src="scripts.js"></script>
</body>
</html>

