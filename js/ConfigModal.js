
export function aplicarEstiloAvatar(estilo) {
  const wrapper = document.querySelector('.config-perfil-card .avatar-wrapper');
  if (!wrapper) return;

  wrapper.className = 'avatar-wrapper ' + (estilo || '');
  localStorage.setItem('avatarStyle', estilo || '');
}

export function initConfigModal() {
  const btnConfig = document.getElementById('btnConfig');
  const modal = document.getElementById('modalConfig');
  const btnCerrar = document.getElementById('btnCerrarConfig');
  if (!modal) return;

  const abrir = () => modal.classList.add('activo');
  const cerrar = () => modal.classList.remove('activo');

  btnConfig?.addEventListener('click', abrir);
  btnCerrar?.addEventListener('click', cerrar);
  modal.addEventListener('click', (e) => { if (e.target === modal) cerrar(); });

  
  const options = document.querySelectorAll('#modalConfig .avatar-option');
  options.forEach(option => {
    option.addEventListener('click', () => {
      options.forEach(o => o.classList.remove('active'));
      option.classList.add('active');
      const estilo = option.dataset.deco || ''; 
      aplicarEstiloAvatar(estilo);
    });
  });

  const guardado = localStorage.getItem('avatarStyle') || '';
  const opcionGuardada = document.querySelector(`#modalConfig .avatar-option[data-deco="${guardado}"]`);
  if (opcionGuardada) {
    options.forEach(o => o.classList.remove('active'));
    opcionGuardada.classList.add('active');
    aplicarEstiloAvatar(guardado);
  }

  return { cerrar };
}