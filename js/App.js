import { initTareaModal } from './TareaModal.js';
import { initConfigModal } from './ConfigModal.js';
import { initTiendaModal } from './TiendaModal.js';
import { initNavegacion } from './Navegacion.js';

console.log('App.js cargado');

document.addEventListener('DOMContentLoaded', () => {
  console.log('DOM listo');
  try {
    const tarea = initTareaModal();
    console.log('Tarea OK', tarea);
    const config = initConfigModal();
    const tienda = initTiendaModal();
    initNavegacion();

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        tarea?.cerrar();
        config?.cerrar();
        tienda?.cerrar();
      }
    });
  } catch(err) {
    console.error('Error inicializando modales:', err);
  }
});