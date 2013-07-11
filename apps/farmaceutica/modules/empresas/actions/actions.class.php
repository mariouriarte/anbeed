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
    
    public function executeIndex(sfWebRequest $request)
    {
        parent::executeIndex($request);
        
        $user = $this->getUser();
        $user->getAttributeHolder()->remove('empresa');
        $user->getAttributeHolder()->remove('producto');
    }
    
    public function executeAdministrarEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        
        $this->empresa = $this->getRoute()->getObject();
        
        $user->setAttribute('empresa', $this->empresa);
        
        $environment = sfConfig::get('sf_environment');
        if($environment == 'dev')
        {
            $this->env = '_dev';
        } else if($environment == 'prod')
        {
            $this->env = '';
        }
    }
    
    public function executeNew(sfWebRequest $request)
    {
        parent::executeNew($request);
        
        $user = $this->getUser();
    } 
    
    public function executeFilter(sfWebRequest $request)
    {
        parent::executeFilter($request);
    }    
    
    public function executeListIrPortal(sfWebRequest $request)
    {
        //$this->getUser()->setAttribute('empresa', NULL);
        $this->redirect('/portal_dev.php/inicio/index');
    }
}
