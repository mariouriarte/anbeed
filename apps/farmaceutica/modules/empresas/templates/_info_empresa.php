<?php
 
if(sfConfig::get('sf_environment') == 'dev')
{
    $env = '_dev';
} 

if(!$sf_user->hasAttribute('empresa'))
{
    $context = sfContext::getInstance(); 
    $controller = $context->getController();
    $controller->redirect('/portal'.$env.'.php/inicio/index');
}

$classRepresentante = null;
$iconoRepresentante = null;
$classRegente = null;
$iconoRegente = null;

if($empresa->RepresentanteLegal->getPersonaId() =='')
{
    $classRepresentante= 'td-warning';
    $iconoRepresentante = "<img src=\"/images/icons/16/help-hint.svg\">";
}
if($empresa->RegenteFarmaceutico->getPersonaId() =='')
{
    $classRegente = 'td-warning';
    $iconoRegente = "<img src=\"/images/icons/16/help-hint.svg\">";
}
else
{
    if($empresa->RegenteFarmaceutico->getMatriculaProfesional() == '')
    {
        $classRegente = 'td-warning';
        $iconoRegente = "<img src=\"/images/icons/16/help-hint.svg\"> <font color=red> Sin Matricula inexistente </font> ";
    }
    if($empresa->RegenteFarmaceutico->getCarnetColegiado() =='')
    {
        $classRegente = 'td-warning';
        $iconoRegente = "<img src=\"/images/icons/16/help-hint.svg\"> <font color=red> Carnet Colegiado inexistente </font> ";
    }
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
            <th>Razón Social:</th>
            <td><?php echo $empresa->getRazonSocial() ?></td>
            <th>Representante Legal:</th>
            <td class="<?php echo $classRepresentante ?>">
                <?php 
                echo $iconoRepresentante.' '.$empresa->RepresentanteLegal 
                ?>
            </td>
            <?php if (isset($producto)) {?>
            <th>Producto</th>
            <td><?php echo $producto ?></td>
            <?php }?>
        </tr>
        <tr>
            <th>NIT:</th>
            <td><?php echo $empresa->getNit() ?></td>
            <th>Regente Farmaceútico:</th>
            <td class="<?php echo $classRegente ?>">
                <?php 
                echo $iconoRegente.' '.$empresa->RegenteFarmaceutico;
                ?>
            </td>
            <?php if (isset($producto)) {?>
            <th>Laboratorio Fabricante</th>
            <td><?php echo $producto->LaboratorioFabricante ?></td>
            <?php }?>
        </tr>
    </tbody>
</table>