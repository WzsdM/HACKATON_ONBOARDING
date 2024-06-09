document.getElementById('loginForm').addEventListener('submit', async function(event) {
    event.preventDefault();

    // Obtener los valores del formulario
    const cod_alumno = document.getElementById('usuario').value;
    const contrasena = document.getElementById('password').value;

    try {
        // Hacer la solicitud a la API
        const response = await fetch('http://localhost/apiHackaton/auth.php', {
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
            window.location.href = "./menupage/menu.php";
            sessionStorage.setItem('userData', JSON.stringify(result));
        } else {
            alert("Error en la autenticación", result.error);
        }
    } catch (error) {
        alert("Error de red", error);
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
