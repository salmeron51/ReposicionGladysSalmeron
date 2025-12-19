<h3>Registrar evento</h3>
<form method="POST">
  <label>Nombre:</label><br>
  <input name="nombre" maxlength="100" required><br><br>

  <label>Lugar:</label><br>
  <input name="lugar" maxlength="100" required><br><br>

  <label>Fecha:</label><br>
  <input type="date" name="fecha" required><br><br>

  <label>Estado:</label><br>
  <select name="estado">
    <option>Pendiente</option>
    <option>En curso</option>
    <option>Finalizado</option>
    <option>Cancelado</option>
  </select><br><br>

  <button type="submit">Guardar</button>
  <a href="?controller=eventos&action=index">Cancelar</a>
</form>
