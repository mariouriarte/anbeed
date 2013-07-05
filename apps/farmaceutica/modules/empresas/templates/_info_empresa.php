<table class="tabla-info-empresa">
    <tbody>
        <tr>
            <th>Empresa:</th>
            <td><?php echo $empresa->getRazonSocial() ?></td>
            <th>Representante Legal:</th>
            <td><?php echo $empresa->RepresentanteLegal ?></td>
        </tr>
        <tr>
            <th>NIT:</th>
            <td><?php echo $empresa->getNit() ?></td>
            <th>Regente Farmaceútico:</th>
            <td><?php echo $empresa->RegenteFarmaceutico ?></td>
        </tr>
    </tbody>
</table>