<h1>Formulario516s List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Fecha</th>
      <th>Cosmetico</th>
      <th>Vigencia</th>
      <th>Fecha inicio vigencia</th>
      <th>Numero ruta</th>
      <th>Tipo tramite formulario</th>
      <th>Datos</th>
      <th>Datos titular</th>
      <th>Maquila embasador</th>
      <th>Maquila empacador</th>
      <th>Maquila acondicionador</th>
      <th>Maquila fabricado para</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($formulario516s as $formulario516): ?>
    <tr>
      <td><a href="<?php echo url_for('form516/edit?id='.$formulario516->getId()) ?>"><?php echo $formulario516->getId() ?></a></td>
      <td><?php echo $formulario516->getFecha() ?></td>
      <td><?php echo $formulario516->getCosmeticoId() ?></td>
      <td><?php echo $formulario516->getVigencia() ?></td>
      <td><?php echo $formulario516->getFechaInicioVigencia() ?></td>
      <td><?php echo $formulario516->getNumeroRuta() ?></td>
      <td><?php echo $formulario516->getTipoTramiteFormularioId() ?></td>
      <td><?php echo $formulario516->getDatos() ?></td>
      <td><?php echo $formulario516->getDatosTitular() ?></td>
      <td><?php echo $formulario516->getMaquilaEmbasador() ?></td>
      <td><?php echo $formulario516->getMaquilaEmpacador() ?></td>
      <td><?php echo $formulario516->getMaquilaAcondicionador() ?></td>
      <td><?php echo $formulario516->getMaquilaFabricadoPara() ?></td>
      <td><?php echo $formulario516->getCreatedAt() ?></td>
      <td><?php echo $formulario516->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('form516/new') ?>">New</a>
