// Función para obtener el código del alumno desde sessionStorage
function obtenerCodAlumno() {
    console.log(sessionStorage.getItem("userData"));

    const usuario = sessionStorage.getItem("userData");
    try {
        // Intenta parsear el valor almacenado en sessionStorage
        const parsedUser = JSON.parse(usuario);
        const codAlumno = parsedUser.cod_alumno;
        return codAlumno;
    } catch (error) {
        console.error('Error al parsear el código del alumno desde sessionStorage:', error);
        return null;
    }
}

// Función para obtener los datos del usuario desde la API
function obtenerDatosUsuario() {
    return new Promise((resolve, reject) => {
        const codAlumno = obtenerCodAlumno();
        if (!codAlumno) {
            reject('No se encontró el código del alumno en sessionStorage');
            return;
        }

        // Construir parámetros de consulta
        const queryParams = codAlumno.map(codigo => `cod_alumno[]=${codigo}`).join('&');

        // Realizar solicitud a la API
        fetch(`../tu_api.php?${queryParams}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la solicitud de datos del usuario');
                }
                return response.json();
            })
            .then(userData => {
                resolve(userData);
            })
            .catch(error => {
                reject('Error al obtener los datos del usuario: ' + error.message);
            });
    });
}

// Función para actualizar la interfaz con los datos del usuario
function actualizarInterfazUsuario() {
    obtenerDatosUsuario()
        .then(userData => {
            if (userData) {
                document.getElementById("userGreeting").textContent = `Alumno,`;
                document.getElementById("userName").textContent = userData.nombre;
                document.getElementById("coinsCount").textContent = userData.monedas;
            }
        })
        .catch(error => {
            console.error(error);
        });
}

// Función para obtener el nivel del usuario desde la API
function obtenerNivelUsuario() {
    return new Promise((resolve, reject) => {
        obtenerDatosUsuario()
            .then(userData => {
                if (userData) {
                    resolve(userData.puntaje);
                } else {
                    resolve(null);
                }
            })
            .catch(error => {
                reject(error);
            });
    });
}

// Función para controlar los niveles según el nivel del usuario
function controlarNiveles() {
    obtenerNivelUsuario()
        .then(nivelUsuario => {
            if (nivelUsuario !== null) {
                const nivelesSuperiores = document.querySelectorAll(".level");
                nivelesSuperiores.forEach((nivel) => {
                    const nivelNum = parseInt(nivel.classList[0].replace("level", ""));
                    if (nivelNum != nivelUsuario) { // Aquí aplicas tu lógica específica
                        nivel.style.pointerEvents = "none";
                    }
                    if (nivelNum > nivelUsuario) {
                        nivel.style.opacity = "0.5";
                    }
                });
            }
        })
        .catch(error => {
            console.error(error);
        });
}

// Función para cargar las funciones de control al cargar la página
window.onload = function() {
    actualizarInterfazUsuario();
    controlarNiveles();
};
