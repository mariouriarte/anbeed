<?php
if(!$sf_user->hasAttribute('empresa'))
{
    $context = sfContext::getInstance(); 
    $controller = $context->getController();
    $controller->redirect('/portal_dev.php/inicio/index');
}
$empresa = $sf_user->getAttribute('empresa');
   
/*Recuperamos el reactivo*/
if(!$sf_user->hasAttribute('reactivo'))
{
    $context = sfContext::getInstance(); 
    $controller = $context->getController();
    $controller->redirect('/portal_dev.php/inicio/index');
}
$reactivo = $sf_user->getAttribute('reactivo');

$classRepresentante = null;
$iconoRepresentante = null;
$classRegente = null;
$iconoRegente = null;

if($empresa->RepresentanteLegal->getPersonaId() =='')
{
    $classRepresentante= 'td-warning';
    $iconoRepresentante = "<img src=\"/images/icons/16/help-hint.svg\">";
}
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
            <th>reactivo</th>
            <td><?php echo $reactivo ?></td>
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
            <th>laboratorio fabricante:</th>
            <td><?php echo $reactivo->LaboratorioFabricante ?></td>
        </tr>
    </tbody>
</table>
