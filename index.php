<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./login/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="logo-bienvenida">
        <img src="./img/fondo-login.png" alt="">
    </div>
    <div id="login">
        <div class="contenedor-datos">
            <img class="logo" src="./img/logo-UTP+play.svg" alt="">
            <h2>Empieza tu nueva aventura en UTP</h2>

            <p class="tenue">Diviértete mientras aprendes</p>

            <p class="tenue">Ingresa tus datos para <span class="texto-blanco">Iniciar sesión</span></p>
            <form id="loginForm">
                <div class="form-group">
                    <label for="usuario">Código UTP</label>
                    <div class="input-container">
                        <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
                    </div>
                    <small class="info-text"><i class="fas fa-info-circle"></i> Ejemplo de usuario: U1533148 (no digitar el @utp.edu.pe)</small>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <div class="input-container">
                        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                    </div>
                </div>
                
                <div class="button-container">
                    <div id="forgot-password">
                        <a href="https://contrasena.utp.edu.pe/Recuperacion/OlvideMiClave.aspx">Reestablecer contraseña</a>
                    </div>
                    <button type="submit">Iniciar sesión</button>
                </div>
            </form>
                
        </div>  
    </div>
    <script src="./login/js/login.js"></script>
</body>
</html>
