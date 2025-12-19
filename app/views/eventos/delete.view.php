<h3>Eliminar evento #<?= $evento['evento_id'] ?></h3>
<p>
  Vas a eliminar: <b><?= htmlspecialchars($evento['nombre']) ?></b><br>
  Estado: <b><?= htmlspecialchars($evento['estado']) ?></b>
</p>

<form method="POST">
  <button type="submit" onclick="return confirm('¿Seguro?')">Sí, eliminar</button>
  <a href="?controller=eventos&action=index">No, cancelar</a>
</form>
