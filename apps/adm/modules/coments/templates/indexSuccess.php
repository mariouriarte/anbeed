<h1>Comentario tareas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Tarea</th>
      <th>Comentario</th>
      <th>Leido</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Created by</th>
      <th>Updated by</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comentario_tareas as $comentario_tarea): ?>
    <tr>
      <td><a href="<?php echo url_for('coments/edit?id='.$comentario_tarea->getId()) ?>"><?php echo $comentario_tarea->getId() ?></a></td>
      <td><?php echo $comentario_tarea->getTareaId() ?></td>
      <td><?php echo $comentario_tarea->getComentario() ?></td>
      <td><?php echo $comentario_tarea->getLeido() ?></td>
      <td><?php echo $comentario_tarea->getCreatedAt() ?></td>
      <td><?php echo $comentario_tarea->getUpdatedAt() ?></td>
      <td><?php echo $comentario_tarea->getCreatedBy() ?></td>
      <td><?php echo $comentario_tarea->getUpdatedBy() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('coments/new') ?>">New</a>
