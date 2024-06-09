document.getElementById('loginForm').addEventListener('submit', async function(event) {
    event.preventDefault();

    // Obtener los valores del formulario
    const cod_alumno = document.getElementById('usuario').value;
    const contrasena = document.getElementById('password').value;

    try {
        // Hacer la solicitud a la API
        const response = await fetch('http://localhost/apiHackaton-main/auth.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                'cod_alumno': cod_alumno,
                'contrasena': contrasena
            })
        });

        const result = await response.json();

        if (response.ok) {
            // Si la autenticación es exitosa, maneja el éxito
            console.log('Inicio de sesión exitoso', result);
            // Redirige al usuario o muestra un mensaje de éxito
        } else {
            // Si hay un error, maneja el error
            console.error('Error en la autenticación', result.error);
            // Muestra un mensaje de error al usuario
        }
    } catch (error) {
        console.error('Error de red', error);
        // Muestra un mensaje de error al usuario
    }
});

// Agregar funcionalidad para mostrar/ocultar la contraseña
const togglePassword = document.getElementById('togglePassword');
const password = document.getElementById('password');

togglePassword.addEventListener('click', function() {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
});
