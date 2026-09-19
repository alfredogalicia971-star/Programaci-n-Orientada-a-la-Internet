document.addEventListener('DOMContentLoaded', () => {

  // --- MODAL NUEVA TAREA ---
  const btnAbrirTarea = document.getElementById('btnNuevaTarea');
  const modalTarea = document.getElementById('modalTarea');
  const btnCerrarTarea = document.getElementById('btnCerrarTarea');
  const btnCancelarTarea = document.getElementById('btnCancelarTarea');
  const formTarea = document.getElementById('formNuevaTarea');

  if (btnAbrirTarea && modalTarea) {
    btnAbrirTarea.addEventListener('click', () => {
      modalTarea.classList.add('activo');
    });
  }

  function cerrarModalTarea(){
    if(modalTarea) modalTarea.classList.remove('activo');
  }

  if (btnCerrarTarea) btnCerrarTarea.addEventListener('click', cerrarModalTarea);
  if (btnCancelarTarea) btnCancelarTarea.addEventListener('click', cerrarModalTarea);

  if (modalTarea) {
    modalTarea.addEventListener('click', (e) => {
      if(e.target === modalTarea) cerrarModalTarea();
    });
  }

  if (formTarea) {
    formTarea.addEventListener('submit', (e) => {
      e.preventDefault();
      const titulo = document.getElementById('tituloTarea').value;
      const asignado = document.getElementById('asignarA')?.value || '';
      console.log('Tarea creada:', { titulo, asignado });
      alert(`Tarea "${titulo}" asignada`);
      cerrarModalTarea();
      formTarea.reset();
    });
  }

  // --- VISTAS CHAT / LLAMADA ---
  const btnVistaChat = document.getElementById('btnVistaChat');
  const btnVistaLlamada = document.getElementById('btnVistaLlamada');
  const vistaChat = document.getElementById('vistaChat');
  const vistaLlamada = document.getElementById('vistaLlamada');
  const tituloVista = document.getElementById('tituloVista');

  if(btnVistaChat && btnVistaLlamada && vistaChat && vistaLlamada){
    btnVistaChat.addEventListener('click', (e) => {
      e.preventDefault();
      vistaChat.style.display =  'flex';
      vistaLlamada.style.display = 'none';
      if(tituloVista) tituloVista.textContent = 'Chat';
      if(btnAbrirTarea) btnAbrirTarea.style.display = 'block';
      btnVistaChat.classList.add('activo');
      btnVistaLlamada.classList.remove('activo');
    });

    btnVistaLlamada.addEventListener('click', (e) => {
      e.preventDefault();
      vistaChat.style.display = 'none';
      vistaLlamada.style.display = 'block';
      if(tituloVista) tituloVista.textContent = 'Llamada';
      if(btnAbrirTarea) btnAbrirTarea.style.display = 'none';
      btnVistaLlamada.classList.add('activo');
      btnVistaChat.classList.remove('activo');
    });
  }

  // --- MODAL CONFIG Y TIENDA ---
  const btnConfig = document.getElementById('btnConfig');
  const btnTiendaNav = document.getElementById('btnVistaTiendaNav');
  const modalConfig = document.getElementById('modalConfig');
  const modalTienda = document.getElementById('modalTienda');
  const btnCerrarConfig = document.getElementById('btnCerrarConfig');
  const btnCerrarTienda = document.getElementById('btnCerrarTienda');

  // Abrir config
  if(btnConfig && modalConfig){
    btnConfig.addEventListener('click', () => {
      modalConfig.classList.add('activo');
    });
  }
  if(btnCerrarConfig && modalConfig){
    btnCerrarConfig.addEventListener('click', () => {
      modalConfig.classList.remove('activo');
    });
  }
  if(modalConfig){
    modalConfig.addEventListener('click', (e) => {
      if(e.target === modalConfig) modalConfig.classList.remove('activo');
    });
  }

  // Abrir tienda
  if(btnTiendaNav && modalTienda){
    btnTiendaNav.addEventListener('click', (e) => {
      e.preventDefault();
      const monedasActuales = document.getElementById('cantidadMonedas')?.textContent || '1250';
      const topMonedas = document.getElementById('monedasTiendaTop');
      if(topMonedas) topMonedas.textContent = monedasActuales;
      modalTienda.classList.add('activo');
    });
  }
  if(btnCerrarTienda && modalTienda){
    btnCerrarTienda.addEventListener('click', () => {
      modalTienda.classList.remove('activo');
    });
  }
  if(modalTienda){
    modalTienda.addEventListener('click', (e) => {
      if(e.target === modalTienda) modalTienda.classList.remove('activo');
    });
  }

  // Cerrar con ESC
  document.addEventListener('keydown', (e) => {
    if(e.key === 'Escape'){
      if(modalConfig) modalConfig.classList.remove('activo');
      if(modalTienda) modalTienda.classList.remove('activo');
      if(modalTarea) modalTarea.classList.remove('activo');
    }
  });

  // --- SELECTOR DE AVATAR ---
  function aplicarEstiloAvatar(estilo){
    let wrapperConfig = document.querySelector('.config-perfil-card .avatar-wrapper');
    if(!wrapperConfig){
      const img = document.querySelector('.config-perfil-card img');
      if(!img) return;
      const newWrapper = document.createElement('div');
      newWrapper.className = 'avatar-wrapper ' + estilo;
      img.parentNode.insertBefore(newWrapper, img);
      newWrapper.appendChild(img);
      wrapperConfig = newWrapper;
    }
    wrapperConfig.className = 'avatar-wrapper ' + estilo;
    localStorage.setItem('avatarStyle', estilo);
  }

  const avatarOptions = document.querySelectorAll('#modalConfig .avatar-option');
  avatarOptions.forEach(option => {
    option.addEventListener('click', () => {
      avatarOptions.forEach(o => o.classList.remove('active'));
      option.classList.add('active');
      const estilo = option.dataset.style;
      aplicarEstiloAvatar(estilo);
    });
  });

  const estiloGuardado = localStorage.getItem('avatarStyle');
  if(estiloGuardado !== null){
    const opcionGuardada = document.querySelector(`#modalConfig .avatar-option[data-style="${estiloGuardado}"]`);
    if(opcionGuardada){
      avatarOptions.forEach(o => o.classList.remove('active'));
      opcionGuardada.classList.add('active');
      aplicarEstiloAvatar(estiloGuardado);
    }
  }

  // --- LÓGICA TIENDA ---
  const tiendaOptions = document.querySelectorAll('#modalTienda .avatar-option');
  tiendaOptions.forEach(opt => {
    opt.addEventListener('click', () => {
      const precio = parseInt(opt.dataset.precio || '0');
      const estilo = opt.dataset.style;
      let monedasEl = document.getElementById('cantidadMonedas');
      let monedas = parseInt(monedasEl?.textContent || '1250');

      if(opt.classList.contains('bloqueado')){
        if(monedas >= precio){
          if(confirm(`¿Comprar ${opt.dataset.nombre} por ${precio} Recoins?`)){
            monedas -= precio;
            if(monedasEl) monedasEl.textContent = monedas;
            const top = document.getElementById('monedasTiendaTop');
            if(top) top.textContent = monedas;
            opt.classList.remove('bloqueado');
            const badge = opt.querySelector('.precio-badge');
            if(badge){
              badge.textContent = 'Comprado';
              badge.classList.add('gratis');
            }
            let desbloqueados = JSON.parse(localStorage.getItem('estilosDesbloqueados') || '["especial", ""]');
            if(!desbloqueados.includes(estilo)) desbloqueados.push(estilo);
            localStorage.setItem('estilosDesbloqueados', JSON.stringify(desbloqueados));
          }
        } else {
          alert("No tienes suficientes Recoins");
        }
      } else {
        tiendaOptions.forEach(o => o.classList.remove('active'));
        opt.classList.add('active');
        aplicarEstiloAvatar(estilo);
       
      }
    });
  });

});
