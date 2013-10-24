<h1>Contactos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Asunto</th>
      <th>Mensaje</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($contactos as $contacto): ?>
    <tr>
      <td><a href="<?php echo url_for('contacto/edit?id='.$contacto->getId()) ?>"><?php echo $contacto->getId() ?></a></td>
      <td><?php echo $contacto->getNombre() ?></td>
      <td><?php echo $contacto->getEmail() ?></td>
      <td><?php echo $contacto->getTelefono() ?></td>
      <td><?php echo $contacto->getAsunto() ?></td>
      <td><?php echo $contacto->getMensaje() ?></td>
      <td><?php echo $contacto->getCreatedAt() ?></td>
      <td><?php echo $contacto->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('contacto/new') ?>">New</a>
