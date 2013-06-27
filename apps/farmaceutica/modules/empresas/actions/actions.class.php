<?php

require_once dirname(__FILE__).'/../lib/empresasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/empresasGeneratorHelper.class.php';

/**
 * empresas actions.
 *
 * @package    anbeed
 * @subpackage empresas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
function FechaEspanol($fecha)
{
    $i = strtotime($fecha);
    $ano = date('Y', $i);
    $mes = date('n',$i);
    $dia = date('d',$i);
    $diasemana = date('w',$i);
    $dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    return  $dias[$diasemana]." ".$dia." de ".$meses[$mes-1]. " de ".$ano ;
}

class empresasActions extends autoEmpresasActions
{
    public function executeNew(sfWebRequest $request)
    {
        parent::executeNew($request);
        
        $user = $this->getUser();
        
//        echo $request->getParameter('idrl');
        
//        $legal_id = new sfWidgetFormSchema(array('representante_legal_id'
//            => new sfWidgetFormInput()));
//        $legal_id->setDefault('representante_legal_id', $request
//                ->getParameter('legal_id'));
        //$user->setAttribute('idrl', $request->getParameter('idrl'));
        
    }
}
