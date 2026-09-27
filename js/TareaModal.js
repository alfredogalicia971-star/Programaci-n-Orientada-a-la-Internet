
export function initTareaModal() {
  const btnAbrir = document.getElementById('btnNuevaTarea');
  const modal = document.getElementById('modalTarea');
  const btnCerrar = document.getElementById('btnCerrarTarea');
  const btnCancelar = document.getElementById('btnCancelarTarea');
  const form = document.getElementById('formNuevaTarea');
  if (!modal) return;

  const abrir = () => modal.classList.add('activo');
  const cerrar = () => modal.classList.remove('activo');

  btnAbrir?.addEventListener('click', abrir);
  btnCerrar?.addEventListener('click', cerrar);
  btnCancelar?.addEventListener('click', cerrar);
  modal.addEventListener('click', (e) => { if (e.target === modal) cerrar(); });

  form?.addEventListener('submit', (e) => {
    e.preventDefault();
    const titulo = document.getElementById('tituloTarea').value;
    const asignado = document.getElementById('asignarA')?.value || '';
    console.log('Tarea creada:', { titulo, asignado });
    alert(`Tarea "${titulo}" asignada`);
    cerrar();
    form.reset();
  });

  return { cerrar };
}