<?php
$class = null;
$icono = null;
if($empresa->RegenteFarmaceutico->getMatriculaProfesional() == '')
{
    $class = 'td-warning';
    $icono = "<img src=\"/images/icons/16/help-hint.svg\">";
}
if($empresa->RegenteFarmaceutico->getCarnetColegiado() =='')
{
    $class = 'td-warning';
    $icono = "<img src=\"/images/icons/16/help-hint.svg\">";
}
?>

<script type='text/javascript'>
$(document).ready(function()
{
    function neonSign()
    {
        var speed=1200; // transition speed going form opacity 1 to 0.2 or 0.2 to 1
        var $img=$('.td-warning');
        
        $img.delay(1).animate({'opacity':.4},speed,function(){
            $img.animate({'opacity':1},speed,neonSign() );
            
        });
    }
    neonSign();
});
</script>

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
            <td class="<?php echo $class ?>">
                <?php 
                echo $icono.' '.$empresa->RegenteFarmaceutico;
                ?>
            </td>
        </tr>
    </tbody>
</table>