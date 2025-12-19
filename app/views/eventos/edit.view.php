<h3>Modificar evento #<?= $evento['evento_id'] ?></h3>
<form method="POST">
  <label>Nombre:</label><br>
  <input name="nombre" maxlength="100" value="<?= htmlspecialchars($evento['nombre']) ?>" required><br><br>

  <label>Lugar:</label><br>
  <input name="lugar" maxlength="100" value="<?= htmlspecialchars($evento['lugar']) ?>" required><br><br>

  <label>Fecha:</label><br>
  <input type="date" name="fecha" value="<?= $evento['fecha'] ?>" required><br><br>

  <label>Estado:</label><br>
  <select name="estado">
    <?php foreach (["Pendiente","En curso","Finalizado","Cancelado"] as $st): ?>
      <option <?= ($evento['estado']===$st?'selected':'') ?>><?= $st ?></option>
    <?php endforeach; ?>
  </select><br><br>

  <button type="submit">Actualizar</button>
  <a href="?controller=eventos&action=index">Volver</a>
</form>
