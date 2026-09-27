export function initNavegacion() {
  const btnChat = document.getElementById('btnVistaChat');
  const btnLlamada = document.getElementById('btnVistaLlamada');
  const vistaChat = document.getElementById('vistaChat');
  const vistaLlamada = document.getElementById('vistaLlamada');
  const btnNuevaTarea = document.getElementById('btnNuevaTarea');
  if (!btnChat) return;

  btnChat.addEventListener('click', (e) => {
    e.preventDefault();
    vistaChat.style.display = 'flex';
    vistaLlamada.style.display = 'none';
    btnNuevaTarea.style.display = 'block';
    btnChat.classList.add('activo');
    btnLlamada.classList.remove('activo');
  });

  btnLlamada.addEventListener('click', (e) => {
    e.preventDefault();
    vistaChat.style.display = 'none';
    vistaLlamada.style.display = 'block';
    btnNuevaTarea.style.display = 'none';
    btnLlamada.classList.add('activo');
    btnChat.classList.remove('activo');
  });
}