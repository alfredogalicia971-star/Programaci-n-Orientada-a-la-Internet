import { aplicarEstiloAvatar } from './ConfigModal.js';

export function initTiendaModal() {
  const btnTienda = document.getElementById('btnVistaTiendaNav');
  const modal = document.getElementById('modalTienda');
  const btnCerrar = document.getElementById('btnCerrarTienda');
  if (!modal) return;

  const abrir = () => {
    const monedasActuales = document.getElementById('cantidadMonedas')?.textContent || '1250';
    const top = document.getElementById('monedasTiendaTop');
    if (top) top.textContent = monedasActuales;
    modal.classList.add('activo');
  };
  const cerrar = () => modal.classList.remove('activo');

  btnTienda?.addEventListener('click', (e) => { e.preventDefault(); abrir(); });
  btnCerrar?.addEventListener('click', cerrar);
  modal.addEventListener('click', (e) => { if (e.target === modal) cerrar(); });

  const tiendaOptions = document.querySelectorAll('#modalTienda .avatar-option');
  tiendaOptions.forEach(opt => {
    opt.addEventListener('click', () => {
      const precio = parseInt(opt.dataset.precio || '0');
      const estilo = opt.dataset.deco || ''; 
      const monedasEl = document.getElementById('cantidadMonedas');
      let monedas = parseInt(monedasEl?.textContent || '1250');

      if (opt.classList.contains('bloqueado')) {
        if (monedas >= precio) {
          if (confirm(`¿Comprar ${opt.dataset.nombre} por ${precio} Recoins?`)) {
            monedas -= precio;
            if (monedasEl) monedasEl.textContent = monedas;
            document.getElementById('monedasTiendaTop').textContent = monedas;
            
            opt.classList.remove('bloqueado');
            const badge = opt.querySelector('.precio-badge');
            if (badge) { badge.textContent = 'Comprado'; badge.classList.add('gratis'); }

            let desbloqueados = JSON.parse(localStorage.getItem('estilosDesbloqueados') || '["","deco-muertos"]');
            if (!desbloqueados.includes(estilo)) desbloqueados.push(estilo);
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

  return { cerrar };
}