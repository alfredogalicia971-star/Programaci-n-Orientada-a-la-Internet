<div id="modalTarea" class="modal-overlay">
  <div class="modal-contenido">
    <div class="modal-header">
      <h3 class="ColorWhite">Nueva tarea</h3>
      <button class="btn-cerrar" id="btnCerrarTarea">&times;</button>
    </div>
    <form id="formNuevaTarea">
      <label class="ColorWhite">Título de la tarea</label>
      <input type="text" id="tituloTarea" placeholder="Ej: Diseñar login" required>
      
      <label class="ColorWhite">Descripción</label>
      <textarea id="descTarea" rows="3" placeholder="Detalles de la tarea..." required></textarea>

      <label class="ColorWhite">Asignar a</label>
      <select id="asignarA" required>
        <option value="">Selecciona integrante</option>
        <option value="2023003">Tu - Matrícula</option>
      </select>

      <label class="ColorWhite">Recompensa</label>
      <select required>
        <option value="">5 Recoins</option>
        <option value="">10 Recoins</option>
        <option value="">15 Recoins</option>
      </select>

      <div class="modal-acciones">
        <button type="button" id="btnCancelarTarea">Cancelar</button>
        <button type="submit" class="btn-primario">Crear tarea</button>
      </div>
    </form>
  </div>
</div>