document.addEventListener('DOMContentLoaded', () => {

    const btnIniciarLlamada = document.getElementById('btnIniciarLlamada');
    const btnColgarLlamada = document.getElementById('btnColgarLlamada');
    const miVideo = document.getElementById('miVideo');
    const placeholderLlamada = document.getElementById('placeholderLlamada');
    const statusLlamada = document.getElementById('statusLlamada');

    let streamLocal = null;
    let estaIniciando = false;


    // INICIAR CÁMARA

    async function iniciarCamara() {

        if (estaIniciando || streamLocal) {
            return;
        }

        // Comprobar compatibilidad
        if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
            alert('Tu navegador no permite acceder a la cámara desde esta página.');
            return;
        }

        estaIniciando = true;

        if (btnIniciarLlamada) {
            btnIniciarLlamada.disabled = true;
            btnIniciarLlamada.textContent = 'Conectando...';
        }

        if (statusLlamada) {
            statusLlamada.textContent = 'Solicitando permiso...';
        }

        try {

            console.log('Solicitando cámara...');

            streamLocal = await navigator.mediaDevices.getUserMedia({
                video: {
                    width: {
                        ideal: 1280
                    },
                    height: {
                        ideal: 720
                    }
                },
                audio: true
            });

            console.log('Cámara obtenida correctamente');

            // Mostrar video
            if (miVideo) {
                miVideo.srcObject = streamLocal;
                miVideo.style.display = 'block';

                try {
                    await miVideo.play();
                } catch (error) {
                    console.warn('No se pudo iniciar automáticamente el video:', error);
                }
            }

            // Ocultar avatar
            if (placeholderLlamada) {
                placeholderLlamada.style.display = 'none';
            }

            // Estado
            if (statusLlamada) {
                statusLlamada.textContent = '🔴 En llamada';
            }

            // Botones
            if (btnIniciarLlamada) {
                btnIniciarLlamada.style.display = 'none';
            }

            if (btnColgarLlamada) {
                btnColgarLlamada.style.display = 'block';
            }

        } catch (err) {

            console.error('Error al iniciar cámara:', err);

            // Liberar stream si se creó parcialmente
            if (streamLocal) {
                streamLocal.getTracks().forEach(track => track.stop());
                streamLocal = null;
            }

            let mensaje = 'No se pudo iniciar la cámara.';

            if (err.name === 'NotAllowedError') {
                mensaje = 'Permiso de cámara o micrófono denegado.';
            }
            else if (err.name === 'NotFoundError') {
                mensaje = 'No se encontró una cámara o micrófono.';
            }
            else if (err.name === 'NotReadableError') {
                mensaje = 'La cámara está siendo utilizada por otra aplicación.';
            }
            else if (err.name === 'OverconstrainedError') {
                mensaje = 'La cámara no soporta la configuración solicitada.';
            }
            else if (err.name === 'SecurityError') {
                mensaje = 'El navegador bloqueó el acceso a la cámara por seguridad.';
            }

            alert(mensaje);

            if (statusLlamada) {
                statusLlamada.textContent = 'Cámara apagada';
            }

        } finally {

            estaIniciando = false;

            if (btnIniciarLlamada) {
                btnIniciarLlamada.disabled = false;
                btnIniciarLlamada.textContent = 'Iniciar llamada';
            }
        }
    }



    // COLGAR


    function colgarCamara() {

        if (estaIniciando) {
            return;
        }

        console.log('Colgando llamada...');

        // Detener cámara y micrófono
        if (streamLocal) {

            streamLocal.getTracks().forEach(track => {
                track.stop();
            });

            streamLocal = null;
        }

        // Limpiar video
        if (miVideo) {
            miVideo.pause();
            miVideo.srcObject = null;
            miVideo.style.display = 'none';
        }

        // Mostrar avatar
        if (placeholderLlamada) {
            placeholderLlamada.style.display = 'block';
        }

        // Estado
        if (statusLlamada) {
            statusLlamada.textContent = 'Cámara apagada';
        }

        // Botones
        if (btnIniciarLlamada) {
            btnIniciarLlamada.style.display = 'block';
            btnIniciarLlamada.disabled = false;
        }

        if (btnColgarLlamada) {
            btnColgarLlamada.style.display = 'none';
        }
    }


  
    // BOTONES


    if (btnIniciarLlamada) {
        btnIniciarLlamada.addEventListener('click', iniciarCamara);
    }

    if (btnColgarLlamada) {
        btnColgarLlamada.addEventListener('click', colgarCamara);
    }


    window.colgarCamara = colgarCamara;

});