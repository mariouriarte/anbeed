<?php

require_once dirname(__FILE__).'/../lib/formulario516GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario516GeneratorHelper.class.php';

/**
 * formulario516 actions.
 *
 * @package    anbeed
 * @subpackage formulario516
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario516Actions extends autoFormulario516Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $env = '';
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
        $this->redirect('/portal'.$env.'.php/inicio/index');
    }
    public function executeEditar(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->redirect("/farmaceutica_dev.php/form516/edit?id=$id");
    }
}
