<table class="tablas_form">
    <thead>
        <tr>
            <th>Descripción</th>
            <th>Etapa</th>
            <th>Observación</th>
            <th>Fecha fin</th>
        </tr>
    </thead>
  <?php foreach ($etapas as $i => $etapa): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
      <td class="descripcion">
          <strong>
        <?php echo link_to($etapa->getDescripcion(), 
            'etapaform5/edit?id='.$etapa->getId().'&page='.$page ) ?>
          </strong>
      </td>
      <td class="tipo-etapa">
        <?php echo $etapa->TipoEtapa ?>
      </td>
      <td class="observacion">
        <?php echo $etapa->getObservacion() ?>
      </td>
      <td class="fecha-fin">
        <?php echo $etapa->getFechaFin() ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>