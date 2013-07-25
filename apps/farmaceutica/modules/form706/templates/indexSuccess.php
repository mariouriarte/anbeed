<h1>Formulario706s List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Fecha</th>
      <th>Higiene</th>
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
    <?php foreach ($formulario706s as $formulario706): ?>
    <tr>
      <td><a href="<?php echo url_for('form706/edit?id='.$formulario706->getId()) ?>"><?php echo $formulario706->getId() ?></a></td>
      <td><?php echo $formulario706->getFecha() ?></td>
      <td><?php echo $formulario706->getHigieneId() ?></td>
      <td><?php echo $formulario706->getVigencia() ?></td>
      <td><?php echo $formulario706->getFechaInicioVigencia() ?></td>
      <td><?php echo $formulario706->getNumeroRuta() ?></td>
      <td><?php echo $formulario706->getTipoTramiteFormularioId() ?></td>
      <td><?php echo $formulario706->getDatos() ?></td>
      <td><?php echo $formulario706->getDatosTitular() ?></td>
      <td><?php echo $formulario706->getMaquilaEmbasador() ?></td>
      <td><?php echo $formulario706->getMaquilaEmpacador() ?></td>
      <td><?php echo $formulario706->getMaquilaAcondicionador() ?></td>
      <td><?php echo $formulario706->getMaquilaFabricadoPara() ?></td>
      <td><?php echo $formulario706->getCreatedAt() ?></td>
      <td><?php echo $formulario706->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('form706/new') ?>">New</a>
