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
        $user->getAttributeHolder()->remove('medicamento');
        $user->getAttributeHolder()->remove('cosmetico');
        $user->getAttributeHolder()->remove('dispositivo_medico');
        $user->getAttributeHolder()->remove('higiene');
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
    
    // Cambiado para que sf_user tenga a la empresay se pueda crear
    // empresas sin conflictos
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $empresa = $form->save();
        
        // -----------
        $user = $this->getUser();
        $user->setAttribute('empresa', $empresa);
        // -----------
        
      } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
            $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $empresa)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@empresa_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'empresa_edit', 'sf_subject' => $empresa));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
    }
}
