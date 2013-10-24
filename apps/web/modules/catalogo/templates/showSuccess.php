<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $producto_web->getId() ?></td>
    </tr>
    <tr>
      <th>Categoria:</th>
      <td><?php echo $producto_web->getCategoriaId() ?></td>
    </tr>
    <tr>
      <th>Linea:</th>
      <td><?php echo $producto_web->getLineaId() ?></td>
    </tr>
    <tr>
      <th>Pais:</th>
      <td><?php echo $producto_web->getPaisId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $producto_web->getNombre() ?></td>
    </tr>
    <tr>
      <th>Caracteristicas:</th>
      <td><?php echo $producto_web->getCaracteristicas() ?></td>
    </tr>
    <tr>
      <th>Precio:</th>
      <td><?php echo $producto_web->getPrecio() ?></td>
    </tr>
    <tr>
      <th>Foto:</th>
      <td><?php echo $producto_web->getFoto() ?></td>
    </tr>
    <tr>
      <th>Visto:</th>
      <td><?php echo $producto_web->getVisto() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $producto_web->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $producto_web->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $producto_web->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $producto_web->getUpdatedBy() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('producto_web_edit', $producto_web) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('producto_web') ?>">List</a>
