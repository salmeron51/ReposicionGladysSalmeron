<a class="btn" href="?controller=eventos&action=create">+ Nuevo evento</a>
<br><br>

<table>
  <thead>
    <tr>
      <th>ID</th><th>Nombre</th><th>Lugar</th><th>Fecha</th><th>Estado</th><th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($eventos as $e): ?>
    <tr>
      <td><?= $e['evento_id'] ?></td>
      <td><?= htmlspecialchars($e['nombre']) ?></td>
      <td><?= htmlspecialchars($e['lugar']) ?></td>
      <td><?= $e['fecha'] ?></td>
      <td><?= htmlspecialchars($e['estado']) ?></td>
      <td>
        <a href="?controller=eventos&action=edit&id=<?= $e['evento_id'] ?>">Editar</a>
        <?php if ($e['estado'] === 'Cancelado'): ?>
          <a href="?controller=eventos&action=delete&id=<?= $e['evento_id'] ?>">Eliminar</a>
        <?php else: ?>
          <span style="color:#999">Eliminar (solo Cancelado)</span>
        <?php endif; ?>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
